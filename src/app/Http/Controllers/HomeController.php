<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Quizz;

class HomeController extends Controller
{
    function index()
    {
        $quizzs = Quizz::all();

        return view("home", ["quizzs" => $quizzs]);
    }
}
