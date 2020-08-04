<?php

namespace app\models;

use core\base\Model;
use core\db\Db;


class Info extends Model
{
    /**
     *
     *
     * @var string using to store table name
     */
    protected $table = 'Info';


    public function setJoinTables($arr)
    {

//        var_dump($arr);

        $joinedTable = "info";
        foreach ($arr as $table) {
            $joinedTable .= $table;
        }
        $this->table = $joinedTable;
//        var_dump($joinedTable);
    }


    /**
     *
     * @param $keyword search keyword (String)
     *
     * @return array return data
     */
    public function search($keyword)
    {
        $sql = "select * from `$this->table` where `item_name` like :keyword";
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [':keyword' => "%$keyword%"]);
        $sth->execute();

        return $sth->fetchAll();
    }

    public function getColumnAttributes($ColumnName)
    {

        $sql = "select distinct " . $ColumnName . ' from ' . $this->table;
        $sth = Db::pdo()->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }


    public function comparedArrValue($table, $arr2)
    {

        $sql = "select name from pragma_table_info(" . $table . ")";
        $sth = Db::pdo()->prepare($sql);
        $sth->execute();
        $arr1 = $sth->fetchAll();

        sort($arr1);
        sort($arr2);

        return $arr1 == $arr2;
    }


    public function updateData($file, $table)
    {
//        $updateTime = date("Y-m-d H:i:s");
//        $fileDir = APP_PATH . 'static/update/';
//        move_uploaded_file($file['file']['tem_name'],$fileDir.$updateTime.$file['file']['name']);


        $row = 1;
        if (($handle = fopen($file['file']['tmp_name'], "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                $num = count($data);
                echo "<p> $num fields in line $row: <br /></p>\n";
                $row++;
                $arr1 = array();
                $arr2 = array();

                if ($row == 1) {
                    for ($c = 0; $c < 1; $c++) {
                        $arr1[$c] = $data[$c];
                    }
                } else {
                    $result = $this->comparedArrValue($table, $arr1);
                    if ($result) {
                        $arr1 = [];
                        for ($c = 0; $c < $num; $c++) {
                            echo 'this is ' . $c;
                            echo $data[$c] . "<br />\n";
                            $arr2[$c] = $data[$c];

                        }

                    } else {
                        return "table is no correct";
                    }

                }
            }
            fclose($handle);

            return 'update complete';
        }

    }


}

