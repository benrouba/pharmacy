<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class category_controller extends Controller
{
    public function main()
    {
        $categories = DB::select('select * from family');

        return ($categories);
    }
    public function edit_category(Request $request)
    {
        $category = DB::table('family')->where('id', request()->input('id'))->update(array(
            'title' => request()->input('title'),
        ));
        if ($category) {
            $category = DB::table('family')->find(request()->input('id'));
            return response()->json($category);
        } else {
            return (['category' => 'error']);
        }

    }
    public function add_category(Request $request)
    {
        $category = DB::table('family')->insert(array(
            'title' => request()->input('title'),
        ));
        if ($category) {
            $category = DB::table('family')->orderBy('id', 'desc')->first();
            return response()->json($category);
        } else {
            return (['category' => 'error']);
        }

    }
    public function delete_category(Request $request)
    {
        // dd(request()->input('id'));
        $category = DB::table('family')->where('id', request()->input('id'))->delete();
        if ($category) {
            return response()->json($category);
        } else {
            return (['category' => 'error']);
        }

    }
}
