<?php

/**
* whiteGold - mini PHP Framework
*
* @package whiteGold
* @author Farawe iLyas <faraweilyas@gmail.com>
*/

// SET RESOURSES USAGE START
define ('RESOURCE_USAGE_START', 	getrusage());

// DIRECTORIES CONSTANT FOR FILE MANAGEMENT
define('DS',           				"/");
define('ROOT',         				"..".DS);
define('PUBLIC_DIR', 				".".DS);

// REQUIRE INITIALIZATION FILE FOR APP CONFIGURATION
require_once __DIR__."/../config/Initialize.php";
