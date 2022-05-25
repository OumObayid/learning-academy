@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>NewsLetters / Send </h6>
   <a class="btn btn-sm btn-secondary" href="{{ route('admin.newsletters.index') }}">Back</a>
</div>
@include('admin.inc.errors')
<form method="POST" action="{{ route('admin.newsletters.send') }}">
    @csrf
   @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <div class="form-group">
        <label>Subject</label>
        <input required type="text" name="subject" class="form-control">
    </div>
    <div>
        <label>Message</label>
        <textarea name="newsletter" class="form-control" cols="50" rows="8"></textarea>
    </div>
    <div class="py-1">
    <button type="submit" class="btn btn-info">Send</button>
    </div>
</form>

@endsection
