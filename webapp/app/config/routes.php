<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
	App::import('Lib', array('routes/SlugRoute'));
	
	// Default route 
	Router::connect('/', array('controller' => 'products', 'action' => 'home')); 
	Router::connect('/add_products', array('controller' => 'pages', 'action' => 'display', 'add_products'));
	Router::connect(
	     '/:slug', 
	     array('controller' => 'users', 'action' => 'view'),
	     array('routeClass' => 'SlugRoute')
	);