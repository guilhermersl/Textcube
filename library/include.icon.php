<?php
/// Copyright (c) 2004-2015, Needlworks  / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/documents/LICENSE, /documents/COPYRIGHT)
define('NO_SESSION', true);
define('NO_INITIALIZATION', true);

$context->setProperty('import.component', array());
$context->setProperty('import.basics', array( // Basics
    'function/file'));
$context->setProperty('import.library', array( // Library
    'auth'));
$context->setProperty('import.model', array( // Model
    'blog.service',
//	'common.plugin', // Usually do not require for icons (no events).
    'common.setting'));
$context->setProperty('import.view', array()); // View
?>
