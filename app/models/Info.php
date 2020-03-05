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


    public function setTable($tables){
        $this->table=$tables;
    }

    public function setJoinTables($arr){
        $joinedTable = "info";
        foreach ($arr as $table){
            $joinedTable .= $table;
        }
        $this->table=$joinedTable;
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

    public function getColumnAttributes($ColumnName){

        $sql = "select distinct ".$ColumnName.' from '.$this->table;
 /*       echo "-----------------";
        echo $sql;
        echo "-------------";*/
        $sth = Db::pdo()->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }

    public function getJoinData(){

    }
}

