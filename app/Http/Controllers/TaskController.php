<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks,
        ]);
    }

    public function store(TaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;

        if ($task->save()) {
            $message = trans('task.message.crsuccessnoty', ['name' => $task->name]);

            return redirect()->route('task.index')->with('create_success_message', $message);
        }

        $message = trans('task.message.crerrornoty', ['name' => $task->name]);

        return redirect()->route('task.index')->with('create_error_message', $message);
    }

    public function destroy(Task $task)
    {
        if ($task->delete()) {
            $message = trans('task.message.dlsuccessnoty', ['name' => $task->name]);

            return redirect()->route('task.index')->with('delete_success_message', $message);
        }

        $message = trans('task.message.dlerrornoty', ['name' => $task->name]);

        return redirect()->route('task.index')->with('delete_error_message', $message);
    }
}
