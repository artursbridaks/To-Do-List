<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateToDoRequest;
use App\ToDo;

class StoreToDoController extends Controller
{
    public function __invoke(CreateToDoRequest $request)
    {
        $todo = new ToDo($request->all());
        $todo->save();

        return redirect()->route('to-dos.show-all');
    }
}
