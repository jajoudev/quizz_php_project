<?php

use App\Http\Controllers\QuizzController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get("/", [HomeController::class, 'index']);
Route::get("/quizz", [QuizzController::class, 'index']);
Route::get("/user", [UserController::class, 'index']);