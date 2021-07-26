<?php

namespace app\database\activerecord;

use Attribute;
use ReflectionClass;

abstract class ActiveRecord
{

    protected $table = null;

    protected $attributes = [];

    protected $value;

    public function __construct()
    {

        if (!$this->table) {

            $this->table = strtolower((new ReflectionClass($this))->getShortName());
        }
    }

    public function getTable()
    {

        return $this->table;
    }

    public function getAttributes()
    {

        return $this->attributes;
    }


    public function __set($attributes, $value)
    {

        $this->attributes[$attributes] = $value;
    }

    public function __get($attribute)
    {

        return $this->attributes[$attribute];
    }

}
