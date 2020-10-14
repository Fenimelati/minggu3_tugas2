<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

  
    public function welcome2(Request $request) {
        return view('welcome', ["firstName" => $request["firstName"], "lastName" => $request["lastName"]]);
    }
}
