<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks');
    }

    public function store(TaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;

        if ($task->save()) {
            $message = trans('task.message.crsuccessnoty', ['Name' => "{$task->name}"]);

            return redirect()->route('task.index')->with('success_message', $message);
        } else {
            return redirect()->route('task.index');
        }
    }
}
