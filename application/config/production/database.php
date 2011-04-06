<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'connection' => array(
			'database'   => 'PRODUCTION',
		),
		'caching' => TRUE,
		'profiling' => FALSE,
	),
	'alternate' => array(
		'connection' => array(
			'username'   => 'PRODUCTION',
		),
	),
);
