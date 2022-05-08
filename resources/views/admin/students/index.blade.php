@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Students</h6>
    <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.students.create') }}">Add new</a>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Spec</th>
            <th scope="col" class="d-flex justify-content-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        @if ($student->spec !=null)
                        {{ $student->spec }}
                        @else
                        not exist
                        @endif
                    </td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-info " href="{{ route('admin.students.edit',$student->id) }}">Edit</a>
                        <a class="btn btn-sm btn-primary ml-3" href="{{ route('admin.students.showCourses',$student->id) }}">Show courses</a>
                        <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.students.delete',$student->id) }}">Delete</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
