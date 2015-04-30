<?php
// Resource template
$wgResourceTemplate = array(
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'OOJsUIAjaxLogin/resources',
);
// Resource modules
$wgResourceModules += array(
	'ext.OOJsUIAjaxLogin.init' => $wgResourceTemplate + array(
		'scripts' => array(
			'ext.OOJsUIAjaxLogin.init/init.js',
		),
		'messages' => array(
			'oojsuiajaxlogin-loading',
		),
		'templates' => array(
			'loginLink.mustache' => 'ext.OOJsUIAjaxLogin.init/loginLink.mustache',
		),
	),
	'ext.OOJsUIAjaxLogin.overlay' => $wgResourceTemplate + array(
		'dependencies' => array(
			'oojs-ui',
			'mediawiki.api',
			'mediawiki.jqueryMsg',
		),
		'scripts' => array(
			'ext.OOJsUIAjaxLogin.overlay/LoginOverlay.js',
		),
		'styles' => array(
			'ext.OOJsUIAjaxLogin.overlay/LoginOverlay.less',
		),
		'messages' => array(
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
		),
	),
);

unset( $wgResourceTemplate );
