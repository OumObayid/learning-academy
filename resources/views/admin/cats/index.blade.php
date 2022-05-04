@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Categories</h6>
    <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.cats.create') }}">Add new</a>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col" class="d-flex justify-content-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $cat->name }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-info " href="{{ route('admin.cats.edit',$cat->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.cats.delete',$cat->id) }}">Delete</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
