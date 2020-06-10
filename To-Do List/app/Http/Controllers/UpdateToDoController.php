<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateToDoRequest;
use App\ToDo;
//use Illuminate\Http\Request; // with "Request" in constructor

class UpdateToDoController extends Controller
{
    public function __invoke(Todo $todo, CreateToDoRequest $request)
    {
//        $this->validate($request, [
//           'text' => ['required', 'min:3']
//        ]); // can use this code with "Request" in constructor

        $todo->update($request->all());

        return redirect()->route('to-dos.show-all');
    }
}
