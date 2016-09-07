<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'sectionExtension' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['sectionExtension'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['sectionExtensionAlias'] = __DIR__ . '/sectionExtension.i18n.alias.php';
	$wgExtensionMessagesFiles['sectionExtensionMagic'] = __DIR__ . '/sectionExtension.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for sectionExtension extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the sectionExtension extension requires MediaWiki 1.25+' );
}
