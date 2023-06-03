<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class orders_controller extends Controller
{
   public function main()
   {
        $orders = DB::select('select * from medecines_orders');
        foreach ($orders as $key => $value) {
           $value->user = DB::table('users')->where('id', $value->user_id)->first();
        }
        return ($orders);
   }
}
