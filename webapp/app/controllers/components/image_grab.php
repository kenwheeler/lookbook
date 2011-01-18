<?php
class ImageGrabComponent extends Object {

  var $source;
  var $save_to;
  var $set_extension;
  var $quality;
  var $save_image;
  var $productid;

  public function download($method = 'curl') // default method: cURL
  {
  $info = @GetImageSize($this->source);
  $mime = $info['mime'];

  // What sort of image?
  $type = substr(strrchr($mime, '/'), 1);

  switch ($type)
  {
  case 'jpeg':
      $image_create_func = 'ImageCreateFromJPEG';
      $image_save_func = 'ImageJPEG';
  	$new_image_ext = 'jpg';

  	// Best Quality: 100
  	$quality = isSet($this->quality) ? $this->quality : 100;
      break;

  case 'png':
      $image_create_func = 'ImageCreateFromPNG';
      $image_save_func = 'ImagePNG';
  	$new_image_ext = 'png';

  	// Compression Level: from 0  (no compression) to 9
  	$quality = isSet($this->quality) ? $this->quality : 0;
      break;

  case 'bmp':
      $image_create_func = 'ImageCreateFromBMP';
      $image_save_func = 'ImageBMP';
  	$new_image_ext = 'bmp';
      break;

  case 'gif':
      $image_create_func = 'ImageCreateFromGIF';
      $image_save_func = 'ImageGIF';
  	$new_image_ext = 'gif';
      break;

  case 'vnd.wap.wbmp':
      $image_create_func = 'ImageCreateFromWBMP';
      $image_save_func = 'ImageWBMP';
  	$new_image_ext = 'bmp';
      break;

  case 'xbm':
      $image_create_func = 'ImageCreateFromXBM';
      $image_save_func = 'ImageXBM';
  	$new_image_ext = 'xbm';
      break;

  default:
  	$image_create_func = 'ImageCreateFromJPEG';
    $image_save_func = 'ImageJPEG';
  	$new_image_ext = 'jpg';
  }

  if(isSet($this->set_extension))
  {
  $ext = strrchr($this->source, ".");
  $strlen = strlen($ext);
  $new_name = basename(substr($this->source, 0, -$strlen)).'.'.$new_image_ext;
  }
  else
  {
  $new_name = $this->productid . '.jpeg';
  }

  $save_to = $this->save_to.$new_name;

      if($method == 'curl')
  	{
      $save_image = $this->LoadImageCURL($save_to);
  	}
  	elseif($method == 'gd')
  	{
  	$img = $image_create_func($this->source);

  	    if(isSet($quality))
  	    {
  		   $save_image = $image_save_func($img, $save_to, $quality);
  		}
  		else
  		{
  		   $save_image = $image_save_func($img, $save_to);
  		}
  	}
  	return $save_to;
  }

  public function LoadImageCURL($save_to)
  {
  $ch = curl_init($this->source);
  $fp = fopen($save_to, "wb");

  // set URL and other appropriate options
  $options = array(CURLOPT_FILE => $fp,
                   CURLOPT_HEADER => 0,
                   CURLOPT_FOLLOWLOCATION => 1,
  	             CURLOPT_TIMEOUT => 60); // 1 minute timeout (should be enough)

  curl_setopt_array($ch, $options);

  curl_exec($ch);
  curl_close($ch);
  fclose($fp);
  
  }
  
  public function make_thumb($src,$dest,$desired_height)
  {
    /* read the source image */
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    /* find the "desired height" of this thumbnail, relative to the desired width  */
    $desired_width = floor($width*($desired_height/$height));

    /* create a new, "virtual" image */
    $virtual_image = imagecreatetruecolor($desired_width,$desired_height);

    /* copy source image at a resized size */
    imagecopyresampled($virtual_image,$source_image,0,0,0,0,$desired_width,$desired_height,$width,$height);

    /* create the physical thumbnail image to its destination */
    imagejpeg($virtual_image,$dest);
  }
  
}
?>