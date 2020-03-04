<?php

namespace app\controllers;

use app\models\Info;
use core\base\Controller;

class InfoController extends Controller
{

    /*
     * get entire info table data
     */
    public function All()
    {
        $items = (new Info)->fetchAll();
        $this->assign('title', 'info');
        $this->assign('entities', $items);
        $this->render();
    }

    /*
     * get selector require from db and than pass to view
     */
    public function selectBaseOnYearLocation()
    {
        $where = array('CAL_YEAR = :CAL_YEAR', ' and PROVINCE= :PROVINCE');
        $param = array(':CAL_YEAR' => $_POST['year'], ':PROVINCE' => $_POST['province']);
        $items = (new Info)->where($where, $param)->fetchAll();
        $this->assign('title', 'year&location');
        $this->assign('entities', $items);
        $this->render();
    }


    /*
     * use to render to selector view
     */
    public function selector()
    {

        $year = (new Info)->getColumnName("CAL_YEAR");
        $province = (new Info)->getColumnName("PROVINCE");
        $this->assign('title', 'selector');
        $this->assign('year', $year);
        $this->assign('province', $province);
        $this->render();

    }


}