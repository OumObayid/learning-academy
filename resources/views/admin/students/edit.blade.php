@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>Students / Edit / {{ $student->name }} </h6>
   <a class="btn btn-sm btn-primary" href="{{ route('admin.students.index') }}">Back</a>
</div>
@include('admin.inc.errors')
<form method="POST" action="{{ route('admin.students.update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $student->id }}">
    <div class="form-group">
        <label>Name</label>
        <input value="{{ $student->name }}" type="text" required name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input required type="email" name="email" class="form-control" value="{{ $student->email }}">
    </div>
    <div class="form-group">
        <label>Speciality</label>
        <input type="text" name="spec" class="form-control" value="{{ $student->spec }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

