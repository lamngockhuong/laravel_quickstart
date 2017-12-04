<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Show Task Dashboard
 */

Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [
        'tasks' => $tasks
    ]);
});

/**
 * Add New Task
 */

Route::post('/task', function (Request $request) {
    $validateData = $request->validate([
        'name' => 'required|max:255',
    ]);

    // Create the Task
    $task = new Task;
    $task->name = $validateData['name']; // $request->name
    $task->save();

    return redirect('/');
});

/**
 * Add Delete Task
 */

Route::delete('/task/{task}', function (Task $task) {

});