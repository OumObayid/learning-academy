@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>Categories / Edit / {{ $cat->name }} </h6>
   <a class="btn btn-sm btn-primary" href="{{ route('admin.cats.index') }}">Back</a>
</div>
@include('admin.inc.errors')
<form method="POST" action="{{ route('admin.cats.update') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $cat->id }}">
    <div class="form-group">
        <label>Name</label>
        <input value="{{ $cat->name }}" type="text" required name="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

