<?php
namespace app\controllers;

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

    public function all(){

        $items = (new Item)->where()->order(['id DESC'])->fetchAll();
        $this->assign('title', 'info-all');
        $this->assign('entities',$items);
        $this->render();
    }
}