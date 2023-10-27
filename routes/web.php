<?php

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/auth/login");
});

Route::prefix("auth")->group(function () {

    Route::get("/login", [LoginController::class, "show"]);

    Route::post("/login", [LoginController::class, "login"])->name("auth.login");

    Route::get("/register", [RegisterController::class, "show"])->name("auth.register");

    Route::post("/register", [RegisterController::class, "register"])->name("auth.register");

    //Rutas de recuperacion de contraseña
    Route::get("/forgot-password", [ForgotPasswordController::class, "show"])->name("password.request");

    Route::post("/forgot-password", [ForgotPasswordController::class, "create"])->name("password.email");

    Route::get('/reset-password/{token}', [RestoreController::class, "show"])->middleware('guest')->name('password.reset');

    Route::post('/reset-password', [RestoreController::class, "store"])->middleware('guest')->name("password.update");

    Route::get("/logout", [LoginController::class, "logout"])->name("auth.logout")->middleware("auth");
});

Route::middleware("auth")->group(function () {

    Route::prefix("home")->group(function () {
        Route::get("/", function () {
            return redirect("/tasks");
        })->name("home");
        Route::get("/calendar", CalendarController::class)->name("home.calendar");
    });

    Route::resource('tasks', TaskController::class);
    Route::post('/index/date',[TaskController::class, 'indexWithDate'])->name('index.date');

    Route::resource('categories', CategoryController::class);

    Route::resource('profile', ProfileController::class);
});
