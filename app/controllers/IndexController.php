<?php
namespace app\controllers;

class IndexController extends Controller
{
    public function index()
    {
        $this->assign('title', 'Home');
        $this->render();
    }

}