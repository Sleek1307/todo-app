<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function showLoginView() {
        
    }

    function showRestoreView(){
        return view("restore");
    }
}
