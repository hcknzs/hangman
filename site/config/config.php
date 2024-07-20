<?php

return [
	'debug' => true,
	'panel' => [
		'css' => 'assets/css/panel.css'
	],
	'cache' => [
		'pages' => [
			'active' => false,
		]
	],
	'thumbs' => [
		'presets' => [
			'square' => ['width' => 1024, 'height' => 1024, 'quality' => 80, 'crop' => true],
			'wide' => ['width' => 1536, 'quality' => 80],
			'full' => ['width' => 2560, 'quality' => 80],
		],
		'srcsets' => [
			'default' => [
				'500w' => ['width' => 512, 'quality' => 80],
				'1024w' => ['width' => 1024, 'quality' => 80],
				'1440w' => ['width' => 1536, 'quality' => 80],
				'2048w' => ['width' => 2560, 'quality' => 80]
			],
			'min' => [
				'500w' => ['width' => 512, 'quality' => 80],
				'1024w' => ['width' => 1024, 'quality' => 80],
			]
		]
	],
	'hooks' => [
		'page.update:after' => function (Kirby\Cms\Page $newPage, Kirby\Cms\Page $oldPage) {
			error_log(print_r($newPage,true));
		}
	]
];
