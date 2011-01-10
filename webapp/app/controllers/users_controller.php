<?php 

class UsersController extends AppController {
	
	function beforeFilter() {
		$this->Auth->allow('register');
		parent::beforeFilter();
	}

	function login()
	{
		if($this->Connect->user()){
			$this->redirect('/');
		}
	}

	function logout(){
		$this->Session->setFlash('Logout');
		$this->redirect($this->Auth->logout());
	}
	
	function register() {
	  
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
	
}

?>