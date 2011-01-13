<?php 

class UsersController extends AppController {
	
	function beforeFilter() {
		$this->Auth->allow('register');
		parent::beforeFilter();
	}

	function login()
	{
	  $this->set('title_for_layout', 'lookbook - lets make a list');
		if($this->Connect->user()){
			if(!$this->Auth->user('username')){
			$this->redirect('/users/edit');
			}
			else{
			$this->redirect('/');	
			}
		}
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
			$this->User->data = Sanitize::clean($this->data);
			$this->User->data['id'] = String::uuid();
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
			
				if($this->Connect->user()){
				$picture="https://graph.facebook.com/". $this->Connect->user('id') . "/picture";
				$this->set('picture', $picture);
				}
		        App::import('Model', 'Friend');
		        $friend = new Friend;
		        if($following = $friend->find('first',array('conditions' => array('Friend.user_id' => $this->Auth->user('id'), 'Friend.to_user_id' => $currentUser['User']['id'])))){
		        $this->set('following', true);
		        }
		        else {
		        $this->set('following', false); 
		        }
		        $this->set('currentUser', $currentUser); 
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