<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('teacher_menu');
});

Route::resource('subjects', SubjectController::class);
Route::resource('subjects.tasks', TaskController::class)->shallow();
Route::resource('tasks.solutions', SolutionController::class)->shallow();
