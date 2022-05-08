<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
           'logo' => 'nullable|image|mimes:jpg,jpeg,png',
           'favicon' => 'nullable|image|mimes:jpg,jpeg,png',
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

       //storage du logo
       $logo_name = Setting::findOrFail($request->id)->logo;
       if ($request->hasFile('logo'))
       {
        //supprimer l'ancien image
         Storage::disk('uploads')->delete('setting/'. $logo_name);
        // ajouter la nouvelle image
        $image = $request->file('logo');
        $logo_name = 'logo.png';
        $destinationPath = public_path('/uploads/setting');

        $img = Image::make($image->path());
        $img->save($destinationPath.'/'.$logo_name);
        $data['logo']=$logo_name;
       }
       else $data['logo']= $logo_name;

        //storage du favicon
        $favicon_name = Setting::findOrFail($request->id)->favicon;
        if ($request->hasFile('favicon'))
        {
        //supprimer l'ancien image
        Storage::disk('uploads')->delete('setting/'. $favicon_name);
        // ajouter la nouvelle image
        $image = $request->file('favicon');
        $favicon_name = 'favicon.png';
        $destinationPath = public_path('/uploads/setting');

        $img = Image::make($image->path());
        $img->save($destinationPath.'/'.$favicon_name);
        $data['favicon']=$favicon_name;
        }
        else $data['favicon']= $favicon_name;

       Setting::findOrFail($request->id)->update($data);
       return back();
    }


}
