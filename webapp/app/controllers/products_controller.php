<?php

class ProductsController extends AppController {
  
  var $name = 'Products';
	
	function beforeFilter() {
		$this->Auth->allow('add');
		parent::beforeFilter();
	}
	
	function index() {
		$user_id = $this->Session->read('Auth.User.id');
		$this->Product->order = 'Product.created_at DESC';
		$products = $this->Product->find('all', array('conditions' => array('user_id' => $user_id)));
		$this->set('products',$products);
	}
	
	
	function add() {
		  
	  if(!empty($this->passedArgs))
	  {
	  $this->data['Product']['user_id']=$this->passedArgs['user_id'];
	  $product_image = $this->passedArgs['product_image'];
	  $product_image = str_replace("*","/",$product_image);
      $product_image = str_replace(";","?",$product_image);
      $product_image = str_replace("|","&",$product_image);
      $product_image = str_replace("^",":",$product_image);
	  $this->data['Product']['product_image']=$product_image;
	  $this->data['Product']['product_name']=$this->passedArgs['product_name'];
	  $this->data['Product']['product_price']=$this->passedArgs['product_price'];
		if (!empty($this->data))
		{
			$this->Product->data = Sanitize::clean($this->data);
    
			if ($this->Product->save())
			{
				echo "alert('Product Added'); destroyLookbook();";
			}
			else{ 
			  echo "alert('Product Add Failed'); destroyLookbook();";
			}
		}
		}
	}
	
}

?>