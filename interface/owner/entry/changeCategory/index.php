<?php
/// Copyright (c) 2004-2008, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)
$IV = array(
	'POST' => array(
		'targets' => array('list'),
		'category' => array('int')
	)
);
requireStrictRoute();
requireModel("blog.entry");


if(changeCategoryOfEntries($blogid, $_POST['targets'], $_POST['category'])) {
	Respond::ResultPage(0);
} else {
	Respond::ResultPage(1);
}
?>
