<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function index()
    {
        $data['cats'] = Cat::select ('id','name')->orderBy('id','DESC')->get();
        return view('admin.cats.index')->with($data);
    }

    public function create()
    {
       return view('admin.cats.create');
    }

    public function store(Request $request)
    {
       $data = $request -> validate([
           'name' => 'required|max:20'
       ]);
       Cat::create($data);
       return redirect(route('admin.cats.index'));
    }

    public function edit($id)
    {
       $data['cat'] = Cat:: findOrFail($id);
       return view('admin.cats.edit')->with($data);
    }

    public function update(Request $request)
    {
       $data = $request -> validate([
           'name' => 'required|max:20'
       ]);
       Cat::findOrFail($request->id)->update($data);
       return back();
    }

    public function delete($id)
    {
        Cat::findOrFail($id)->delete();
       return back();
    }
}
