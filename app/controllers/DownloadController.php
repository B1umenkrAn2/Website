<?php

namespace app\controllers;

use core\base\Controller;

class DownloadController extends Controller
{
    public function index()
    {
        $this->assign('title', 'Down');
        $this->render();
    }

}