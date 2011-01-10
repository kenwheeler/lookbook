<?php

class User extends AppModel {
	
   var $name = 'User';

   var $validate = array(
	   'username' => array( 
			'rule' => 'notEmpty'
		),
		'email_address' => array( 
			'rule' => 'notEmpty'
		),
       'passwrd' => array( 
			'rule' => 'notEmpty'
		)
   );

}

?>