<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        return view("register");
    }

    public function register (RegisterRequest $request){

        $user = User::create($request->validated());

        // $user = new User;

        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;

        // $user->save();

        return redirect('/auth/login')->with('success', "Usuario registrado exitosamente");
    }
}
