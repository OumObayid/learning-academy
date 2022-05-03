<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function doLogin(Request $request)
    {
        $data = $request->validate([
          'email' => 'required|email|max:191',
          'password' => 'required|string'
        ]);
        if (! Auth::attempt(['email' => $data['email'], 'password' => $data['password']]))
         return back();
        else  return redirect(route('admin.home'));
    }

    // public function logout()
    // {
    //     Auth::guard('user')->logout();
    //     return redirect(route('admin.login'));
    // }
}
