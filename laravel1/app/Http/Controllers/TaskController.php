<?php

namespace App\Http\Controllers;

use App\Task;

use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $items = Task::all();
        return view("task.index", compact("items"));
    }

    public function store(TaskRequest $request)
    {
        $task = new Task;
        $task->comment = $request->comment;
        $task->save();
        return redirect("/task");
    }
}
