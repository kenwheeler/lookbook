<h1>friends</h1>
<p>you are following:</p>
<? if($followees): ?>
<ul>
<? foreach($followees as $followee): ?>
<li class="user_box">
<? echo '<a href="/'.$followee['User']['username'].'">'; ?>
<img src="/img/blank_user.jpg" class="user_image"/>
<p><?= $followee['User']['username']; ?></p>
</a>
</li>
<? endforeach; ?>
</ul>
<? else: ?>
<p>you are not following anyone</p>
<? endif; ?>
<p>you are followed by:</p>
<? if($followers): ?>
<ul>
<? foreach($followers as $follower): ?>
<li class="user_box">
<? echo '<a href="/'.$follower['User']['username'].'">'; ?>
<img src="/img/blank_user.jpg" class="user_image"/>	
<p><?= $follower['User']['username']; ?></p>
</a>
</li>
<? endforeach; ?>
</ul>
<? else: ?>
<p>you are not followed by anyone</p>
<? endif; ?>