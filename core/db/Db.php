<?php
namespace core\db;

use PDO;
use PDOException;

/**
 *
 *
 * Class Db
 */
class Db
{
    private static $pdo = null;

    public static function pdo()
    {
        if (self::$pdo !== null) {
            return self::$pdo;
        }

        try {
            $dsn    = sprintf('sqlite:%s',DB_HOST);
            $option = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
            return self::$pdo = new PDO($dsn, null, null, $option);
        } catch (PDOException $e) {

            exit($e->getMessage());
        }
    }


}