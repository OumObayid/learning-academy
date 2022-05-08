@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Messages</h6>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">subject</th>
            <th scope="col" class="d-flex justify-content-end">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>
                        @if ($message->subject !=null)
                        {{ $message->subject }}
                        @else
                        not exist
                        @endif
                    </td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-danger ml-3" href="{{ route('admin.messages.delete',$message->id) }}">Delete</a>
                        <a class="btn btn-sm btn-primary ml-3" href="{{ route('admin.messages.showMessage',$message->id) }}">Show message</a>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
