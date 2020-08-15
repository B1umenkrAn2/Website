<?php

namespace app\models;

use core\base\Model;
use core\db\Db;

set_time_limit(600);

class Info extends Model
{
    /**
     *
     *
     * @var string using to store table name
     */
    protected $table = 'Info';

    private $fileCols = array();


    public function setJoinTables($arr)
    {
        $joinedTable = "info";
        foreach ($arr as $table) {
            $joinedTable .= $table;
        }
        $this->table = $joinedTable;

    }


    /**
     *
     * @param $keyword search keyword (String)
     *
     * @return array return data
     */
    public function search($keyword, $sTable)
    {
        $sql = "select * from `$sTable` where `PEDON_ID` like :keyword";
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

    /*
     *  this method is used to count how many different columns is in the upload file
     *  and return the different columns index
     *
     */
    public function identifyDiffColName($table, $fileCol)
    {

        $sql = "select name from pragma_table_info('" . $table . "')";
        $sth = Db::pdo()->query($sql);
        $dbarr = array_column($sth->fetchAll(), 'name');
        $count=0;
        foreach ($dbarr as  $item){

            if(array_search($item,$fileCol[0])){
                $count++;
            }

        }
        if ($count>(count($dbarr)/2)){
            return array_keys(array_diff($fileCol[0], $dbarr));
        }else{
            return  ' File not match to the table!';
        }





    }

    public function updateData($file, $table)
    {
        $csvFile = $file['file']['tmp_name'];

        $header = $this->fileDataRead($csvFile, 1, 1);
        $diffCol = $this->identifyDiffColName($table, $header);

        if (is_array($diffCol)){
//        $compareData = $this->dataHandle($this->fileDataRead($csvFile, 2, 6), $diffCol);
//        $comp = $this->dataCompare($compareData,$table);

            $insertHeader = $this->dataHandle($header, $diffCol);
            return $this->updateAllDataFromFile($csvFile, $table, $diffCol, $insertHeader[0]);
        }else{
            return $diffCol;
        }





    }

    private function updateAllDataFromFile($file, $table, $diffCol, $header)
    {
        $success = 0;
        $failure = 0;
        $row = 1;
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//                $num = count($data);
                $arr = array();
                $row++;
                if ($row > 2) {
                    $arr = $data;
                }
                $insertData = $this->arrHandle($arr, $diffCol);

                if ($row > 2) {
                    if ($this->add(array_combine($header, $insertData), $table) != 1) {
                        $failure++;
                    } else {
                        $success++;
                    }
                }
            }

            fclose($handle);
        }
        return array('total'=>$failure+$success,'success' => $success, 'failure' => $failure);

    }


    private function fileDataRead($file, $startRow, $endRow)
    {
        $n = 0;
        $handle = fopen($file, "r");
        if ($handle) {
            while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
                ++$n;
                if ($startRow <= $n) {
                    $ling[] = $row;
                }
                if ($endRow != 0) {
                    if ($endRow == $n) break;
                }

            }
            fclose($handle);
        }

        if ($endRow == $n) return $ling;
        return false;

    }


    private function dataCompare( $source, $table)
    {
        $info = new Info();




        foreach ($source as $item) {
            $allPEDON_ID = $info->search($item[2], $table);
            if (!empty($allPEDON_ID)) {
                return true;
            }else{
                return false;
            }
        }
    }

    private function arrHandle($arr, $difIndex)
    {
        $newArr = array();
        foreach ($difIndex as $item) {
            unset($arr[$item]);
        }

        return $arr;

    }

    private function dataHandle($arr, $difIndex)
    {
        $newArr = array();
        foreach ($arr as $item) {
            foreach ($difIndex as $value) {
                unset($item[$value]);
            }
            $newArr[] = $item;
        }
        return $newArr;
    }

    public function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }


}

