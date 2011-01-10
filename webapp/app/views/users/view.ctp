<h1><?php echo $currentUser['User']['username']; ?></h1>
<? if($user['User']['username'] != $currentUser['User']['username']): ?>
<? if($following): ?>
<? echo "<p>You are following " .$currentUser['User']['username']. "</p>"?>
<? else: ?>
<? echo $html->link('Follow ' . $currentUser['User']['username'], array('controller'=>'friends', 'action'=>'add',$currentUser['User']['id'] )); ?>
<? endif; ?>
<? endif; ?>
<p></p>