<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizzController extends Controller
{
    public function index(): View {
        $quizzs = Quizz::all();

        return view("index", ["quizzs" => $quizzs]);
    }
}
