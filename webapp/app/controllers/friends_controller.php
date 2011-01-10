<?php

class FriendsController extends AppController {
  
  var $name = 'Friends';
	
	function beforeFilter() {
		parent::beforeFilter();
	}
	
	function index() {
	  
	}
	
	function add($friends_id = null) {
	  
	      if($friends_id) {
  			$this->Friend->data['Friend']['user_id'] = $this->Auth->user('id');
  			$this->Friend->data['Friend']['to_user_id'] = $friends_id;
  			$this->Friend->data['Friend']['id'] = String::uuid();
  			if($this->Friend->save())
  			{
  				$this->redirect($this->referer());
  			}
	      }
	}
	
}

?>