<?php

class ItemsController extends AppController {
  
  var $name = 'Items';
	
	function beforeFilter() {
		$this->Auth->allow('add');
		parent::beforeFilter();
	}
	
	function index() {
		$user_id = $this->Session->read('Auth.User.id');
		$this->Item->order = 'Item.created_at DESC';
		$items = $this->Item->find('all', array('conditions' => array('user_id' => $user_id)));
		$this->set('items',$items);
	}
	
	
	function add() {
		  
	  if(!empty($this->passedArgs))
	  {
	  $this->data['Item']['user_id']=$this->passedArgs['user_id'];
	  $product_image = $this->passedArgs['product_image'];
	  $product_image = str_replace("*","/",$product_image);
      $product_image = str_replace(";","?",$product_image);
      $product_image = str_replace("|","&",$product_image);
      $product_image = str_replace("^",":",$product_image);
	  $this->data['Item']['product_image']=$product_image;
	  $this->data['Item']['product_name']=$this->passedArgs['product_name'];
	  $this->data['Item']['product_price']=$this->passedArgs['product_price'];
		if (!empty($this->data))
		{
			$this->Item->data = Sanitize::clean($this->data);
    
			if ($this->Item->save())
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