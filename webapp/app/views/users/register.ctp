<div id="registerForm">

<?php

echo $form->create('User', array('action' => 'register'));
echo $form->input('username');
echo $form->input('email_address');
echo $form->input('passwrd', array('value' => '', 'label' => 'Password' , 'type' => 'password'));
echo $form->end('Register');

?>
</div>