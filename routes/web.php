<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {
  return view('Welcome');
});

Route::get('admin/dashboard',[DashboardController::class,'index']);

// Route untuk enampilkan student
Route::get('admin/student', [StudentController::class,'index']);
Route::get('admin/student/courses', [StudentController::class,'courses']);

// Route untuk menampulkan form tambah student
Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk mengirim data form tambah student 
Route::post('admin/student/create',[StudentController::class, 'store']); 

// Route untuk menampilkan student
Route ::get('admin/student/edit/{id}',[StudentController::class, 'edit'])->name('student.edit');

// Route untuk menyimpan hasil update student
Route::post('admin/student/update/{id}',[StudentController::class,'update']);

// Route untuk menghapus student
Route::delete('admin/student/delete/{id}',[StudentController::class, 'destory']);