<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            Session::put('user', Auth::user());
           // Session::put('email', Auth::user()->email);
           // Session::put('id', Auth::user()->id);
           if (Auth::user()->isAdmin()) {
            return redirect()->intended('http://localhost:4200/medecines');
        } else {
            return redirect()->intended('/profile')
                ->with(["credentials",$credentials]);
        }
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    // public function registration()
    // {
    //     return view('auth.registration');
    // }

    public function customRegistration(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'family_name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = array(

            'name' => $request->name,
            'family_name' => $request->family_name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request['password'])

        );

            // تحقق إذا كان الحساب مشرف (admin)
            if ($request->has('is_admin') && $request->is_admin) {
                $data['role_id'] = 1; // قيمة الدور المخصصة للمشرف (admin)
            } else {
                $data['role_id'] = 2; // قيمة الدور المخصصة للمستخدم العادي
            }


        try {
            $response = DB::table('users')->insert($data);
            if ($response) {
                $response = ["message" => "user  placed  successfully"];
                $id = DB::getPdo()->lastInsertId();
                $data["id"] = $id;
                return redirect("profile")->withSuccess('You have signed-in');
            } else {
                $response = ["message" => "user  failed"];
                return response($response, 422);
            }
        } catch (\Throwable $th) {
            return response($th);

        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }


};
