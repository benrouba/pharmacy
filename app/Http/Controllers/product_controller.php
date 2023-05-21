<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class product_controller extends Controller
{
    public function index(Request $request){
        $product=DB::select('select * from medecines where id='.$request->product_id);
        return view('product',['product'=>$product]);
    }
}
