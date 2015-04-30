<?php
/**
The MIT License (MIT)

Copyright (c) 2015 Florian Schmidt

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is an extension for Mediawiki and can not run standalone.' );
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'OOJsUIAjaxLogin',
	'author' => 'Florian Schmidt',
	'url' => 'https://www.mediawiki.org/wiki/Extension:OOJsUIAjaxLogin',
	'descriptionmsg' => 'oojsuiajaxlogin-desc',
	'version'  => '0.0.1',
	'license-name' => "MIT",
);

// Autoload Classes
$wgAutoloadClasses['OOJsUIAjaxLoginHooks'] = __DIR__ . '/includes/OOJsUIAjaxLogin.hooks.php';

// message dir
$wgMessagesDirs['OOJsUIAjaxLogin'] = __DIR__ . '/i18n';

// Hooks
$wgHooks['BeforePageDisplay'][] = 'OOJsUIAjaxLoginHooks::onBeforePageDisplay';

require __DIR__ . '/resources/Resources.php';