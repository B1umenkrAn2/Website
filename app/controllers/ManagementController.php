<?php

namespace app\controllers;

use core\base\Controller;

class ManagementController extends Controller
{
    public function index()
    {
        $this->assign('title', 'Down');
        $this->render();
    }

}