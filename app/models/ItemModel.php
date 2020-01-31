<?php

namespace app\model;

use core\base\Model;
use core\db\Db;

class ItemModel extends \Model
{
    protected $table = 'item';

    public function search()
    {
        $sql = "select * from `$this->table` where `item_name` like :keyword";
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [':keyword' => "%$keyword%"]);
        $sth->execute();

        return $sth->faechALl();
    }
}

