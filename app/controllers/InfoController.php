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
     * use to render to selector view
     */
    public function selector()
    {

        $year = (new Info)->getColumnAttributes("CAL_YEAR");
        $province = (new Info("info"))->getColumnAttributes("PROVINCE");
        sort($year);
        $this->assign('title', 'selector');
        $this->assign('year', $year);
        $this->assign('province', $province);
        $this->render();

    }




    /*
  * get selector require data from db and than pass to view
  */
    public function selected()
    {
        $where = array('CAL_YEAR = :CAL_YEAR', ' and PROVINCE= :PROVINCE');
        $param = array(':CAL_YEAR' => $_POST['year'], ':PROVINCE' => $_POST['province']);

        $info = new Info();
        if (isset($_POST['tables'])) {
            $tables = $this::tableSelector2(($_POST['tables']));
            $info->setJoinTables($tables);
        }
        $items = ($info)->where($where, $param)->fetchAll();
        $downloadInfo=[trim($_POST['year']),trim($_POST['province'])];
        $this->assign('downloadInfo',$downloadInfo);
        $this->assign('entities', $items);
        $this->assign('title', 'selected');
        $this->render();

    }

    public function tableSelector2($arr)
    {

        $tables = array(
            '0' => " left join Sites S on Info.PEDON_ID = S.PEDON_ID ",
            '1' => " left join Profiles P2 on Info.PEDON_ID = P2.PEDON_ID",
            '2' => " left join Horizons H on Info.PEDON_ID = H.PEDON_ID",
            '3' => " left join Morphology M on H.PEDON_ID = M.PEDON_ID",
            '4' => " left join Physical P on Info.PEDON_ID = P.PEDON_ID",
            '5' => " left join Chemical C on Info.PEDON_ID = C.PEDON_ID",
        );

        return array_intersect_key($tables, $arr);
    }

    public function download(){


    }


}