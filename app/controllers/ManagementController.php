<?php

namespace app\controllers;

use core\base\Controller;
use app\models\Auser;
use app\models\Info;



class ManagementController extends Controller
{
    /*
     * this method is use for admin to login the management system.
     */
    public function login()
    {
        $_SESSION['loginErr'] = '';
        $this->assign('title', 'Login');
        $this->render();

    }

    /*
     *  update the CSV file to update the database
     *
     */
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

    /*
     *  this method is for the update result.
     */
    public function result()
    {
        if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST') {
            if (isset($_FILES)) {
                $table = $_POST['tables'];
                $info = new Info();
                $result = $info->updateData($_FILES, $table); // get the update result
            } else {
                $result = 'file upload error.';

            }

            $this->assign('result', $result);
            $this->assign('title', 'update');
            $this->render();
        }
    }


}