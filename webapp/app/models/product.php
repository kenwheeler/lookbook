<?php

class Product extends AppModel {
   var $name = 'Product';
   	var $belongsTo = array(
	        'User' => array(
	            'className'     => 'User'
	        )
	    );
}

?>