@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Setting </h6><a class="btn btn-sm btn-info ml-3" href="{{ route('admin.setting.edit') }}">Edit</a>

    </div>

    <table class="table">
        <tr>
            <td>Name</td>
            <td>{{ $setting->name }}</td>
        </tr>
        <tr>
            <td>Logo</td>
            <td><img src="{{ asset('uploads/setting/' . $setting->logo) }}" width="200" />
            </td>
        </tr>
        <tr>
            <td>Favicon</td>
            <td><img src="{{ asset('uploads/setting/' . $setting->favicon) }}" width="50" />
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td>{{ $setting->city }}</td>
        </tr>
        <tr>
            <td>Adresse</td>
            <td>{{ $setting->adresse }}</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>{{ $setting->phone }}</td>
        </tr>
        <tr>
            <td>Work hours</td>
            <td>{{ $setting->work_hours }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $setting->email }}</td>
        </tr>
        <tr>
            <td>Site</td>
            <td>{{ $setting->site }}</td>
        </tr>
        <tr>
            <td>Fb</td>
            <td>{{ $setting->fb }}</td>
        </tr>
        <tr>
            <td>Tw</td>
            <td>{{ $setting->twiter }}</td>
        </tr>
        <tr>
            <td>Insta</td>
            <td>{{ $setting->insta }}</td>
        </tr>
    </table>
@endsection
