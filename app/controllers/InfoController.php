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
        $where =array('CAL_YEAR = :CAL_YEAR','PROVINCE= :PROVINCE');
        $param=array('year'=> $_POST['year'],'province'=>$_POST['province']);
        $items = (new Info)->where(['CAL_YEAR = :CAL_YEAR'], [':CAL_YEAR' => $data['year'])->fetchAll();
        $this->assign('title', 'infAll');
        $this->assign('entities',$items);
        $this->render();
    }

    public function selector(){

        $year = (new Info)->getColumnName("CAL_YEAR");
        $province = (new Info)->getColumnName("PROVINCE");
        $this->assign('title', 'selector');
        $this->assign('year',$year);
        $this->assign('province',$province);
        $this->render();

    }

//    public function getInfoFromSelector(){
//
//    }
}