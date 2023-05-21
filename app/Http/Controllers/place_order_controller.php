<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
class place_order_controller extends Controller

{
    public function place_order_controller (Request $request){
        $productArray = $request->input('data');
        $date = Carbon::now();
        // return response()->json(['message' => 'Data received and processed successfully']);
        {
            $total = 0;
            foreach ($productArray as $product) {
                $total += $product['price'] * $product['qnt'];
            }
            $total = $total + 400;
            $data = array(
                'items' =>json_encode($productArray),
                'user_id' => Auth::user()->id,
                'date'=> $date,
                'amount' => $total,
                'address' => Auth::user()->address,
            );
            try {
                $response = DB::table('medecines_orders')->insert($data);
                if ($response) {
                    $response = ["message" => "user  placed  successfully"];
                    $id = DB::getPdo()->lastInsertId();
                    $data["id"] = $id;
                    return response()->json(['message' => 'Data received and processed successfully']);
                } else {
                    $response = ["message" => "user  failed"];
                    return response($response, 422);
                }
            } catch (\Throwable $th) {
                return response($th);

            }
            // استلام الصورة المرفقة
            // if ($request->hasFile('recipe_image')) {
            //     $imagePath = $request->file('recipe_image')->store('recipe_images');

            // }

            // $prescriptionRequired = $request->has('prescription_required');

            // return redirect()->back()->with('success', 'تم إرسال الطلب بنجاح.');
        }
    }
}
