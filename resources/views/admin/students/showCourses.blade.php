@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>Students / Courses </h6>
   <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
</div>

@foreach ($courses as $course)
<p>
    {{$course->name}}
</p>

@endforeach


@endsection
