<?php

namespace App\Http\Controllers\front;

use App\Models\Cat;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    public function cat($id)
    {
        $data['cat'] = Cat::findOrFail($id);
        $data['courses'] = Course::where('cat_id',$id)->get();
        return view('front.courses.cat')->with($data);
    }
}
