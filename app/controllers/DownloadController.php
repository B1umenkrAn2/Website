<?php

namespace app\controllers;

use app\models\Info;
use core\base\Controller;
use SplFileObject;


class DownloadController extends Controller
{


    /*
    * use to render to selector view
    */
    public function selector()
    {

        $year = (new Info)->getColumnAttributes("CAL_YEAR");
        $province = (new Info("info"))->getColumnAttributes("PROVINCE");
        sort($year);
        $this->assign('title', 'Download Selector');
        $this->assign('year', $year);
        $this->assign('province', $province);
        $this->render();

    }

    public function downloadFile()
    {
        $year = '';
        $location = '';
        $table = null;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $year = $_POST['year'];
            $location = $_POST['province'];
            if (isset($_POST['tables']))
                $table = $_POST['tables'];
            $data = $this->dataPrepare($year, $location, $table);
//            var_dump($data);
            if ($data) {
                $filepath = $this->createFile($data);
                $this->assign("download", $filepath);
            } else {
                $this->assign("nodata","The data you select does not exist!");
            }
            $this->assign('title', 'Download Page');
            $this->render();
        }else{
            header('HTTP/1.0 404 Not Found');
        }

    }

    private function createFile($arr)
    {

        if (isset($arr)) {


            $time = time();
            $fileName = 'static/download/Pedon_data_' . $time . '.csv';
            $fileObj = new SplFileObject($fileName, 'w');
            $cname = array_keys($arr[0]);
            $fileObj->fputcsv($cname);
            foreach ($arr as $value) {
                $fileObj->fputcsv($value);
            }

            return $fileName;
        } else {
            return null;
        }
    }

    private function dataPrepare($year, $location, $table)
    {
        $where = array('CAL_YEAR = :CAL_YEAR', ' and PROVINCE= :PROVINCE');
        $param = array(':CAL_YEAR' => $year, ':PROVINCE' => $location);

        $info = new Info();
        if (isset($table)) {
            $tables = $this->tableSelector2($table);
            $info->setJoinTables($tables);
        }
        $items = ($info)->where($where, $param)->fetchAll();

        return $items;

    }


    private function tableSelector2($arr)
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
}
