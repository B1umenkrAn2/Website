<?php

namespace app\controllers;

use core\base\Controller;

class DescriptionController extends Controller
{
    public function index()
    {
        $this->assign('title', 'Down');
        $this->render();
    }

}