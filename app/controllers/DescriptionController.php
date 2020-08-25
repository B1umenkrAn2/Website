<?php

namespace app\controllers;

use core\base\Controller;

class DescriptionController extends Controller
{
    /*
     *  index method for Description page
     */
    public function index()
    {
        $this->assign('title', 'Description');
        $this->render();
    }

}