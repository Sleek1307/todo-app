<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoreController extends Controller
{
    public function show () {
        return view("restore");
    }

    public function sendRestoreEmail() {
        return "Estamos enviando el correo";
    }
}
