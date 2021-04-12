<?php

use App\Http\Controllers\SolutionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
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
    return view('main_menu');
})->name('main');

Route::resource('subjects', SubjectController::class)->middleware(['auth']);
Route::resource('subjects.tasks', TaskController::class)->shallow()->middleware(['auth']);
Route::resource('tasks.solutions', SolutionController::class)->shallow()->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/student_subjects/take_subject', [StudentController::class, 'take'])->middleware(['auth'])->name('students.take');
Route::get('/student_subjects/{subject}', [StudentController::class, 'register'])->middleware(['auth'])->name('students.register');
Route::get('/student_subjects', [StudentController::class, 'index'])->middleware(['auth'])->name('students.index');
Route::get('/student_subjects/{subject}/leave', [StudentController::class, 'leave'])->middleware(['auth'])->name('students.leave');
Route::get('/student_subjects/{subject}/show', [StudentController::class, 'show'])->middleware(['auth'])->name('students.show');

Route::view('/contact', 'contact')->name('contact');

require __DIR__.'/auth.php';
