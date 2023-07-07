<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
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

Route::get('/', HomeController::class)->name('home');

//? Autentification Routes
Route::prefix("auth")->group(function () {

    Route::get("/login",[AuthController::class, "showLoginView"]);

    Route::post("/login", function () {
        return "Estas iniciando sesion";
    });

    Route::get("/restore", [AuthController::class, "showRestoreView"]);

    Route::post("/restorePassword", function () {
        return "Estas restaurando la contraseña";
    });

    Route::post("/sendRestoreMail", function() {
        return "Estas enviando el email de recuperacion";
    });

});

//? Tasks Routes
/* Route::controller(TaskController::class)->group(function(){
    Route::get('tasks/create', 'create')->name('tasks.create');

    Route::post('tasks', 'store')->name('tasks.store');

    Route::get('tasks/{task}', 'show')->name('tasks.show');

    Route::get('tasks/{task}/edit', 'edit')->name('tasks.edit');

    Route::put('tasks/{task}', 'update')->name('tasks.update');

    Route::get('tasks/{task}', 'destroy')->name('tasks.destroy');
});
 */

Route::resource('tasks', TaskController::class);
