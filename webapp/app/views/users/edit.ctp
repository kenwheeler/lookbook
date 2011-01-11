<div id="editForm">

<?php

echo $form->create('User', array('action' => 'edit'));
echo $form->input('first_name');
echo $form->input('last_name');
echo $form->input('username');
echo $form->input('email_address');
echo $form->input('id', array('type' => 'hidden'));
echo $form->end('save account');

?>

</div>