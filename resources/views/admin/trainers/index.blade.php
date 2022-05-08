@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Trainers</h6>
    <a class="btn btn-sm btn-secondary mr-2" href="{{ route('admin.trainers.create') }}">Add new</a>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Img</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Spec</th>
            <th scope="col" class="d-flex justify-content-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trainers as $trainer)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>

                    <td><img src="{{ asset('uploads/trainers/'. $trainer->img) }}"  width="50"/> </td>
                    <td>{{ $trainer->name }}</td>
                    <td>
                        @if ($trainer->phone !=null)
                        {{ $trainer->phone }}
                        @else
                        not exist
                        @endif
                    </td>
                    <td>{{ $trainer->spec }}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-info " href="{{ route('admin.trainers.edit',$trainer->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.trainers.delete',$trainer->id) }}">Delete</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
