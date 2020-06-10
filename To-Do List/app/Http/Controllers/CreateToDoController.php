<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateToDoController extends Controller
{
    public function __invoke()
    {
        return view('todo.create');
    }
}
