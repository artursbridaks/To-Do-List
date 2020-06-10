<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class ShowAllToDoController extends Controller
{
    public function __invoke(Request $request)
    {
        $todos = (new ToDo())->latest()->get();

        return view('todo.show-all', [
            'todos' => $todos
        ]);
    }
}
