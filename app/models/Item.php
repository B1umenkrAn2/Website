<?php

namespace app\models;

use core\base\Model;
use core\db\Db;


class Item extends Model
{
    /**
     *
     *
     * @var string using to store table name
     */
    protected $table = 'item';

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
}

