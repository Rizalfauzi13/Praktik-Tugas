<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('Welcome');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// Route untuk menampilkan student
Route::get('admin/student', [StudentController::class, 'index']);
Route::get('admin/student/courses', [CoursesController::class, 'courses']);

// Route untuk menampulkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk mengirim data form tambah student 
Route::post('admin/student/create', [StudentController::class, 'store']);

// Route untuk menampilkan student
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

// Route untuk menyimpan hasil update student
Route::post('admin/student/update/{id}', [StudentController::class, 'update']);

// Route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destory']);

// Route untuk mengarahkan ke halaman tambah courses
Route::get('admin/student/courses/create', [CoursesController::class, 'createCourses']);

// Route buat nambahin courses
Route::post('admin/student/courses/create', [CoursesController::class, 'storeCourses']);
// Route Untuk menaampilkan halaman courses
route::get('admin/courses/edit/{id}', [CoursesController::class, 'edit']);
