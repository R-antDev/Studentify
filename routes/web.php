<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentEducationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('student.student_list');
//});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create-student', [StudentController::class, 'create_student'])->name('create.student');
Route::post('/create-student', [StudentController::class, 'store_student'])->name('store.student');
Route::get('/',[StudentController::class,'student_list'])->name('student.list');
Route::get('/student/{id}', [StudentController::class, 'student_edit'])->name('student.edit');
Route::put('/student/{id}', [StudentController::class, 'student_update'])->name('student.update');
Route::delete('/student/{id}', [StudentController::class, 'student_delete'])->name('student.delete');

Route::get('/educations/student/{id}', [StudentEducationController::class, 'education_list'])->name('student.education');
// Create
Route::post('/educations/student/{studentId}', [StudentEducationController::class, 'add_education'])->name('education.add');
// Edit
Route::get('/educations/{id}/edit', [StudentEducationController::class, 'education_edit'])->name('education.edit');
Route::put('/educations/{id}', [StudentEducationController::class, 'education_update'])->name('education.update');
// delete
Route::delete('/educations/{id}', [StudentEducationController::class, 'education_delete'])->name('education.delete');
