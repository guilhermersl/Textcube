<?php
/// Copyright (c) 2004-2015, Needlworks  / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/documents/LICENSE, /documents/COPYRIGHT)
define('__NO_ADMINPANEL__', true);
$context->setProperty('import.component', array());
$context->setProperty('import.basics', array(
    'function/string',
    'function/time',
    'function/javascript',
    'function/html',
    'function/xml',
    'function/misc',
    'function/mail',
    'DEBUG : Basic functions loaded.'));
$context->setProperty('import.library', array(
    'auth',
    'blog.skin',
    'DEBUG : Default library loaded.'));
$context->setProperty('import.model', array(
    'blog.service',                // Models
    'blog.archive',
    'blog.attachment',
    'blog.blogSetting',
    'blog.category',
    'blog.comment',
    'blog.entry',
    'blog.keyword',
    'blog.page',
    'blog.notice',
    'blog.link',
    'blog.locative',
    'blog.sidebar',
    'blog.response.remote',
    'blog.tag',
    'common.setting',
    'common.plugin',
    'common.module',
    'DEBUG : Models loaded.'));
$context->setProperty('import.view', array(
    'html',                        // Views
    'paging',
    'view',
    'DEBUG : Views loaded.'));
?>