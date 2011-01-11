<h1>profile</h1>
<? if($user['User']['username'] != $currentUser['User']['username']): ?>
<? if($following): ?>
<? echo "<p>you are following " .$currentUser['User']['username']. "</p>"?>
<? else: ?>
<p><? echo $html->link('follow ' . $currentUser['User']['username'], array('controller'=>'friends', 'action'=>'add',$currentUser['User']['id'] )); ?></p>
<? endif; ?>
<? endif; ?>
<p></p>