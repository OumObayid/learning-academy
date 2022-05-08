@extends('admin.layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
  <h6>Setting</h6>
</div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Logo</th>
            <th scope="col">Favicon</th>
            <th scope="col">City</th>
            <th scope="col">Adresse</th>
            <th scope="col">Phone</th>
            <th scope="col">Work hours</th>
            <th scope="col">Email</th>
            <th scope="col">Site</th>
            <th scope="col">Fb</th>
            <th scope="col">Tw</th>
            <th scope="col">Insta</th>
            <th scope="col" class="d-flex justify-content-end">Actions</th>
          </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $setting->name }}</td>
                    <td>{{ $setting->logo }}</td>
                    <td>{{ $setting->favicon }}</td>
                    <td>{{ $setting->city }}</td>
                    <td>{{ $setting->adresse }}</td>
                    <td>{{ $setting->phone }}</td>
                    <td>{{ $setting->work_hours }}</td>
                    <td>{{ $setting->email }}</td>
                    <td>{{ $setting->site }}</td>
                    <td>{{ $setting->fb }}</td>
                    <td>{{ $setting->twiter }}</td>
                    <td>{{ $setting->insta }}</td>
                    <td class="d-flex justify-content-end">
                        <button type="button" class="btn btn-info mx-3" data-toggle="modal" data-target="#showMessag">
                            Show logo
                        </button>
                        <a class="btn btn-sm btn-info ml-3" href="{{ route('admin.setting.edit') }}">Edit</a>

                          <!-- Modal -->
                          <div class="modal fade" id="showMessage" tabindex="-1" role="dialog" aria-labelledby="showMessageLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-warning">
                                  <h5 class="modal-title" id="showMessageLabel"></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('uploads/setting/'. $setting->logo) }}"  width="50"/>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td>
                </tr>
        </tbody>
      </table>

 @endsection
