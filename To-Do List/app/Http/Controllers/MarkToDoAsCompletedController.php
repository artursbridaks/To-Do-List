<?php

namespace App\Http\Controllers;

use App\ToDo;
use Carbon\Carbon;

class MarkToDoAsCompletedController extends Controller
{
    public function __invoke(ToDo $todo)
    {
        $todo->update([
//            'completed_at' => $todo->completed_at ? null : Carbon::now() // either this way
            'completed_at' => $todo->completed_at ? null : (new Carbon)->now() // or this way
        ]);

        return redirect()->back();
    }
}
