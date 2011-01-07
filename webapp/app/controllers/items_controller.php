<?php

class ItemsController extends AppController {
  
  var $name = 'Items';
	
	function beforeFilter() {
		$this->Auth->allow('add');
		parent::beforeFilter();
	}
	
	
	
	function add() {
	  
	  if(!empty($this->passedArgs))
	  {	  
	  $this->data['Item']['user_id']=$this->passedArgs['user_id'];
		if (!empty($this->data))
		{
			$this->Item->data = Sanitize::clean($this->data);
    
			if ($this->Item->save())
			{
				echo "Product Added";
			}
			else{ 
			  echo "Product Add Failed";
			}
		}
		}
	}
	
}

?>