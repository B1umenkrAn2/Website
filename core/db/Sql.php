<?php
namespace core\db;

use PDO;
use \PDOStatement;

class Sql
{
    // table name
    protected $table;

    // Pk
    protected $primary = 'id';

    // WHERE and ORDER conditions
    private $filter = '';

    // Pdo bindParam() bind param
    private $param = array();

    /**
     * condition merger：
     *
     * $this->where(['id = 1','and title="Web"', ...])->fetch();
     *
     * $this->where(['id = :id'], [':id' => $id])->fetch();
     *
     * @param array $where conditions
     * @return $this this object
     */
    public function where($where = array(), $param = array())
    {
        if ($where) {
            $this->filter .= ' WHERE ';
            $this->filter .= implode(' ', $where);

            $this->param = $param;
        }

        return $this;
    }

    /**
     * order meteorologic：
     *
     * $this->order(['id DESC', 'title ASC', ...])->fetch();
     *
     * @param array $order order condition
     * @return $this
     */
    public function order($order = array())
    {
        if($order) {
            $this->filter .= ' ORDER BY ';
            $this->filter .= implode(',', $order);
        }

        return $this;
    }

    // get all
    public function fetchAll()
    {
        $sql = sprintf("select * from %s %s", $this->table, $this->filter);
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();
        return $sth->fetchAll();
    }


    // get one
    public function fetch()
    {
        $sql = sprintf("select * from `%s` %s", $this->table, $this->filter);
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();

        return $sth->fetch();
    }

    // base on id
    public function delete($id)
    {
        $sql = sprintf("delete from `%s` where `%s` = :%s", $this->table, $this->primary, $this->primary);
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, [$this->primary => $id]);
        $sth->execute();

        return $sth->rowCount();
    }

    // create new record
    public function add($data)
    {
        $sql = sprintf("insert into `%s` %s", $this->table, $this->formatInsert($data));
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $data);
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();

        return $sth->rowCount();
    }

    // modify
    public function update($data)
    {
        $sql = sprintf("update `%s` set %s %s", $this->table, $this->formatUpdate($data), $this->filter);
        $sth = Db::pdo()->prepare($sql);
        $sth = $this->formatParam($sth, $data);
        $sth = $this->formatParam($sth, $this->param);
        $sth->execute();

        return $sth->rowCount();
    }

    /**
     *
     * @param PDOStatement $sth  bind object
     * @param array $params
     * 1）using ?
     *    [$a, $b, $c]
     * 2）using :
     *    ['a' => $a, 'b' => $b, 'c' => $c]
     *
     *    [':a' => $a, ':b' => $b, ':c' => $c]
     *
     * @return PDOStatement
     */
    public function formatParam(PDOStatement $sth, $params = array())
    {
        foreach ($params as $param => &$value) {
            $param = is_int($param) ? $param + 1 : ':' . ltrim($param, ':');
//            var_dump($param);
            $sth->bindParam($param, $value);
        }

        return $sth;
    }

    // formatInsert date
    private function formatInsert($data)
    {
        $fields = array();
        $names = array();
        foreach ($data as $key => $value) {
            $fields[] = sprintf("`%s`", $key);
            $names[] = sprintf(":%s", $key);
        }

        $field = implode(',', $fields);
        $name = implode(',', $names);

        return sprintf("(%s) values (%s)", $field, $name);
    }

    // format update queries
    private function formatUpdate($data)
    {
        $fields = array();
        foreach ($data as $key => $value) {
            $fields[] = sprintf("`%s` = :%s", $key, $key);
        }

        return implode(',', $fields);
    }
}