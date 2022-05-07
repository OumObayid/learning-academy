@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Courses</h6>
    <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.courses.create') }}">Add new</a>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Img</th>
            <th scope="col">Name</th>
            <th scope="col">Categorie</th>
            <th scope="col">Trainer</th>

            <th scope="col">Price</th>
            <th scope="col" class="d-flex justify-content-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>

                    <td><img src="{{ asset('uploads/courses/'. $course->img) }}"  width="50"/> </td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->cat->name }}</td>
                    <td>{{ $course->trainer->name }}</td>
                    <td>{{ $course->price }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-info " href="{{ route('admin.courses.edit',$course->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.courses.delete',$course->id) }}">Delete</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
