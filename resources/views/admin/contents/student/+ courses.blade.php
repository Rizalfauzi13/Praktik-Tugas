@extends('admin.main')
@section('content')
<div class="pagetitle">
      <h1> + Courses </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item active">+ courses</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body py-4">
            <form action="create" method="post" class="mt-3">
                 
                @csrf

                    <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-2">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="category" id="category" class="form-control">
            
                    </div>
                    <div class="mb-2">
                      <label for="category" class="form-label">Actoin</label>
                      <select name="course_id" id="course_id" class="form-select">
                          <option value="">Choose Courses</option>
                        @foreach ($courses as $course)
                           <option value="{{$course->id }}">{{$course->name}}</option>
                           @endforeach
                      </select>
                  </div>

                    <div class="mb-2">
                        <label for="Deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="Deskripsi" id="Deskripsi" class="form-control">
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