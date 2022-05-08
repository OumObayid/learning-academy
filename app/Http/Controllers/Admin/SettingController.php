<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $data['setting'] = Setting::all()->first();
        return view('admin.setting.index')->with($data);
    }



    public function edit()
    {
        $data['setting'] = Setting::all()->first();
       return view('admin.setting.edit')->with($data);
    }

    public function update(Request $request)
    {
       $data = $request -> validate([
           'name' => 'required|max:255',
           'logo' => 'required|max:255',
           'favicon' => 'required|max:255',
           'city' => 'required|max:255',
           'adresse' => 'required|max:255',
           'phone' => 'required|max:255',
           'work_hours' => 'required|max:255',
           'email' => 'required|max:255',
           'site' => 'required|max:255',
           'fb' => 'required|max:255',
           'twiter' => 'required|max:255',
           'insta' => 'required|max:255',

       ]);
       Setting::update($data);
       return back();
    }

    
}
