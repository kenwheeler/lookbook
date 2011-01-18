<?php

class UsersProduct extends AppModel {
	
   var $name = 'UsersProduct';
	
	var $hasMany = array(
	        'Product' => array(
	            'className'     => 'Product',
	            'foreignKey'    => 'product_id',
	            'order'    => 'Product.created_at DESC'
	    )
	);

}

?>