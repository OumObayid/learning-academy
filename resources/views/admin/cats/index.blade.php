@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Categories</h6>
    <button class="btn btn-sm btn-primary">Add new</button>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cat->name }}</td>
                    <td>
                        <button class="btn btn-sm btn-info">Edit</button>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
