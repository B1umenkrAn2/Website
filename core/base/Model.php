<?php
namespace core\base;

use core\db\Sql;

class Model extends Sql
{
    protected $model;

    public function __construct()
    {
        if ($this->table) {
            $this->model = get_calss($this);

            $this->model = substr($this->model, 0, -5);

            $this->table = strtolower($this->model);
        }

    }
}