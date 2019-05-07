<?php

namespace App\Repositories;

use App\Orders;
use Carbon\Carbon;
use App\Foods;
use Illuminate\Support\Facades\DB;
use App\Repositories\FoodsRepository;

class OrdersRepository {

    function save_orders($data = array()) {
        if (empty($data))
            return false;
        $date = Carbon::now('Asia/Bangkok');
        $order = new Orders;
        $foodRepo = new FoodsRepository;
        $checkFood = $foodRepo->getFoodsbyId($data['food_id']);
        $data['amount'] = 1;
        if($checkFood->amount-$data['amount'] < 0){
            return false;
        }
        $food = $foodRepo->updateFoodAmount($data['food_id'], ($checkFood->amount-$data['amount']));
        if(count($checkFood)>0){
            /* Save new record of information */
            $order->user_id = '1';
            $order->food_id = $data['food_id'];
            $order->amount = $data['amount'];
            $order->price = $checkFood->price * $data['amount'];
            $order->created_at = $date;
            $order->updated_at = $date;
        }

        $save = $order->save();
        

        if ($save)
            return true;
        else
            return false;
    }
}

?>