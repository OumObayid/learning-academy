@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Newsletters</h6>
    <a class="btn btn-sm btn-secondary mr-2" href="{{ route('admin.newsletters.create') }}">Send a newsletter</a>
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
            @foreach ($newsletters as $newsletter)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $newsletter->email }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.newsletters.delete',$newsletter->id) }}">Delete</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
