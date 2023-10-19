<?php

use App\Http\Controllers\categoryController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

//ASYNC ROUTES OF THE TASKS CONTROLLER
Route::delete("/tasks/{task}", [TaskController::class, "destroy"]);
Route::post("/tasks/update", [TaskController::class, "asyncUpdate"]);

//ASYNC ROUTES OF THE  CATEGORY CONTROLLER
Route::delete("/categories/{category}", [categoryController::class, "destroy"]);