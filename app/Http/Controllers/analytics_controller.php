<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class analytics_controller extends Controller
{
   public function main(Request $request)
   {
        $data = array();
        $data['categories'] =DB::select('select * from family');
        $data['products'] =DB::select('select * from medecines');
        $data['orders'] =DB::select('select * from medecines_orders');
        $data['users'] =DB::select('select * from users');
      return ($data);
   }
}
