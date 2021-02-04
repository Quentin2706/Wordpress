<?php
/**
 * @package HelloQuentin
 * @version 0.1.0
 */

/*
Plugin Name: Hello Quentin
Plugin URI:
Description: J'apprends juste a créer un plugin.
Author: Quentin
Version: 0.1.0
Author URI:
*/

function helloAdminRand($tab)
{
	return array_rand($tab);
}

function helloAdmin()
{
	$lyrics = ["Phrase 1","Phrase 2","Phrase 3","Phrase 4","Phrase 5","Phrase 6","Phrase 7","Phrase 8","Phrase 9","Phrase 10"];
	$random = helloAdminRand($lyrics);
	echo '<p id="dolly"><span dir="ltr"%s>'.$lyrics[$random].'</span></p>';
}
add_action( 'admin_notices', 'helloAdmin' );

function adminCSS()
{
	echo "
	<style type='text/css'>
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #dolly {
		float: left;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'adminCSS' );