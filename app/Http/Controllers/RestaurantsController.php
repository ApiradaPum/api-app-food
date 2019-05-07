<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\RestaurantsRepository;
use App\Repositories\FoodsRepository;
use App\Repositories\OrdersRepository;

class RestaurantsController extends Controller {

    var $lang;
    protected $user;
    protected $userRepo;
    protected $notiRepo;

    public function __construct() {
    }

    public function getIndex(Request $request, RestaurantsRepository $resRepo) {
        // Get restaurant
        $list_res = $resRepo->getAllRestaurants();
        
        return response()->json($list_res);
    }

    public function getFoodByID($res_id,Request $request, FoodsRepository $foodRepo) {
        // Get restaurant
        $list_food = $foodRepo->getFoodsbyResId($res_id);
        
        return response()->json($list_food);
    }

    public function saveOrders(Request $request, OrdersRepository $orderRepo) {
        // Get restaurant
        $list_order = $orderRepo->save_orders($request);
        
        return response()->json($list_order);
    }

}