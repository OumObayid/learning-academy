<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SiteContentController extends Controller
{
    public function index()
    {
        $data['siteContent'] = SiteContent::all()->first();
        return view('admin.siteContent.index')->with($data);
    }



    public function edit()
    {
        $data['siteContent'] = SiteContent::all()->first();
       return view('admin.siteContent.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data = $request -> validate([
           'name' => 'required|max:255',
           'title' => 'required|max:255',
           'subtitle' => 'nullable|max:255',
           'desc' => 'nullable',

       ]);

      $result= SiteContent::findOrFail($request->id)->update($data);
       return back();
    }


}
