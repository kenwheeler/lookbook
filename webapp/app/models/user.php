<?php

class User extends AppModel {
   var $name = 'User';
   var $validate = array(
	   'first_name' => array( 
			'rule' => 'notEmpty'
		),
	   'last_name' => array( 
			'rule' => 'notEmpty'
		),
		'email_address' => array( 
			'rule' => 'notEmpty'
		),
       'password' => array( 
			'rule' => 'notEmpty'
		)
   );

}

?>