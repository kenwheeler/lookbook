<?php 

class UsersController extends AppController {
	
	function beforeFilter() {
		$this->Auth->allow('register');
		parent::beforeFilter();
	}

	function login()
	{

	}

	function logout(){
		$this->Session->setFlash('Logout');
		$this->redirect($this->Auth->logout());
	}
	
	function register() {
	  
		if (!empty($this->data))
		{
			$this->User->data = Sanitize::clean($this->data);
			if ($this->User->save())
			{
				$this->redirect('/');
			}
		}
	}
	
}

?>