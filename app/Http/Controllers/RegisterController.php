<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view("register");
    }

    public function register (RegisterRequest $request){

        dump($request->validated());

        $user = User::create($request->validated());

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->passord = $request->password;

        $user->save();

        auth()->login($user);

        return redirect('/home')->with('success', "Usuario registrado exitosamente");
    }
}
