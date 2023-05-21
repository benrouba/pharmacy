<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class products_controller extends Controller
{
    public function index(Request $request){
        if (request('search')) {
            $products = DB::table('medecines')->where('title','LIKE','%'.request('search')."%")->get();
        }
        else if (request('category')) {
            $products =DB::select('select * from medecines where family_id='.request('category'));
        }
        else{
            $products = DB::table('medecines')->get();
        }
        $categories = DB::select('select * from family');
        return view ('products',['products'=>$products,"categories"=>$categories]);
    }
}
