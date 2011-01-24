<div id="editForm">

<?php

echo $form->create('User', array('action' => 'edit', 'enctype'=>'multipart/form-data'));
?>
<p>Upload a profile image:</p>
<?php echo $form->file('Image.file'); ?>
<p>Accepted file types for profile images are GIF, JPG and PNG.</p>
<?
echo $form->input('first_name');
echo $form->input('last_name');
echo $form->input('email_address');
echo $form->input('username');
echo $form->input('id', array('type' => 'hidden'));
echo $form->end('save account');

?>

</div>