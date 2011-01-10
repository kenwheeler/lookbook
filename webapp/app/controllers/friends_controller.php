<?php

class FriendsController extends AppController {
  
  var $name = 'Friends';
	
	function beforeFilter() {
		parent::beforeFilter();
	}
	
	function index() {
	  App::import('Model', 'User');
    $friends = new User;
	  $followers = $friends->find('all', array('joins' => array(
        array(
            'table' => 'friends',
            'alias' => 'Friend',
            'type' => 'inner',
            'foreignKey' => false,
            'conditions'=> array('Friend.to_user_id'=>$this->Auth->user('id'), 'User.id = Friend.user_id')
        )
    ))); 
    $followees = $friends->find('all', array('joins' => array(
        array(
            'table' => 'friends',
            'alias' => 'Friend',
            'type' => 'inner',
            'foreignKey' => false,
            'conditions'=> array('Friend.user_id'=>$this->Auth->user('id'), 'User.id = Friend.to_user_id')
        )
    )));
	  $this->set('followers',$followers);
	  $this->set('followees',$followees);
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