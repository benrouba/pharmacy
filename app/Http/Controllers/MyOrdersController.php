<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
    public function index()
    {
        $orders = DB::select('select * from medecines_orders where user_id='.Auth::user()->id);
        foreach ($orders as $key => $value) {
            $value->items = json_decode( $value->items);
            $value->items = collect($value->items);

        // dd( json_decode( $value->items));
        }
        return view('my_orders', ['orders' => $orders]);
    }
    }
