<?php

namespace App\Http\Controllers\Front;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $data['contact'] = Setting:: select('name', 'city','adresse', 'phone', 'work_hours', 'email','fb','twiter', 'insta')
        ->first(); 
        return view('front.contact')->with($data);

    }
}
