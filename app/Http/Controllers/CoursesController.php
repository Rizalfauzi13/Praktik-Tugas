<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courses()
    {
        // mendapatkan data courses dari database
        $courses = Courses::all();
        // panggil view dan kirim data ke view
        // panggil view dan kirim data ke view
        return view('admin.contents.courses.index', [
            'courses' => $courses
        ]);
    }

    // untuk menampilkan ke halaman create
    public function createCourses()
    {
        return view('admin.contents.student.+ courses');
    }
    public function storeCourses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'Deskripsi' => 'required',
        ]);
        // Simpan ke database
        Courses::create([
            'name' => $request->name,
            'category' => $request->category,
            'descripsi' => $request->Deskripsi,
            'course_id'=>$request->course_id,


        ]);
        // Arahkan ke halaman student index
        return redirect('/admin/student/courses')->with('pesan', 'Berhasil menambahkan data.');
    }
    // Method untuk menampilkan halaman edit courses
    public function  edit($id)
    {
        // cari data courses berdasarkan id
        $courses = Courses::find($id); // Select * FROM courses WHERE id = $id;
        return view('admin.contents.courses.edit', [
            'courses' => $courses
        ]);
    }
}
