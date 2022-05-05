<?php

namespace App\Http\Controllers\Admin;
use Image;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CourseAdminController extends Controller
{
    public function index()
    {
        $data['courses'] = Course::select ('id','name','price','img')->orderBy('id','DESC')->get();
        return view('admin.courses.index')->with($data);
    }

    public function create()
    {
       return view('admin.courses.create');
    }

    public function store(Request $request)
    {
       $data = $request -> validate([
           'name' => 'required|max:50',
           'phone' => 'nullable|max:20',
           'spec' => 'required|max:50',
           'img' => 'required|image|mimes:jpg,jpeg,png',
       ]);

    //     $new_name = $data['img']->hashName();
    //    Image::make($data['img']->resize(50, 50)->save(public_path('uploads/courses/'. $new_name)));

    //     // dd( $new_name);

        $image = $request->file('img');
        $imageName = time().'.'.$image->extension();
        $destinationPath = public_path('/uploads/courses');

        $img = Image::make($image->path());
        $img->resize(50, 50, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);
        $data['img']=$imageName;


       Course::create($data);
       return redirect(route('admin.courses.index'));
    }

    public function edit($id)
    {
       $data['course'] = Course:: findOrFail($id);
       return view('admin.courses.edit')->with($data);
    }

    public function update(Request $request)
    {
       $data = $request -> validate([
        'name' => 'required|max:50',
        'phone' => 'nullable|max:20',
        'spec' => 'required|max:50',
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
        $img->resize(50, 50, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);
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
