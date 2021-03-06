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

Route::get('/', 'TaskController@index');

/**
 * Task Route
 */

Route::resource('task', 'TaskController', ['only' => [
    'index', 'destroy', 'store',
]]);
