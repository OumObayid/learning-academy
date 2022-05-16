@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Setting </h6>

    </div>
    @include('admin.inc.errors')
<form method="POST" action="{{ route('admin.siteContent.update') }}" enctype="multipart/form-data">
        @csrf
        <table class="table">
            <input type="hidden" name="id" value="{{ $siteContent->id }}">
            <tr>
                <td>Name</td>
                <td><input name="name" class="form-control" type="text" value="{{ $siteContent->name }}" /></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input name="title" class="form-control" type="text" value="{{ $siteContent->title }}" /></td>
            </tr>
            <tr>
                <td>Subtitle</td>
                <td><input name="subtitle" class="form-control" type="text" value="{{ $siteContent->subtitle }}" /></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="desc" class="form-control" type="text" >{{ $siteContent->desc }}</textarea></td>
            </tr>
                <td><button class="btn btn-sm btn-info " type="submit">Update</button></td>
            </tr>
        </table>
    </form>
@endsection
