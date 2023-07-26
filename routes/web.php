<?php

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
 
Route::get('/',function () {
    return redirect("/auth/login");
});

Route::prefix("auth")->group(function () {

    Route::get("/login",[LoginController::class, "show"]);

    Route::post("/login", [LoginController::class, "login"])->name("auth.login");

    Route::get("/register", [RegisterController::class, "show"])->name("auth.register");

    Route::post("/register", [RegisterController::class, "register"])->name("auth.register");

    Route::get("/forgot", [RestoreController::class, "show"])->name("auth.forgot");

    Route::post("/forgot", [RestoreController::class, "sendRestoreEmail"])->name("auth.forgot_email");

    // Route::post("/restorePassword", function () {
    //     return "Estas restaurando la contraseña";
    // });

    // Route::post("/sendRestoreMail", function() {
    //     return "Estas enviando el email de recuperacion";
    // });

});

Route::prefix("home")->group(function() {
    Route::get("/", HomeController::class)->name("home");
    Route::get("/calendar", CalendarController::class)->name("home.calendar");
});

 Route::controller(TaskController::class)->group(function(){
    Route::get('tasks/create', 'create')->name('tasks.create');

    Route::post('tasks', 'store')->name('tasks.store');

    Route::get('tasks/{task}', 'show')->name('tasks.show');

    Route::get('tasks/{task}/edit', 'edit')->name('tasks.edit');

    Route::put('tasks/{task}', 'update')->name('tasks.update');

    Route::get('tasks/{task}', 'destroy')->name('tasks.destroy');
});

Route::resource('tasks', TaskController::class);

//? Categorys Routes
Route::resource('categories', CategoryController::class);
