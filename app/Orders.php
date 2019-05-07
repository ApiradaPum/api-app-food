<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $dateFormat = 'Y-m-d H:i:s';

    public function getTable()
    {
        return $this->table;
    }
}
