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
	
	function delete($id=null) {
		App::Import('Model','CollectionsProduct');
		$clProduct = new CollectionsProduct;
		$clProduct->deleteAll(array('CollectionsProduct.collection_id' => $id));
		if($this->Collection->delete($id)){
		  $this->redirect('/collections');
		}
	}
	
	function edit($id=null){
		
		  $this->set('title_for_layout', 'edit collection');
		  $user_id = $this->Session->read('Auth.User.id');
	      $this->set('userId' , $user_id);
		  $collection = $this->Collection->find('first', array('conditions' => array('Collection.id' => $id)));
		  $this->set('collection' , $collection);
		  App::Import('Model','UsersProduct');
		  $usersProduct = new UsersProduct;
 		  $usersProduct->order = 'UsersProduct.created_at DESC';
		  $products = $usersProduct->find('all', array('conditions' => array('UsersProduct.user_id' => $user_id)));
		  $this->set('products',$products);
		  App::Import('Model','CollectionsProduct');
		  $clProduct = new CollectionsProduct;
 		  $clProduct->order = 'CollectionsProduct.created_at DESC';
		  $clProducts = $clProduct->find('all', array('conditions' => array('CollectionsProduct.collection_id' => $id)));
		  $this->set('clproducts',$clProducts);
			if (empty($this->data)) {
					$this->data = $this->Collection->read();
				} else {
					$this->Collection->data = Sanitize::clean($this->data);
					$clproducts = explode("|",$this->passedArgs['products']);
					 for($i=0;$i<count($clproducts);$i++){
						$clProduct->data[$i]['CollectionsProduct']['id'] = String::uuid();
						$clProduct->data[$i]['CollectionsProduct']['product_id'] = $clproducts[$i];
						$clProduct->data[$i]['CollectionsProduct']['collection_id'] = $id;
						}
						$clProduct->deleteAll(array('CollectionsProduct.collection_id' => $id));
					if ($this->Collection->save($this->data)) {
						$clProduct->saveAll();
						$this->redirect('/collections');
					}
				}
			
	}
	
	function view($id) {
		$this->set('title_for_layout', 'collections');
		  $user_id = $this->Session->read('Auth.User.id');
		  $this->set('userId',$user_id);
		  $this->Collection->order = 'Collection.created_at DESC';
		  $collections = $this->Collection->find('all', array('conditions' => array('id' => $id)));
		  $this->set('collections',$collections);
	}
	
	function add(){
	  $this->set('title_for_layout', 'add collection');
		$user_id = $this->Session->read('Auth.User.id');
		App::Import('Model','UsersProduct');
		$usersProduct = new UsersProduct;
		$usersProduct->order = 'UsersProduct.created_at DESC';
		$products = $usersProduct->find('all', array('conditions' => array('UsersProduct.user_id' => $user_id)));
		$this->set('products',$products);
		
		if (!empty($this->data))
		{
			$this->Collection->data = Sanitize::clean($this->data);
			$collectionId=String::uuid();
			$this->Collection->data['Collection']['id'] = $collectionId;
			$this->Collection->data['Collection']['user_id'] = $this->Session->read('Auth.User.id');
			App::Import('Model','CollectionsProduct');
			$clProduct = new CollectionsProduct;
			$clProducts = explode("|",$this->passedArgs['products']);
			 for($i=0;$i<count($clProducts);$i++){
				$clProduct->data[$i]['CollectionsProduct']['id'] = String::uuid();
				$clProduct->data[$i]['CollectionsProduct']['product_id'] = $clProducts[$i];
				$clProduct->data[$i]['CollectionsProduct']['collection_id'] = $this->Collection->data['Collection']['id'];
				}
			if ($this->Collection->save())
			{ 
				$clProduct->saveAll();
				$this->redirect('/collections');
			}
		}
	}
}

?>