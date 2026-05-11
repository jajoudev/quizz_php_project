<?php

use App\Http\Controllers\QuizzController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class, 'index']);

Route::get("/quizz", function(){
    return view("quizz");
});

Route::get("/user", function(){
    return view("user");
});
