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
