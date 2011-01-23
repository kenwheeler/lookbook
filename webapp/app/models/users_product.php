<?php

class UsersProduct extends AppModel {
	
   var $name = 'UsersProduct';
	var $belongsTo = array(
	        'Product' => array(
	            'className'     => 'Product',
	            'foreignKey'    => 'product_id',
	            'order'    => 'Product.created_at DESC'
	    ));

}

?>