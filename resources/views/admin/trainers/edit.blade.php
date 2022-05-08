@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>Trainers / Edit / {{ $trainer->name }} </h6>
   <a class="btn btn-sm btn-secondary" href="{{ route('admin.trainers.index') }}">Back</a>
</div>
@include('admin.inc.errors')
<form method="POST" action="{{ route('admin.trainers.update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $trainer->id }}">
    <div class="form-group">
        <label>Name</label>
        <input value="{{ $trainer->name }}" type="text" required name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $trainer->phone }}">
    </div>
    <div class="form-group">
        <label>Speciality</label>
        <input required type="text" name="spec" class="form-control" value="{{ $trainer->spec }}">
    </div>
    <img src="{{ asset('uploads/trainers/'.$trainer->img) }}" height="100px" class="my-3">
    <div class="form-group">
        <input type="file" name="img" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>

@endsection

