<?php

namespace App\Http\Controllers\Front;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $data['courses'] = Course:: select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'img', 'price')
        ->orderBy('id', 'desc')
        ->take('3')
        ->get();
        return view('front.index')->with($data);
    }
}
