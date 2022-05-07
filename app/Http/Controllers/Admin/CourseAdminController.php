<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\Models\Cat;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class CourseAdminController extends Controller
{

    public function index()
    {
        $data['courses'] = Course::select ('id','name','cat_id','trainer_id', 'price','img')->orderBy('id','DESC')->get();
        return view('admin.courses.index')->with($data);
    }

    public function create()
    {
        $data['cats'] = Cat::select('id','name')->get();
        $data['trainers'] = Trainer::select('id','name')->get();

       return view('admin.courses.create')->with($data);
    }

    public function store(Request $request)
    {
       $data = $request -> validate([
           'name' => 'required|max:100',
           'small_desc' => 'required|string|max:180',
           'desc' => 'required|string',
           'price' => 'required|integer',
           'cat_id' => 'required|exists:cats,id',
           'trainer_id' => 'required|exists:trainers,id',
           'img' => 'required|image|mimes:jpg,jpeg,png',
       ]);

        $image = $request->file('img');
        $imageName = time().'.'.$image->extension();
        $destinationPath = public_path('/uploads/courses');

        $img = Image::make($image->path());
        $img->resize(970, 520)->save($destinationPath.'/'.$imageName);
        $data['img']=$imageName;


       Course::create($data);
       return redirect(route('admin.courses.index'));
    }

    public function edit($id)
    {
       $data['course'] = Course:: findOrFail($id);
       $data['cats'] = Cat:: select('id','name')->get();
       $data['trainers'] = Trainer:: select('id','name')->get();

       return view('admin.courses.edit')->with($data);
    }

    public function update(Request $request)
    {
       $data = $request -> validate([
        'name' => 'required|max:100',
        'small_desc' => 'required|string|max:180',
        'desc' => 'required|string',
        'price' => 'required|integer',
        'cat_id' => 'required|exists:cats,id',
        'trainer_id' => 'required|exists:trainers,id',
        'img' => 'nullable|image|mimes:jpg,jpeg,png',
       ]);
       $old_name = Course::findOrFail($request->id)->img;
       if ($request->hasFile('img'))
       {
        //supprimer l'ancien image
         Storage::disk('uploads')->delete('courses/'. $old_name);
        // ajouter la nouvelle image
        $image = $request->file('img');
        $imageName = time().'.'.$image->extension();
        $destinationPath = public_path('/uploads/courses');

        $img = Image::make($image->path());
        $img->resize(970, 520)->save($destinationPath.'/'.$imageName);
        $data['img']=$imageName;
       }
       else $data['img']= $old_name;

       Course::findOrFail($request->id)->update($data);
       return back();
    }

    public function delete($id)
    {
        $old_name = Course::findOrFail($id)->img;
        Storage::disk('uploads')->delete('courses/'. $old_name);

        Course::findOrFail($id)->delete();
       return back();
    }
}
