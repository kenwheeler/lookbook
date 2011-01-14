<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?= $facebook->html() ?>

<head>

<title><?php echo $title_for_layout?></title>

<link href='http://fonts.googleapis.com/css?family=Cabin:bold' rel='stylesheet' type='text/css'/>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<?php echo $html->css('style'); ?>

<?php echo $this->Html->script('jquery'); ?>

<?php echo $scripts_for_layout ?>

</head>

<body>

<div id="container">

<div id="sidebar">
	
	<h1><span class="blue">look</span>book</h1>
	
	<div id="navigation">
		
		<ul id="account">
			
		<? if($session->check('Auth.User.id')): ?>
				
		<li><a href="/<?= $user['User']['username'] ?>">profile</a></li><li><a href="/users/account">account</a></li>
		<? if($facebookUser): ?>
		<li><?= $facebook->Logout(array('redirect'=>'/users/logout', 'label'=>'log out')); ?></li>
		<? else: ?>
		<li><a href="/users/logout">log out</a></li>
		<? endif; ?>
		<? else: ?>
		
		<li><a href="/users/login">sign in</a></li><li><a href="/users/register">register</a></li>
		
		<? endif; ?>
				
		</ul>
		
		<ul id="sections">
		
		<li><a href="/">home</a></li><li><a href="/friends">friends</a></li><li><a href="/products">products</a></li><li><a href="/collections">collections</a></li>
		
		</ul>
		
		<ul id="about">
		
		<li><a href="/add_products">add products</a></li><!-- <li><a href="#">about us</a></li><li><a href="#">contact us</a></li> -->
		
		</ul>
	
	</div>
	
</div>

<div id="main">

<div id="inner">

<?php echo $content_for_layout ?>

</div>

</div>

</div>

<?= $facebook->init(); ?>

</body>

</html>