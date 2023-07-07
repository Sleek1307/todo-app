<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show()
    {
        return view("login");
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();

        if (condition) {
            # code...
        }
    }
}