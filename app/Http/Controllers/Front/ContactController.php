<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['setting'] = Course:: select('id', 'name', 'small_desc', 'cat_id', 'trainer_id', 'img', 'price')
        ->first(); 
        return view('front.contact')->with($data);

    }
}
