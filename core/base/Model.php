<?php
namespace core\base;

use core\db\Sql;

class Model extends Sql
{
    protected $model;

    public function __construct()
    {
        // get database table name
        if (!$this->table) {

            //  get model  Class name
            $this->model = get_class($this);

            //  substr class name to model
            $this->model = substr($this->model, 0, -5);

            // check the table name and class name
            $this->table = strtolower($this->model);
        }

    }
}