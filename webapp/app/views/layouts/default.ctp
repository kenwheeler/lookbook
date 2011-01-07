<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title><?php echo $title_for_layout?></title>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<?php echo $html->css('cake.generic'); ?>

<?php echo $scripts_for_layout ?>

</head>

<body>

<div id="header">

    <div id="menu"></div>

</div>

<?php echo $content_for_layout ?>

<div id="footer"></div>

<?php echo $this->element('sql_dump'); ?>

</body>

</html>