<?php

class UsersProductsController extends AppController {
  
  var $name = 'UsersProducts';
	
	function beforeFilter() {
		parent::beforeFilter();
	}
	
	function add($id=null) {
		  
	  if(!empty($this->passedArgs))
	  {
	  $this->data['UsersProduct']['id'] = String::uuid();
	  $this->data['UsersProduct']['product_id'] = $id;
	  $this->data['UsersProduct']['user_id'] = $this->Auth->user('id');
		if (!empty($this->data))
		{
			$this->UsersProduct->data = Sanitize::clean($this->data);
			if($this->UsersProduct->save())
			{
				$this->redirect($this->referer());
			}
		}
		}
	}
	
}

?>