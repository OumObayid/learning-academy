<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function index()
    {
        $data['cats'] = Cat::select ('id','name')->get();
        return view('admin.cats.index')->with($data);
    }
}
