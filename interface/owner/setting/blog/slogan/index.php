<?php
/// Copyright (c) 2004-2008, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
$IV = array(
	'POST' => array(
		'useSloganOnPost' => array('int',0,1),
		'useSloganOnCategory' => array('int',0,1),
		'useSloganOnTag' => array('int',0,1)
	)
);

requireStrictRoute();
if (useBlogSlogan($blogid, $_POST['useSloganOnPost'],$_POST['useSloganOnCategory'],$_POST['useSloganOnTag']))
	Respond::ResultPage(0);
Respond::ResultPage( - 1);
?>
