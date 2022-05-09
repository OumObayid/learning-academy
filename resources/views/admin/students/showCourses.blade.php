@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>{{$student->name}} / Courses </h6>
   <div>
       <a class="btn btn-sm btn-secondary" href="{{ route('admin.students.addCourse',$student->id) }}">Add to course</a>
   <a class="btn btn-sm btn-secondary mr-2" href="{{ route('admin.students.index') }}">Back</a>
   </div>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Course name</th>
        <th scope="col">Price</th>
        <th scope="col">Trainer</th>
        <th scope="col">Status</th>
        <th scope="col" class="d-flex justify-content-end">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>
                    {{$course->name}}
                </td>
                <td>
                    {{$course->price}}
                </td>
                <td>
                    {{$course->trainer->name}}
                </td>
                <td>
                    {{$course->pivot->status}}
                </td>
                <td class="d-flex justify-content-end">
                    @if ( $course->pivot->status !== 'approve' )
                    <a class="btn btn-sm btn-info " href="{{ route('admin.students.approveCourse',[$student->id,$course->id]) }}">Approve</a>
                    @endif
                    @if ( $course->pivot->status !== 'reject' || $course->pivot->status == 'reject' )
                    <a class="btn btn-sm btn-success ml-3" href="{{ route('admin.students.rejectCourse',[$student->id,$course->id]) }}">Reject</a>
                    <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.students.deleteCourse',[$student->id,$course->id]) }}">Delete</a>
                    @endif
                </td>
            </tr>
       @endforeach

    </tbody>
</table>
@endsection
