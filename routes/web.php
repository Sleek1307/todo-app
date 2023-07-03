<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::prefix("auth")->group(function () {

    Route::get("/login", function () {
        return "Estas en el login";
    });

    Route::post("/login", function () {
        return "Estas iniciando sesion";
    });

    Route::get("/forgotPassword", function () {
        return "Pagina de restaurar contraseña";
    });

    Route::post("/restorePassword", function () {
        return "Estas restaurando la contraseña";
    });

    Route::post("/sendRestoreMail", function() {
        return "Estas enviando el email de recuperacion";
    });

});