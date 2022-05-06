<?php

namespace App\Http\Controllers\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
        $data['students'] = Student::select ('id','name','email','spec')->orderBy('id','DESC')->get();
        return view('admin.students.index')->with($data);
    }

    public function create()
    {
       return view('admin.students.create');
    }

    public function store(Request $request)
    {
       $data = $request -> validate([
           'name' => 'required|max:50',
           'email' => 'required|max:50',
           'spec' => 'nullable|max:50',
       ]);

       Student::create($data);
       return redirect(route('admin.students.index'));
    }

    public function edit($id)
    {
       $data['student'] = Student:: findOrFail($id);
       return view('admin.students.edit')->with($data);
    }

    public function update(Request $request)
    {
       $data = $request -> validate([
        'name' => 'required|max:50',
        'email' => 'required|max:50',
        'spec' => 'nullable|max:50',
       ]);

       Student::findOrFail($request->id)->update($data);
       return back();
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
       return back();
    }
}
