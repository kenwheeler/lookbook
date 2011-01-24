<div id="registerForm">

<?php

echo $form->create('User', array('action' => 'register', 'enctype'=>'multipart/form-data'));
?>
<p>Upload a profile image:</p>
<?php echo $form->file('Image.file'); ?>
<p>Accepted file types for profile images are GIF, JPG and PNG.</p>
<?
echo $form->input('email_address');
echo $form->input('username');
echo $form->input('passwrd', array('value' => '', 'label' => 'Password' , 'type' => 'password'));
echo $form->end('Register');

?>
</div>