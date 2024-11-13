<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

use App\Models\dashboard;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {



// routes/web.php
Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

//student routes
Route::get('/Students/create', [StudentController::class, 'create'])->name('student.create');
Route::get('students', [StudentController::class, 'index'])->name('student.index');
Route::post('/students', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/students/{id}/update', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students/{id}/delete', [StudentController::class, 'destroy'])->name('student.destroy');


//course routes
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::get('course', [CourseController::class, 'index'])->name('course.index');
Route::post('/course', [CourseController::class, 'store'])->name('course.store');
Route::get('/course/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/course/{id}/update', [CourseController::class, 'update'])->name('course.update');
Route::delete('/course/{id}/delete', [CourseController::class, 'destroy'])->name('course.destroy');
});
