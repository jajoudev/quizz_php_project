<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizzController extends Controller
{
    public function index(): View {
        $quizzs = User::all();

        var_dump($quizzs);

        return view("users", ["user" => $quizzs]);
    }
}