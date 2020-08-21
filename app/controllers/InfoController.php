<?php

namespace app\controllers;


use app\models\Info;
use core\base\Controller;


class InfoController extends Controller
{


    /*
     * use to render to selector view
     */
    public function selector()
    {

        $year = (new Info)->getColumnAttributes("CAL_YEAR");
        $province = (new Info("info"))->getColumnAttributes("PROVINCE COLLATE NOCASE");
        sort($year);
        $this->assign('title', 'Data selector');
        $this->assign('year', $year);
        $this->assign('province', $province);
        $this->render();

    }


    /*
    * get selector require data from db and than pass to view
    */
    public function selected()
    {
        $year = $_POST['year'];
        $province = $_POST['province'];
        $param = array();
        $where = array();
        $items = null;
        $info = new Info();
        if (isset($_POST["tables"])) {
            $tables = $this->tableSelector($_POST['tables']);
            $info->setJoinTables($tables);
        }


        if ($year === "all" && $province === "all") {
            $items = $info->fetchAll();
        } else if ($year == "all") {

            $where = array(' PROVINCE = :PROVINCE');
            $param = array(':PROVINCE' => $province);
            $items = $info->where($where, $param)->fetchAll();

        } else if ($province == "all") {
            $where = array('CAL_YEAR = :CAL_YEAR');
            $param = array(':CAL_YEAR' => $year);
            $items = $info->where($where, $param)->fetchAll();
        } else {
            $where = array('CAL_YEAR = :CAL_YEAR', ' and PROVINCE = :PROVINCE');
            $param = array(':CAL_YEAR' => $year, ':PROVINCE' => $province);


            $items = $info->where($where, $param)->fetchAll();

        }


        $this->assign('entities', $items);
        $this->assign('title', 'Data selected');
        $this->render();

    }

    private function tableSelector($arr)
    {


        $tables = array(
            'Sites' => "  join Sites S on Info.PEDON_ID = S.PEDON_ID ",
            'Profiles' => "  join Profiles Prof on Info.PEDON_ID = Prof.PEDON_ID",
            'Horizons' => "  join Horizons Hor on Info.PEDON_ID = Hor.PEDON_ID",
            'Physical' => "  join Physical Phy on Info.PEDON_ID = Phy.PEDON_ID",
            'Chemical' => "  join Chemical Chem on Info.PEDON_ID = Chem.PEDON_ID",
            'Moro' => "  join Morphology Moro on Info.PEDON_ID = Moro.PEDON_ID"
        );
        $newArr = array();
        $count = 0;
        foreach ($arr as $value) {
            if (array_key_exists($value, $tables)) {
                $newArr[$count] = $tables[$value];
                $count++;
            }
        }
        return $newArr;
    }


}