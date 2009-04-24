<?php
/// Copyright (c) 2004-2009, Needlworks / Tatter Network Foundation
/// All rights reserved. Licensed under the GPL.
/// See the GNU General Public License for more details. (/doc/LICENSE, /doc/COPYRIGHT)

/**
	Blog View
	---------
	- Modularize every blogview output.
**/

class BlogView {
	private $buf, $skin, $view;
	
	function __construct() {
		global $skinSetting;
		$this->buf  = new OutputWriter;
		$this->skin = new Model_BlogSkin($skinSetting['skin']);
		$this->view = $this->skin->outter;
	}
}
