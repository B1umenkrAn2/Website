<?php
namespace app\controllers;

use core\base\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->assign('title', 'Home');
        $this->render();
    }

}