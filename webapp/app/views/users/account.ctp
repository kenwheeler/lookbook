<h1>account</h1>
<table class="user_info">
<tr><td>profile image:</td><td>
<? if($facebookUser): ?>
<img src="https://graph.facebook.com/<?= $user['User']['facebook_id'] ?>/picture" class="user_image"/>
<? else: ?>
<img src="/img/blank_user.jpg" class="user_image"/>
<? endif; ?>
</dl></tr>
<tr><td>first name:</td><td> <?= $user['User']['first_name']?></td></tr>
<tr><td>last name:</td><td> <?= $user['User']['last_name']?></td></tr>
<tr><td>user name:</td><td> <?= $user['User']['username']?></td></tr>
<tr><td>email address:</td><td> <?= $user['User']['email_address']?></td></tr>
</table>

<?php echo $html->link('edit account', '/users/edit', array('class'=>'edit_account')); ?>