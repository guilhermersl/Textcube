<?php
/// Copyright (c) 2004-2008, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
$IV = array(
	'POST' => array(
'userid'=>array('id')
	)
);
requireStrictRoute();

if (deleteTeamblogUser($_POST['userid'])) {
	Respond::ResultPage(0);
}
Respond::ResultPage(-1);
?>
