<?php
// local dir
define('APP_PATH', __DIR__ . '/');

// debug model
define('APP_DEBUG', true);

define('URL','/cansis/pedonviewer/');
define('fullUrl','gracilis.carleton.ca/cansis/pedonviewer/');

//loading framework file
require(APP_PATH . 'core/core.php');

//config
$config = require (APP_PATH.'config/config.php');

//instance framework
(new core\core($config))->run();