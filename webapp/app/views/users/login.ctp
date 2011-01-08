<div id="loginForm">
	
<h1>LOOKBOOK</h1>
	
<?php

echo $form->create('User', array('action' => 'login'));
echo $form->input('email_address');
echo $form->input('password');
echo $html->link('Register Now', array('controller'=>'users','action'=>'register'));
echo $form->end('Login');

?>

</div>