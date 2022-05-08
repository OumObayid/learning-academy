@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
   <h6>Message:  {{$message->name}} /</h6>
   <div>
   <a class="btn btn-sm btn-primary" href="{{ route('admin.messages.index') }}">Back</a>
   </div>

</div>


@endsection
