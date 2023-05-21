<?php

namespace App\Http\Controllers;
use DB;
class home_controller extends Controller
{
    public function index()
    {
        $medecines=DB::select('select * from medecines');
        // dd($medecines);
        return view('welcome',['medecines'=>$medecines]);
    }
}
