<? if($user['User']['username'] != $currentUser['User']['username']): ?>
<h1><?= $currentUser['User']['username']?></h1>
<? if($following): ?>
<? echo "<p>you are following " .$currentUser['User']['username']. "</p>"?>
<? else: ?>
<p><? echo $html->link('follow ' . $currentUser['User']['username'], array('controller'=>'friends', 'action'=>'add',$currentUser['User']['id'] )); ?></p>
<? endif; ?>
<? else:?>
<h1>profile</h1>
<? endif; ?>
<p></p>