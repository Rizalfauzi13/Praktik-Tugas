@extends('admin.main')
@section('content')
<div class="pagetitle">
      <h1> Edit Courses</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active"> Edit Courses</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body py-4">
            <form action="/admin/courses/update" method="post" class="mt-3">
                @csrf
                @method('PUT')
                    <div class="mb-2">
                        <label for="nomor"class="form-label">Nomor</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$courses->name ?? ''}}">
                    </div>
                    <div class="mb-2">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="category" id="catgeory" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <select name="deskripsi" id="deskripsi" class="form-select">
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" name="class" id="class" class="form-control">
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
          
    
          </div>
        </div>
      </div>
    </section>
@endsection