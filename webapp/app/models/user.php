<?php

class User extends AppModel {
	
   var $name = 'User';

	var $validate = array(
	    'username' => array(
	        'this field is required' => 'notEmpty',
	        'this username is taken' => 'isUnique',
			'username must be more than 4 characters' => array('rule' => array('minLength', 8)),
			'username must be less than 15 characters' => array('rule'=>array('maxLength', 15))
	    ),
		'email_address' => array(
	        'this field is required' => 'notEmpty',
	        'this email is already in use' => 'isUnique',
			'please enter a valid email address' => 'email'
	    ),
			'passwrd' => array( 
			'this field is required' => 'notEmpty'
			)
	);

}

?>