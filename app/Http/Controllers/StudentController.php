<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Courses;

class StudentController extends Controller
{
    // method untuk menampilkan halaman student
    public function index(){
        // mendapatkan data student dari databases
        $students = Student::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }
    public function courses(){
        // mendapatkan data courses dari database
        $courses = Courses::all();
        // panggil view dan kirim data ke view
        // panggil view dan kirim data ke view
        return view('admin.contents.student.courses', [
            'courses' => $courses
        ]);
    }
}
