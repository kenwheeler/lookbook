<?php
class FileUploadComponent extends Object {
	/**
	 * uploads files to the server
	 * @params:
	 *		$folder 	= the folder to upload the files e.g. 'img/files'
	 *		$formdata 	= the array containing the form files
	 *		$itemId 	= id of the item (optional) will create a new sub folder
	 * @return:
	 *		will return an array with the success of each file upload
	 */
	public function uploadFile($folder, $formdata, $name) {
		
		// list of permitted file types, this is only images but documents can be added
		$permitted = array ('image/gif', 'image/jpeg', 'image/pjpeg', 'image/png' );
		
		$file = $formdata;
		$this->log($file, LOG_DEBUG);
		
		// loop through and deal with the files
		
		// assume filetype is false
		$typeOK = false;
		// check filetype is ok
		foreach ( $permitted as $type ) {
			if ($type == $file ['type']) {
				$this->log($type, LOG_DEBUG);
				$typeOK = true; 
				break;
			}
		}
				
		/*
			 * test image file for image attributes to secure server against trojan attack
			 */
		
		if (! exif_imagetype ( $file['tmp_name'] )) {
			$typeOK = false;
		}
		if (! getimagesize ( $file['tmp_name'] )) {
			$typeOK = false;
		}
		
		// if file type ok upload the file
		if ($typeOK) {
			$this->log("type ok", LOG_DEBUG);
			// switch based on error code
			$file = $this->moveUploadedFile($file, $folder, $name);
			switch ($file ['error']) {
				case 0 :
					return $file;
					break;
				case 3 :
					// an error occured
					$file ['error'] = "Error uploading. Please try again.";
					break;
				default :
					// an error occured
					$file ['error'] = "System error uploading. Contact webmaster.";
					break;
			}
		} elseif ($file ['error'] == 4) {
			// no file was selected for upload
			$file ['error'] = "No file Selected";
		} else {
			// unacceptable file type
			$file ['error'] = "This file cannot be uploaded. Acceptable file types: gif, jpg, png.";
		}
		//}
		return $file;
		
	}
	
	private function moveUploadedFile($file, $folder, $name){
		$folder_url = WWW_ROOT . $folder;
		
		// create the folder if it does not exist
        if (! is_dir ( $folder_url )) {
			mkdir ( $folder_url );
		}
		
		$ext = explode('/', $file['type']);
		$ext = "." . $ext[1];
		$filename = $name . $ext;
		
		// create full filename
		$full_url = $folder_url . '/' . $filename;
		
		// upload the file
		$success = move_uploaded_file ( $file ['tmp_name'], $full_url );
		$this->log(">>>>>>>>>>>".$success, LOG_DEBUG);
		
		if($success){
			$file['file'] = $full_url;
			$file['name'] = $filename;
			$file['directory'] = $folder_url;
			$file['ext'] = $ext;
		}
		
		return $file;
	}
    
    public function moveFile($file, $folder, $name)
    {
        $folder_url = WWW_ROOT . $folder;
		
		// create the folder if it does not exist
        if (! is_dir ( $folder_url )) {
			mkdir ( $folder_url );
		}
		
		$ext = explode('/', $file['type']);
		$ext = "." . $ext[1];
		$filename = $name . $ext;
		
		// create full filename
		$full_url = $folder_url . '/' . $filename;
		
		// upload the file
		$success = rename ( $file ['tmp_name'], $full_url );
		$this->log(">>>>>>>>>>>".$success, LOG_DEBUG);
		
		if($success){
			$file['file'] = $full_url;
			$file['name'] = $filename;
			$file['directory'] = $folder_url;
			$file['ext'] = $ext;
		}
        return $file;
    }
	
	public function resizeImage($file, $scale) {
		// If they wish to scale the image.
		if (isset ( $scale )) {
			// Create our image object from the image.
			$this->log($file, LOG_DEBUG);
			$fullImage = null;
			
			switch ($file['type']){
				case 'image/gif':
					$fullImage = imagecreatefromgif ( $file );
					break;
				case 'image/jpeg':
				case 'image/pjpeg':
					$fullImage = imagecreatefromjpeg ( $file );
					break;
				case 'image/png':
					$fullImage = imagecreatefrompng ( $file );
					break;
			}
			
			// Get the image size, used in calculations later.
			$fullSize = getimagesize ( $file['file'] );
			// Create our thumbnail size, so we can resize to this, and save it.
			$newImage = imagecreatetruecolor ( $fullSize [0] * $scale, $fullSize [1] * $scale );
			imagealphablending($newImage, false);
      $color = imagecolortransparent($newImage, imagecolorallocate($newImage, 0, 0, 0));
      imagefill($newImage, 0, 0, $color);
      imagesavealpha($newImage, true);
			// Resize the image.
			imagecopyresampled ( $newImage, $fullImage, 0, 0, 0, 0, $fullSize [0] * $scale, $fullSize [1] * $scale, $fullSize [0], $fullSize [1] );
			
			switch ($file['type']){
				case 'image/gif':
					imagegif ( $newImage, $file['file']);
					break;
				case 'image/jpeg':
				case 'image/pjpeg':
					imagejpeg ( $newImage, $file['file']);
					break;
				case 'image/png':
					imagepng ( $newImage, $file['file']);
					break;
			}
			
			return $file;
		}
	}
	
	public function resizeImageToWidth($file, $width){
		
			$fullImage = null;
			
			switch ($file['type']){
				case 'image/gif':
					$fullImage = imagecreatefromgif ( $file['file'] );
					break;
				case 'image/jpeg':
				case 'image/pjpeg':
					$fullImage = imagecreatefromjpeg ( $file['file'] );
					break;
				case 'image/png':
					$fullImage = imagecreatefrompng ( $file['file'] );
					break;
			}
			
			$size = getimagesize ( $file['file'] );
			
			$scale = $width/$size[0];
			
			$newImage = imagecreatetruecolor ( $size [0] * $scale, $size [1] * $scale );
      imagealphablending($newImage, false);
      $color = imagecolortransparent($newImage, imagecolorallocate($newImage, 0, 0, 0));
      imagefill($newImage, 0, 0, $color);
      imagesavealpha($newImage, true);
			imagecopyresampled ( $newImage, $fullImage, 0, 0, 0, 0, $size [0] * $scale, $size [1] * $scale, $size [0], $size [1] );
					
			switch ($file['type']){
				case 'image/gif':
					imagegif ( $newImage, $file['file']);
					break;
				case 'image/jpeg':
				case 'image/pjpeg':
					imagejpeg ( $newImage, $file['file']);
					break;
				case 'image/png':
					imagepng ( $newImage, $file['file']);
					break;
			}
			
			return $file;
			
	}
	
	public function copyFile($file, $filename){
		if(copy($file['file'], $file['directory'] .  "/" . $filename . $file['ext'])){
			$file['name'] = $filename . $file['ext'];
			$file['file'] = $file['directory'] . "/" . $file['name'];
			return $file;
		}
		
		return false;
	}
	
	public function squareImage($file){
		$size = getimagesize($file['file']);
		$width = $size[0];
		$height = $size[1];
		
		switch ($file['type']){
				case 'image/gif':
					$fullImage = imagecreatefromgif ( $file['file'] );
					break;
				case 'image/jpeg':
				case 'image/pjpeg':
					$fullImage = imagecreatefromjpeg ( $file['file'] );
					break;
				case 'image/png':
					$fullImage = imagecreatefrompng ( $file['file'] );
					break;
			}		
		
		if($width < $height){
			$newWidth = $width;
			$newHeight = $width;
			$newImage = imagecreatetruecolor ( $width, $width);
			imagealphablending($newImage, false);
      $color = imagecolortransparent($newImage, imagecolorallocate($newImage, 0, 0, 0));
      imagefill($newImage, 0, 0, $color);
      imagesavealpha($newImage, true);
			imagecopyresampled ( $newImage, $fullImage, 0, 0, 0, ($height-$newHeight)/2, $width, $height, $width, $height );
		}else if ($height < $width){
			$newWidth = $height;
			$newHeight = $height;
			$newImage = imagecreatetruecolor ( $height, $height);
			imagealphablending($newImage, false);
      $color = imagecolortransparent($newImage, imagecolorallocate($newImage, 0, 0, 0));
      imagefill($newImage, 0, 0, $color);
      imagesavealpha($newImage, true);
			imagecopyresampled ( $newImage, $fullImage, 0, 0, ($width-$newWidth)/2, 0, $width, $height, $width, $height );
		}else{
			$newImage = $fullImage;
		}
		
						
			switch ($file['type']){
				case 'image/gif':
					imagegif ( $newImage, $file['file']);
					break;
				case 'image/jpeg':
				case 'image/pjpeg':
					imagejpeg ( $newImage, $file['file']);
					break;
				case 'image/png':
					imagepng ( $newImage, $file['file']);
					break;
			}
					
		return $file;
	}
	

}
?>