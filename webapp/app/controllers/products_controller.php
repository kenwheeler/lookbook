<?php

class ProductsController extends AppController {
  
  var $name = 'Products';
  var $components = array('ImageGrab');
	
	function beforeFilter() {
		$this->Auth->allow('add');
		parent::beforeFilter();
	}
	
	function index() {
	  $this->set('title_for_layout', 'products');
		$user_id = $this->Session->read('Auth.User.id');
		App::Import('Model','UsersProduct');
		$usersProduct = new UsersProduct;
		$usersProduct->order = 'UsersProduct.created_at DESC';
		$products = $usersProduct->find('all', array('conditions' => array('UsersProduct.user_id' => $user_id)));
		$this->set('products',$products);
	}
	
	function home() {
	  $this->set('title_for_layout', 'home');
		$this->Product->order = 'Product.created_at DESC';
		$products = $this->Product->find('all');
		$this->set('products',$products);
		$user_id = $this->Session->read('Auth.User.id');

		App::Import('Model','UsersProduct');
		$usersProduct = new UsersProduct;
		$usersProduct->order = 'UsersProduct.created_at DESC';
		$usersProducts = $usersProduct->find('all', array('conditions' => array('UsersProduct.user_id' => $user_id)));
		$this->set('usersProducts',$usersProducts);
	}
	
	function view($id = null){
			$product = $this->Product->find('all', array('conditions' => array('Product.id' => $id)));
			$this->set('product',$product);
			$this->set('title_for_layout', $product[0]['Product']['product_name']);
	}
	
	
	function add() {
		  
	  if(!empty($this->passedArgs))
	  {
	  
	  function cleanString($string) {
	    $string = str_replace("*","/",$string);
      $string = str_replace(";","?",$string);
      $string = str_replace("|","&",$string);
      $string = str_replace("^",":",$string);
      return $string;
	  }  
	  
	  $this->data['Product']['id'] = String::uuid();
	  $this->data['Product']['user_id']=$this->passedArgs['user_id'];
	  $this->data['Product']['product_url']=cleanString($this->passedArgs['product_url']);
	  $this->data['Product']['product_image']=cleanString($this->passedArgs['product_image']);
	  $this->data['Product']['product_name']=cleanString($this->passedArgs['product_name']);
	  $this->data['Product']['product_price']=cleanString($this->passedArgs['product_price']);
	  
		if (!empty($this->data))
		{
		  
		  echo "alert('Product Added'); destroyLookbook();";
		  
		  $this->ImageGrab->source = $this->data['Product']['product_image'];
		  $this->ImageGrab->save_to = 'img/uploads/';
		  $this->ImageGrab->productid = $this->data['Product']['id'];
		  $savedImage = $this->ImageGrab->download('curl');
		  $thumbUrl = 'img/uploads/' . $this->ImageGrab->productid . "_thumb.jpeg";
		  $this->ImageGrab->make_thumb($savedImage, $thumbUrl, 250);
		  $this->data['Product']['product_image']=$savedImage;
		  $this->data['Product']['thumb_url'] = $thumbUrl;
		  
			$this->Product->data = Sanitize::clean($this->data);
			
			App::Import('Model','UsersProduct');
			$usersProduct = new UsersProduct;
			
			$usersProduct->data['UsersProduct']['id'] = String::uuid();
  	  $usersProduct->data['UsersProduct']['product_id'] = $this->data['Product']['id'];
  	  $usersProduct->data['UsersProduct']['user_id'] = $this->Auth->user('id');
    
			if ($this->Product->save())
			{
			  if ($usersProduct->save()){
				
				}
			}
		}
		}
	}
	
	function delete($id=null) {
	  App::Import('Model','UsersProduct');
		$usersProduct = new UsersProduct;
		if($usersProduct->delete($id)){
		  $this->redirect($this->referer());
		}
	}
	
}

?>