<?php

namespace App\Http\Controllers\Admin;
use App\Models\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;


class TrainerController extends Controller
{
    public function index()
    {
        $data['trainers'] = Trainer::select ('id','name','phone','spec','img')->orderBy('id','DESC')->get();
        return view('admin.trainers.index')->with($data);
    }

    public function create()
    {
       return view('admin.trainers.create');
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
    //    Image::make($data['img']->resize(50, 50)->save(public_path('uploads/trainers/'. $new_name)));

    //     // dd( $new_name);

        $image = $request->file('img');
        $imageName = time().'.'.$image->extension();
        $destinationPath = public_path('/uploads/trainers');

        $img = Image::make($image->path());
        $img->resize(50, 50, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imageName);
        $data['img']=$imageName;


       Trainer::create($data);
       return redirect(route('admin.trainers.index'));
    }

    public function edit($id)
    {
       $data['trainer'] = Trainer:: findOrFail($id);
       return view('admin.trainers.edit')->with($data);
    }

    public function update(Request $request)
    {
       $data = $request -> validate([
        'name' => 'required|max:50',
        'phone' => 'nullable|max:20',
        'spec' => 'required|max:50',
        'img' => 'required|image|mimes:jpg,jpeg,png',
       ]);
       Trainer::findOrFail($request->id)->update($data);
       return back();
    }

    public function delete($id)
    {
        Trainer::findOrFail($id)->delete();
       return back();
    }
}
