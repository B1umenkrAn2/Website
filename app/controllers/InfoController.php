<?php
namespace app\controllers;

use app\models\Info;
use app\models\Item;
use core\base\Controller;

class InfoController extends Controller
{
    public function index()
    {
//        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
//
//        if ($keyword) {
//            $items = (new Item())->search($keyword);
//        } else {
//            $items = (new Item)->where()->order(['id DESC'])->fetchAll();
//        }

        $this->assign('title', 'Home');
//        $this->assign('keyword', $keyword);
//        $this->assign('items', $items);
        $this->render();
    }

    public function All(){

        $items = (new Info)->fetchAll();
        $this->assign('title', 'infAll');
        $this->assign('entities',$items);
        $this->render();
    }

    public function selector(){

        $year = (new Info)->getColumnName($_POST['select1']);
        $province = (new Info)->getColumnName($_POST['select2']);
        $this->assign('title', 'selector');
        $this->assign('year',$year);
        $this->assign('year',$province);
        $this->render();

    }
}