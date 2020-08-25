<?php

namespace app\models;

use core\base\Model;
use core\db\Db;
use PDO;

set_time_limit(600);

class Info extends Model
{
    /**
     *
     *
     * @var string using to store table name
     */
    protected $table = 'Info ';


    /**
     *  glue all the join table
     * @param $arr  . join table array
     */
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

    /**
     * get column attributes from database for the year or province
     *
     * @param $ColumnName  column will be used
     * @return array the columns result
     */
    public function getColumnAttributes($ColumnName)
    {

        $sql = "select distinct " . $ColumnName . ' from ' . $this->table;
        $sth = Db::pdo()->prepare($sql);
        $sth->execute();
        return  $sth->fetchAll(PDO::FETCH_COLUMN);

    }

    /**
     *  this method is used to count how many different columns is in the upload file
     *  and return the different columns index
     * @param $table  update table
     * @param $fileCol  update column array
     *
     * @return different column index in $fileCol array
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

    /**
     *  this method is for update the data.
     *  1. get the file form the $_post.
     *  2. use file to get the column which will be update.
     *  3. compare the file columns and database columns.
     *  4. if compare pass insert data to database.
     *
     * @param $file update file
     * @param $table update table
     * @return different|int[]|string    int[] for the update record collection. string for wrong table or has error.
     */
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

    /**
     *  insert data to database.
     *
     * @param $file update file
     * @param $table update table
     * @param $diffCol  differernt columns in file.
     * @param $header   databse columns
     * @return int[]  record insert collection.
     */
    private function updateAllDataFromFile($file, $table, $diffCol, $header)
    {
        $success = 0;
        $failure = 0;
        $row = 1;
        if (($handle = fopen($file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
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


    /**
     *  this method is use for read certain line data from the file.
     * @param $file update file
     * @param $startRow file startRow
     * @param $endRow  file endRow
     * @return bool
     */
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

    /*
     *  this method is use for compare file data and database data.
     *  this method is not implement in current version.
     */

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

    /**
     *
     * this method is used for clean all data which not to be inserted to database
     * @param $arr sorce array
     * @param $difIndex column which is not exist in the database index
     * @return mixed array with
     */
    private function arrHandle($arr, $difIndex)
    {
        $newArr = array();
        foreach ($difIndex as $item) {
            unset($arr[$item]);
        }

        return $arr;

    }

    /**
     *
     *
     * @param $arr
     * @param $difIndex
     * @return array 2 dimensional array
     */
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



}

