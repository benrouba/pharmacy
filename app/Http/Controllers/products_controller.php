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
        // dd($products);
        return view ('products',['products'=>$products,"categories"=>$categories]);
    }
    public function main(){
        $products =DB::select('select * from medecines');
        foreach ($products as $key => $value) {
          $value->category = DB::select('select * from family where id='.$value->family_id)[0];
        }
        return ($products);
    }
    public function edit_product(Request $request)
    {
        if ($request->file('image')) {
            $uploadedFile = $request->file('image');
            $photoPath = $uploadedFile->store('products', 'public');
            $photoPath = explode('/', $photoPath)[1];
        }
        $product = DB::table('medecines')->where('id', request()->input('id'))->update(array(
            'title' => request()->input('title'),
            'description' => request()->input('description'),
            'quantity' => request()->input('quantity'),
            'price' => request()->input('price'),
            'family_id' => request()->input('family_id'),
            'image_name' =>  $request->file('image') ? $photoPath : "",
        ));

        if ($product) {
            $product = DB::table('medecines')->find(request()->input('id'));
            $product->category = DB::select('select * from family where id=?', [$product->family_id])[0];
            return response()->json($product);
        } else {
            return (['product' => 'error']);
        }

    }
    public function add_product(Request $request)
    {
        if ($request->file('image')) {
            $uploadedFile = $request->file('image');
            $photoPath = $uploadedFile->store('products', 'public');
            $photoPath = explode('/', $photoPath)[1];
        }
        $product = DB::table('medecines')->insert(array(
            'title' => request()->input('title'),
            'description' => request()->input('description'),
            'quantity' => request()->input('quantity'),
            'price' => request()->input('price'),
            'family_id' => request()->input('family_id'),
            'image_name' =>  $request->file('image') ? $photoPath : "",
        ));
        // dd($product);
        if ($product) {
            $product = DB::table('medecines')->orderBy('id', 'desc')->first();
            $product->category_payload = DB::select('select * from family where id=?', [$product->family_id])[0];
            return response()->json($product);
        } else {
            return (['product' => 'error']);
        }

    }
    public function delete_product(Request $request)
    {
        // dd(request()->input('id'));
        $product = DB::table('medecines')->where('id', request()->input('id'))->delete();
        if ($product) {
            return response()->json($product);
        } else {
            return (['product' => 'error']);
        }

    }
}
