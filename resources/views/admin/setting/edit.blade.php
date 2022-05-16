@extends('admin.layout')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h6>Setting </h6>

    </div>
    @include('admin.inc.errors')
<form method="POST" action="{{ route('admin.setting.update') }}" enctype="multipart/form-data">
        @csrf
        <table class="table">
            <input type="hidden" name="id" value="{{ $setting->id }}">
            <tr>
                <td>Name</td>
                <td><input name="name" class="form-control" type="text" value="{{ $setting->name }}" /></td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><img src="{{ asset('uploads/setting/' . $setting->logo) }}" width="200" class="my-3" /><input name="logo"
                        class="form-control-file" type="file">
                </td>
            </tr>
            <tr>
                <td>Favicon</td>
                <td><img src="{{ asset('uploads/setting/' . $setting->favicon) }}" width="50"
                        class="my-3" /><input name="favicon" class="form-control-file" type="file">
                </td>
            </tr>
            <tr>
                <td> <tr>
                <td>Background</td>
                <td><img src="{{ asset('uploads/setting/' . $setting->background) }}" width="250"
                        class="my-3" /><input name="favicon" class="form-control-file" type="file">
                </td>
            </tr></td>
                <td><img src="{{ asset('uploads/setting/' . $setting->favicon) }}" width="50"
                        class="my-3" /><input name="favicon" class="form-control-file" type="file">
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td><input name="city" class="form-control" type="text" value="{{ $setting->city }}"></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td><input name="adresse" class="form-control" type="text" value="{{ $setting->adresse }}"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input name="phone" class="form-control" type="text" value="{{ $setting->phone }}"></td>
            </tr>
            <tr>
                <td>Work hours</td>
                <td><input name="work_hours" class="form-control" type="text" value="{{ $setting->work_hours }}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email"  class="form-control" type="email" value="{{ $setting->email }}"></td>
            </tr>
            <tr>
                <td>Site</td>
                <td><input name="site" class="form-control" type="text" value="{{ $setting->site }}"></td>
            </tr>
            <tr>
                <td>Facebook</td>
                <td><input name="fb" class="form-control" type="text" value="{{ $setting->fb }}"></td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td><input name="twiter" class="form-control" type="text" value="{{ $setting->twiter }}"></td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td><input name="insta" class="form-control" type="text" value="{{ $setting->insta }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-sm btn-info " type="submit">Update</button></td>
            </tr>
        </table>
    </form>
@endsection
