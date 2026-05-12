<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizzController extends Controller
{
    public function index(): View {
        $users = User::all();

        var_dump($users);

        return view("users", ["user" => $users]);
    }
}