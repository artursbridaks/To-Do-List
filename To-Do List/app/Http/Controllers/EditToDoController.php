<?php

namespace App\Http\Controllers;

use App\ToDo;

class EditToDoController extends Controller
{
    public function __invoke(ToDo $todo)
    {
        return view('todo.edit', [
            'todo' => $todo
        ]);
    }
}
