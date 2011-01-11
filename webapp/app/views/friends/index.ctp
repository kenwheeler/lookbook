<h1>friends</h1>
<p>you are following:</p>
<? if($followees): ?>
<ul>
<? foreach($followees as $followee): ?>
<li class="user_box">
<? echo '<a href="/'.$followee['User']['username'].'">'; ?>
<? if($followee['User']['facebook_id']): ?>
<img src="https://graph.facebook.com/<?= $followee['User']['facebook_id'] ?>/picture" class="user_image"/>
<? else: ?>
<img src="/img/blank_user.jpg" class="user_image"/>
<? endif; ?>
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
<? if($follower['User']['facebook_id']): ?>
<img src="https://graph.facebook.com/<?= $follower['User']['facebook_id'] ?>/picture" class="user_image"/>
<? else: ?>
<img src="/img/blank_user.jpg" class="user_image"/>
<? endif; ?>	
<p><?= $follower['User']['username']; ?></p>
</a>
</li>
<? endforeach; ?>
</ul>
<? else: ?>
<p>you are not followed by anyone</p>
<? endif; ?>