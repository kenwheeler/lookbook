<?php

echo $form->create('User', array('action' => 'register'));
echo $form->input('first_name');
echo $form->input('last_name');
echo $form->input('email_address');
echo $form->input('password');
echo $form->end('Register');

?>