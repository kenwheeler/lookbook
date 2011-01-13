<?php 

class CollectionsController extends AppController {

	var $name = 'Collections';

	function index(){
	  $this->set('title_for_layout', 'collections');
	  $user_id = $this->Session->read('Auth.User.id');
		$this->Collection->order = 'Collection.created_at DESC';
		$collections = $this->Collection->find('all', array('conditions' => array('user_id' => $user_id)));
		$this->set('collections',$collections);
	}
	
	function add(){
	  $this->set('title_for_layout', 'add collection');
		if (!empty($this->data))
		{
			$this->Collection->data = Sanitize::clean($this->data);
			$this->Collection->data['id'] = String::uuid();
			$this->Collection->data['Collection']['user_id'] = $this->Session->read('Auth.User.id');
			if ($this->Collection->save())
			{ 
				$this->redirect('/collections');
			}
		}
	}
}

?>