<?php

namespace core;

// root dir
defined('CORE_PATH') or define('CORE_PATH', __DIR__);

/**
 *  framework
 */
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
        $this->removeMagicQuotes();
        $this->unregisterGlobals();
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
        echo $url;
        if ($url2 = strstr($url, URL)) {
            $url3 = substr($url, strlen(URL), strlen($url));
            $url = $url3;
        }

 //       echo '</br>';

        // clean content before ?
        $position = strpos($url, '?');
        $url = $position === false ? $url : substr($url, 0, $position);
        // delete "/"

        // can be access url like index.php/{controller}/{action}
        $position = strpos($url, 'index.php');
        if ($position !== false) {
            $url = substr($url, $position + strlen('index.php'));
        }

        // delete content before “/”
        $url = trim($url, '/');
        if ($url) {
            // using '/' substr url then save to array

            $urlArray = explode('/', $url);

            // delete empty array

            $urlArray = array_filter($urlArray);

            // get controller name
            $controllerName = ucfirst($urlArray[0]);

            //get action name
            array_shift($urlArray);
            $actionName = $urlArray ? $urlArray[0] : $actionName;

            // get ulr param
            array_shift($urlArray);
            $param = $urlArray ? $urlArray : array();
        }

        // check the controller exist or not
        $controller = 'app\\controllers\\'. $controllerName . 'Controller';
        if (!class_exists($controller)) {
            exit($controller . 'controller not exist');
        }
        // check the action exist or not
        if (!method_exists($controller, $actionName)) {
            exit($actionName . 'method not exist');
        }

        //if controller and action are exist, instant the controller
        $dispatch = new $controller($controllerName, $actionName);

        call_user_func_array(array($dispatch, $actionName), $param);

    }

    public function setReporting()
    {
        if (APP_DEBUG === true) {
            error_reporting(E_ALL);
            ini_set('display_errors','On');
        } else {
            error_reporting(E_ALL);
            ini_set('display_errors','Off');
            ini_set('log_errors', 'On');
        }
    }

    public function stripSlashesDeep($value)
    {
        $value = is_array($value) ? array_map(array($this, 'stripSlashesDeep'), $value) : stripslashes($value);
        return $value;

    }

    public function removeMagicQuotes()
    {
        if (get_magic_quotes_gpc()) {
            $_GET = isset($_GET) ? $this->stripSlashesDeep($_GET ) : '';
            $_POST = isset($_POST) ? $this->stripSlashesDeep($_POST ) : '';
            $_COOKIE = isset($_COOKIE) ? $this->stripSlashesDeep($_COOKIE) : '';
            $_SESSION = isset($_SESSION) ? $this->stripSlashesDeep($_SESSION) : '';
        }
    }


    public function unregisterGlobals()
    {
        if (ini_get('register_globals')) {
            $array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');
            foreach ($array as $value) {
                foreach ($GLOBALS[$value] as $key => $var) {
                    if ($var === $GLOBALS[$key]) {
                        unset($GLOBALS[$key]);
                    }
                }
            }
        }
    }

    public function setDbConfig()
    {
        if ($this->config['db']) {
            define('DB_HOST', $this->config['db']['host']);
//            define('DB_NAME', $this->config['db']['dbname']);
//            define('DB_USER', $this->config['db']['username']);
//            define('DB_PASS', $this->config['db']['password']);
        }
    }

    public function loadClass($className)
    {
        $classMap = $this->classMap();
        if (isset($classMap[$className])) {
            $file = $classMap[$className];
        } elseif (strpos($className, '\\') !== false) {
            $file = APP_PATH . str_replace('\\', '/', $className) . '.php';
            if (!is_file($file)) {
                return;
            }
        } else {
            return;
        }
        include $file;


    }

    // namespace mapping
    protected function classMap()
    {

        return [
            'core\base\Controller' => CORE_PATH . '/base/Controller.php',
            'core\base\Model' => CORE_PATH . '/base/Model.php',
            'core\base\View' => CORE_PATH . '/base/View.php',
            'core\db\Db' => CORE_PATH . '/db/Db.php',
            'core\db\Sql' => CORE_PATH . '/db/Sql.php',
        ];

    }
}