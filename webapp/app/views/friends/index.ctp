<h1>friends</h1>
<p>you are following:</p>
<? if($followees): ?>
<ul>
<? foreach($followees as $followee): ?>
<? echo '<li><a href="/'.$followee['User']['username'].'">'.$followee['User']['username'].'</a></li>'; ?>
<? endforeach; ?>
</ul>
<? else: ?>
<p>you are not following anyone</p>
<? endif; ?>
<p>you are followed by:</p>
<? if($followers): ?>
<ul>
<? foreach($followers as $follower): ?>
<? echo '<li><a href="/'.$follower['User']['username'].'">'.$follower['User']['username'].'</a></li>'; ?>
<? endforeach; ?>
</ul>
<? else: ?>
<p>you are not followed by anyone</p>
<? endif; ?>