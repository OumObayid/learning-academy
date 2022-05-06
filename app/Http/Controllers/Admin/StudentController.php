<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
           'email' => 'required|email|max:50|unique:students',
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
        'email' => 'required|email|max:50|unique:students',
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

    public function showCourses($id)
    {
       $data['courses'] = Student:: findOrFail($id)->courses;
       $data['student'] = Student:: findOrFail($id);
       return view('admin.students.showCourses')->with($data);
    }


    public function addCourse($id)
    {
        $data['courses'] = Course::select('id','name')->get();
        $data['student'] = Student:: findOrFail($id);

        return view('admin.students.addCourse')->with($data);
    }
    public function storeCourse($id,Request $request)
    {
        $data = $request -> validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $result['data'] =  DB::table('course_student')->where('student_id',$id)->where('course_id', $data['course_id'] )->first();
        
        if ( $result['data'] == null) {
            DB::table('course_student')->insert([
                'student_id' => $id,
                'course_id' => $data['course_id'],
            ]);
        }

        return redirect(route('admin.students.showCourses',$id));
    }

    public function approveCourse($id,$c_id)
    {
      DB::table('course_student')->where('student_id',$id)->where('course_id', $c_id )->update([
          'status' => 'approve'
      ]);
      return back();
    }

    public function rejectCourse($id,$c_id)
    {
        DB::table('course_student')->where('student_id',$id)->where('course_id', $c_id )->update([
            'status' => 'reject'
        ]);
        return back();
    }

    public function deleteCourse($id,$c_id)
    {
        DB::table('course_student')->where('student_id',$id)->where('course_id', $c_id )->delete();
        return back();
    }

}
