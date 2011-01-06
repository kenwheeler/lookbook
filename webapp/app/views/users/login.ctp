<?php

echo $form->create('User', array('action' => 'login'));
echo $form->input('email_address');
echo $form->input('password');
echo $form->end('Login');
echo $html->link('Register Now', array('controller'=>'users','action'=>'register'));

?>