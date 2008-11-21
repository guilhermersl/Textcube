<?php
/// Copyright (c) 2004-2007, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)

$IV = array(
	'GET' => array(
		'openid_identifier' => array('string', 'mandatory' => false )
	)
);

requireComponent( 'Textcube.Control.Openid' );
 
requireStrictRoute();

$consumer = new OpenIDConsumer;
if( $consumer->setDelegate( $_GET['openid_identifier'] ) ) {
	Skin::purgeCache();
	Respond::ResultPage(0);
} else {
	Respond::ResultPage(-1);
}

?>
