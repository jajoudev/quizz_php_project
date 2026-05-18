<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class QuizzController extends Controller
{
    public function showQuizzByID(int $id): View {
        return view("quizz", ["quizz" => Quizz::findOrFail($id)]);
    }
}
