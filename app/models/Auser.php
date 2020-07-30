<?php

namespace app\models;

use core\base\Model;
use core\db\Db;
use http\Client\Curl\User;
use PDO;


class Auser extends Model
{
    /**
     *
     *
     * @var string using to store table name
     */
    protected $table = 'Auser';

    /**
     *
     * @param $userName  username (String)
     *
     * @param $password password(String)
     *
     * @return $user
     */
    public function authenticate($userName, $password)
    {

        $where = array('username = :username');
        $param = array(':username' => $_POST['username']);
        $user = $this->where($where,$param)->fetch();
//        var_dump($user);
        if ($user['username'] == $userName && trim($user['password']) == trim($password)) {
            return $user;
        } else {
            return null;
        }


    }


}

