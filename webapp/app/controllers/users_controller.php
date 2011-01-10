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
		
		if ($user = $this->User->findByUsername($this->params['slug'])) { 
		        $this->set('user', $user); 
		} 
		
	}
	
}

?>