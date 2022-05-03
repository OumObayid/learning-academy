<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutController extends Controller
{
    public function login() 
    {
        return view('admin.auth.login');
    }
    public function doLogin() 
    {
        return view('admin.auth.login');
    }
}
