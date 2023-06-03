<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class place_order_controller extends Controller
{
    public function place_order_controller(Request $request)
    {
        if ($request->file('prescription_image')) {
            $uploadedFile = $request->file('prescription_image');
            $photoPath = $uploadedFile->store('products', 'public');
            $photoPath = explode('/', $photoPath)[1];
        }
        $productArray = json_decode($request->input('data'));
        $date = Carbon::now();
        {
            $total = 0;
            foreach ($productArray as $product) {
                $total += $product->price * $product->qnt;
            }
            $total = $total + 400;
            $data = array(
                'items' => json_encode($productArray),
                'user_id' => Auth::user()->id,
                'date' => $date,
                'amount' => $total,
                'address' => Auth::user()->address,
                'prescription_path' => $request->file('prescription_image') ? $photoPath : "",
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
