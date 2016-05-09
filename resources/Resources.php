<?php
// Resource template
$wgResourceTemplate = [
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'OOJsUIAjaxLogin/resources',
];
// Resource modules
$wgResourceModules += [
	'ext.OOJsUIAjaxLogin.init' => $wgResourceTemplate + [
		'scripts' => [
			'ext.OOJsUIAjaxLogin.init/init.js',
		],
		'messages' => [
			'oojsuiajaxlogin-loading',
		],
		'templates' => [
			'loginLink.mustache' => 'ext.OOJsUIAjaxLogin.init/loginLink.mustache',
		],
	],
	'ext.OOJsUIAjaxLogin.overlay' => $wgResourceTemplate + [
		'dependencies' => [
			'oojs-ui',
			'mediawiki.api',
			'mediawiki.jqueryMsg',
		],
		'scripts' => [
			'ext.OOJsUIAjaxLogin.overlay/LoginOverlay.js',
		],
		'styles' => [
			'ext.OOJsUIAjaxLogin.overlay/LoginOverlay.less',
		],
		'messages' => [
			'login',
			'wrongpassword',
			'userlogin-yourname',
			'userlogin-yourname-ph',
			'userlogin-yourpassword',
			'userlogin-yourpassword-ph',
			'pt-login-button',
			'userlogin-joinproject',
			'cancel',
			'welcomeuser',
			'unknown-error',
		],
	],
];

unset( $wgResourceTemplate );
