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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Show message
                        </button>

                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  {{ $message->message }}
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td>
                </tr>
          @endforeach
        </tbody>
      </table>

 @endsection
