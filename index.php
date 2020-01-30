<?php
// local dir
define('APP_PATH', __DIR__ . '/');

// bug model
define('App_DEBUG',true);

//loading framework file
require (APP_PATH.'core/Core.php');

//config
$config = require (APP_PATH.'config/config.php');

//instance framework
(new code\Code($config))->run();