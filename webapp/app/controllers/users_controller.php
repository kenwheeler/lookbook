<?php 

class UsersController extends AppController {
	var $components =array("ImageGrab");
	function beforeFilter() {
		$this->Auth->allow('register');
		parent::beforeFilter();
	}

	function login()
	{
	  $this->set('title_for_layout', 'lookbook - lets make a list');
	}

	function logout(){
		$this->Session->setFlash('Logout');
		$this->redirect($this->Auth->logout());
	}
	
	function register() {
	  $this->set('title_for_layout', 'register');
		if (!empty($this->data))
		{
			$this->data['User']['password'] = $this->Auth->password($this->data['User']['passwrd']);
			$this->data['User']['id'] = String::uuid();
			
			if ($this->data ['Image'] ['file'] ['error'] == 0) {
				$img_id = String::uuid ();
				$file = $this->ImageGrab->uploadFile ( 'img/uploads/', $this->data ['Image'] ['file'], $img_id );
			}
			
			if (!empty ( $file )) {
			  $thumbUrl = 'img/uploads/' . $this->data['User']['id'] . "_profile.jpeg";
  		  $this->ImageGrab->make_thumb($file['file'], $thumbUrl, 50);
  		  $this->data['User']['profile_img'] = $thumbUrl;
		  }
		  
		  $this->User->data = Sanitize::clean($this->data);
			
			if ($this->User->save())
			{
				$this->Auth->login($this->data);
				$this->redirect('/');
			}
			$this->data['User']['passwrd'] = null;
		}
	}
	
	function view() {
		
		if ($currentUser = $this->User->findByUsername($this->params['slug'])) {
		$this->set('title_for_layout', $this->params['slug']);
			
		        App::import('Model', 'Friend');
		        $friend = new Friend;
		        if($following = $friend->find('first',array('conditions' => array('Friend.user_id' => $this->Auth->user('id'), 'Friend.to_user_id' => $currentUser['User']['id'])))){
		        $this->set('following', true);
		        }
		        else {
		        $this->set('following', false); 
		        }
		        $this->set('currentUser', $currentUser); 
				$user_id = $this->Session->read('Auth.User.id');
			    $this->set('userId' , $user_id);
				App::import('Model', 'Product');
				$Product = new Product;
				App::Import('Model','UsersProduct');
    		$usersProduct = new UsersProduct;
    		$usersProduct->order = 'UsersProduct.created_at DESC';
    		$products = $usersProduct->find('all', array('conditions' => array('UsersProduct.user_id' => $currentUser['User']['id'])));
    		$user_id = $this->Session->read('Auth.User.id');
    		$usersProducts = $usersProduct->find('all' ,array('conditions' => array('UsersProduct.user_id' => $user_id)));
    		$this->set('usersProducts',$usersProducts);
    		$this->set('products',$products);
    		
		} 
		
	}
	
	function account(){
		$this->set('title_for_layout', 'account');
	}
	
	function edit(){
		
		  $this->set('title_for_layout', 'edit account');
		
			$this->User->id = $this->Auth->user('id');
		
			if (empty($this->data)) {
					$this->data = $this->User->read();
				} else {
				  
				  if ($this->data ['Image'] ['file'] ['error'] == 0) {
    				$img_id = String::uuid ();
    				$file = $this->ImageGrab->uploadFile ( 'img/uploads/', $this->data ['Image'] ['file'], $img_id );
    			}

    			if (!empty ( $file )) {
    			  $thumbUrl = 'img/uploads/' . $this->User->id . "_profile.jpeg";
      		  $this->ImageGrab->make_thumb($file['file'], $thumbUrl, 50);
      		  $this->data['User']['profile_img'] = $thumbUrl;
    		  }
				  
					$this->User->data = Sanitize::clean($this->data);
					if ($this->User->save($this->data)) {
						$user = $this->User->read(null, $this->Auth->user('id'));
						$this->Session->write($this->Auth->sessionKey, $user['User']);
						$this->redirect('/');
					}
				}
			
	}
	
}

?>