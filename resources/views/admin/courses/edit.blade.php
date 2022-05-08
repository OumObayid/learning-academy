@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>Courses / Edit / {{ $course->name }} </h6>
   <a class="btn btn-sm btn-secondary" href="{{ route('admin.courses.index') }}">Back</a>
</div>
@include('admin.inc.errors')
<form method="POST" action="{{ route('admin.courses.update') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $course->id }}">
    <div class="form-group">
        <label>Name</label>
        <input value="{{ $course->name }}" required type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
        <label>Categorie</label>
        <select class="form-control" name="cat_id" >
            <option selected value="{{ $course->cat->id }}">{{ $course->cat->name }}</option>
            @foreach ($cats as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Trainer</label>
        <select class="form-control" name="trainer_id" >
            <option selected value="{{ $course->trainer->id }}">{{ $course->trainer->name }}</option>
            @foreach ($trainers as $trainer)
            <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Small desc</label>
        <input type="text" name="small_desc" class="form-control" value="{{ $course->small_desc }}">
    </div>
    <div class="form-group">
        <label>Desc</label>
        <textarea name="desc" class="form-control" cols="30" rows="10">{{ $course->desc }}</textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input required type="number" name="price" class="form-control" value="{{ $course->price }}">
    </div>
    <img src="{{ asset('uploads/courses/'.$course->img) }}" height="100px" class="my-3">

    <div class="form-group">
        <input type="file" name="img" class="form-control-file">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>

@endsection

