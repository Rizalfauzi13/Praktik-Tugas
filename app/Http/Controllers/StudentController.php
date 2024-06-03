<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Courses;

class StudentController extends Controller
{
    // method untuk menampilkan halaman student
    public function index()
    {
        // mendapatkan data student dari databases
        $students = Student::all();

        // panggil view dan kirim data ke view
        return view('admin.contents.student.index', [
            'students' => $students
        ]);
    }

    // Method untuk menampilkan form tambah student
    public function create()
    {
        return view('admin.contents.student.create');
    }

    // Method untuk menyimpan data student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);

        // Simpan ke database
        Student::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,

        ]);

        // Arahkan ke halaman student index
        return redirect('/admin/student')->with('pesan', 'Berhasil menambahkan data.');
    }
    // method untuk menampilkan halaman edit
    public function edit($id)
    {
        // cari student berdasarkan id
        $student = Student::find($id); // SELECT * FROM students WHERE id = $id;

        // kirim  student ke view edit 
        return view('admin.contents.student.edit', [
            'student' => $student,
        ]);
    }
    // method untuk menyimpan hasil update
    public function update($id, Request $request)
    {
        // cari student berdasarkan id
        $student = Student::find($id); // SELECT * FROM students WHERE id = $id;

        // validasi request
        $request->validate([
            'name' => 'required',
            'nim' => 'required|numeric',
            'major' => 'required',
            'class' => 'required',
        ]);
        // simpan perubahan
        $student->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'major' => $request->major,
            'class' => $request->class,
        ]);
        // kembalikan ke halaman student
        return redirect('admin/student')->with('massage', 'Berhasil Mengedit Student');
    }
    // method untuk menghapus student
    public function destory($id)
    {
        // cari student berdasarkan id
        $student = Student::find($id); // SELECT * FROM students WHERE id = $id;
        // hapus student
        $student->delete();

        // kembalikan ke halaman student
        return redirect('admin/student')->with('massage', 'Berhasil Mengedit Student');
    }
}
