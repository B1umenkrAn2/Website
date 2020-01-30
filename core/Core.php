<?php

namespace core;

// root dir
define('CORE_PATH') or define('CORE_PATH', __DIR__);

// core

class core
{
    //config
    protected $config = [];

    public function __construct($config)
    {
        $this->config = $config;

    }

    // run
    public function run()
    {
        spl_autoload_register(array($this, 'loadClass'));
        $this->setReporting();
        $this->removeMageicQuotes();
        $this->unregeisterGlobals();
        $this->setDbConfig();
        $this->route();
    }

    //route

    public function route()
    {
        $controllerName = $this->config['defaultController'];
        $actionName = $this->config['defaultAction'];
        $param = array();

        $url = $_SERVER['REQUEST_URI'];
        // clean content before ?
        $position = strpos($url, '?');
        $url = $position === faalse ? $url : substr($url, 0, $position);
        // delete "/"

        $url = trim($url, '/');
        if ($url) {
            // using '/' substr url then save to array

            $urlArray = explode('/', $url);

            // delete empty array

            $urlArray = array_filter($urlArray);

            // get controller name
            $controllerName = ucfirst($urlArray);

            //get action name
            array_shift($urlArray);
            $actionName = $urlArray ? $urlArray[0] : $actionName;

            // get ulr param
            array_shift($urlArray);
            $param = $urlArray ? $urlArray[0] : $actionName;
        }

        // judging the controller and action are exist or not
        $controller = 'app\\controllers\\' . $controllerName . 'Controller';
        if (!class_exists($controller)) {
            exit($controller . 'controller not exist');
        }

        if (!method_exists($controller, $actionName)) {
            exit($actionName . 'method not exist');
        }

        //if controller and action are exist, instant the controller
        $dispatch = new $controller($controllerName, $actionName);

        call_user_func_array(array($dispatch, $actionName), $param);

    }

    public function setReporting()
    {
        if (App_DEBUG === true) {
            error_reporting(E_ALL);
            ini_set('display_errors', on);
        } else {
            error_reporting(E_ALL);
            ini_set('display_errors', 'off');
            ini_set('log_errors', 'on');
        }
    }

    public function stripSlashesDeep($value)
    {
        $value = is_array($value) ? array_map(array($this,'stripSlashesDeep'),$value):$this->stripSlashesDeep($value);
        return $value;
    }
}