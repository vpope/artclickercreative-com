<?php

use lithium\action\Dispatcher;
use lithium\net\http\Media;

// set controller mappings
Dispatcher::config(array('rules' => array(
	'admin' => array('controller' => 'app\controllers\admin\{:controller}Controller')
)));

// set view mappings
Dispatcher::applyFilter('_callable', function($self, $params, $chain) {
	$next = $chain->next($self, $params, $chain);

	if ($params['request']->admin) {

		Media::type('default', null, array(
			'view' => 'lithium\template\View',
			'paths' => array(
				'layout' => '{:library}/views/layouts/admin.{:layout}.{:type}.php',
				'template' => '{:library}/views/admin/{:controller}/{:template}.{:type}.php'
			)
		));
	}

	return $next;
});