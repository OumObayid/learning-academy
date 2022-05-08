@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>{{ $student->name }} / Add course </h6>
   <a class="btn btn-sm btn-secondary" href="{{ route('admin.students.index') }}">Back</a>
</div>
@include('admin.inc.errors')
<form method="POST" action="{{ route('admin.students.storeCourse',$student->id) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $student->id }}">
    <div class="form-group">
        <select class="form-control" name="course_id" >
            @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-info">Add</button>
</form>

@endsection

