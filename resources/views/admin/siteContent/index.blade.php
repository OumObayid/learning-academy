@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Site content </h6><a class="btn btn-sm btn-info ml-3" href="{{ route('admin.siteContent.edit') }}">Edit</a>

    </div>

    <table class="table">
        <tr>
            <td>Name</td>
            <td>{{ $siteContent->name }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $siteContent->title }} </td>
        </tr>
        <tr>
            <td>Subtitle</td>
            <td>{{ $siteContent->subtitle }} </td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{ $siteContent->desc }} </td>
        </tr>



    </table>
@endsection
