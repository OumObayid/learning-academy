@extends('admin.layout')
@section('content')
<div style="max-width: 320px; margin: 0 auto; padding: 20px; background: #fff;">
	<h3>{{ $data['subject'] }}:</h3>
	<div>{{ $data['newsletter'] }}</div>
</div>
@endsection