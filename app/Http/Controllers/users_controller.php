<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class users_controller extends Controller
{
    public function main()
    {
        $users = DB::select('select * from users');

        return ($users);
    }
}
