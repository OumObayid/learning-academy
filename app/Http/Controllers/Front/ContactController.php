<?php

namespace App\Http\Controllers\Front;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        // $data['settings'] = Setting:: select('name', 'city','adresse', 'phone', 'work_hours', 'email','fb','twiter', 'insta')
        // ->first();
        // return view('front.contact.index')->with($data);
        $data['setting'] = Setting::first();
        return view('front.contact.index')->with($data);

    }
}
