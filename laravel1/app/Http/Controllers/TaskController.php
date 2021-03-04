<?php

namespace App\Http\Controllers;

use App\Task;

use App\Http\Requests\TaskRequest;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $items = Task::all();
        return view("task.index", compact("items"));
    }

    public function create(TaskRequest $request)
    {
        $task = new Task;
        $task->comment = $request->comment;
        $task->save();
        return redirect("/task");
    }

    public function delete(Request $request)
    {
        Task::find($request->id_del)->delete();
        return redirect("/task");
    }
}
