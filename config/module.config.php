<?php
return array(
    'asset_manager' => array(
		'resolver_configs' => array(
			'paths' => array(
				'Keyboard' => __DIR__.'/../public',
			),
		),
	),
	'view_helpers' => array(
		'invokables' => array(
			'keyboard' => 'Keyboard\View\Helper\Keyboard',
		),
	),
);
