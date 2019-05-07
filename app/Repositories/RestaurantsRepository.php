<?php

namespace App\Repositories;

use App\Restaurants;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RestaurantsRepository {

    function getAllRestaurants() {
        $list= Restaurants::get();
        return $list;
    }
}

?>
