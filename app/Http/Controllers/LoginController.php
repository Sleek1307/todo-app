<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view("login");
    }

    public function login(LoginRequest $request)
    {

        $credentials = $request->getCredentials();

        if (!Auth::attempt($credentials)) {
            return redirect()->to("/auth/login")->withErrors(trans("auth.failed"));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended("/home");
    }
}