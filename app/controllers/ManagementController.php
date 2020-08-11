<?php

namespace app\controllers;

use core\base\Controller;
use app\models\Auser;
use app\models\Info;



class ManagementController extends Controller
{

    public function login()
    {
        $_SESSION['loginErr'] = '';
        $this->assign('title', 'Login');
        $this->render();

    }

    public function update()
    {

        if (!$_POST['submit']) {

            $auser = new Auser();


            $loginUser = $auser->authenticate($_POST['username'], $_POST['password']);

            if ($loginUser != null) {
                $_SESSION['user'] = $loginUser;
            }
            $this->assign('title', 'update');
            $this->render();
        }


    }


    public function result()
    {
        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST') {

            if (isset($_FILES)) {
//                $this->pre_r($_FILES);
//                $this->pre_r($_POST);
                $table = $_POST['tables'];
                $info = new Info();
                $result = $info->updateData($_FILES, $table);
                $this->assign('result', $result);
            } else {
                $this->assign('error', 'file upload error.');
            }


            $this->assign('title', 'update');
            $this->render();
        }
    }

    public function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

}