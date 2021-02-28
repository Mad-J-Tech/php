<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $items = Task::all();
        return view("task.index", ["items" => $items]);
    }

    public function store(Request $request)
    {
        $this->validate($request, Task::$rules);
        $task = new Task;
        $task->comment = $request->comment;
        $task->save();
        return redirect("/task");
    }
}
