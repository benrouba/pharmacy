<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index (){
        return view('profile');
    }
    
    public function show()
    {
        $user = Auth::user();
        $family_name = $user->family_name;
        $phone_number= $user->phone_number;
        $address = $user->address;
        return view('profile', compact('family_name','phone_number','address'));
    }
}
