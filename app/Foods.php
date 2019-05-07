<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    protected $table = 'foods';
    protected $dateFormat = 'Y-m-d H:i:s';
}
