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

    public function store(TaskRequest $request)
    {
        $task = new Task;
        $task->comment = $request->comment;
        $task->save();
        return redirect("/task");
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect("/task");
    }

    public function update($id)
    {
        $task = Task::find($id);

        if ($task->status == "false") {
            $task->status = "true";
        } elseif ($task->status == "true") {
            $task->status = "false";
        }

        $task->save();
        return redirect("/task");
    }
}
