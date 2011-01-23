<?php

class Collection extends AppModel {
   var $name = 'Collection';
   var $recursive = 2;
   var $hasMany = 'CollectionsProduct';
   var $validate = array(
 	    'collection_name' => array(
 	        'this field is required' => 'notEmpty'));
	}

?>