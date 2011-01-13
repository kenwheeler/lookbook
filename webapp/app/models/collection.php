<?php

class Collection extends AppModel {
   var $name = 'Collection';
   
   var $validate = array(
 	    'collection_name' => array(
 	        'this field is required' => 'notEmpty'));
}

?>