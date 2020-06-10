<?php

namespace App\Http\Controllers;

use App\ToDo;

class DeleteToDoController extends Controller
{
    public function __invoke(ToDo $todo)
    {
        $todo->delete();

//        return redirect()->route('to-dos.show-all'); // either this way
        return redirect()->back(); // or this
    }
}
