<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    protected $table = 'restaurants';
    protected $dateFormat = 'Y-m-d H:i:s';
}
