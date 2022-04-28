<?php

    require  'Component.php';
    require  'Layout.php';

class Init {

	public function __construct() {
		new Layout;
		new Component;
	}

}