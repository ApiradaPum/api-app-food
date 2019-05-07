<?php

namespace App\Repositories;

use App\Foods;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FoodsRepository {

    function getFoodsbyResId($res_id) {
        $list = Foods::where('res_id',$res_id)->where('amount','>',0)->get();
        return $list;
    }

    function getFoodsbyId($food_id) {
        $list = Foods::where('id',$food_id)->where('amount','>',0)->first();
        return $list;
    }

    function updateFoodAmount($food_id, $amount) {
        $list = Foods::where('id',$food_id)->update(['amount' => $amount]);
        return $list;
    }
}

?>