<?php

namespace App\Http\Controllers\front;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function newsletter( Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email'
        ]);
        NewsLetter:: create($data);
        return back();
        // return Redirect::to(URL::previous() . "#newsletter");
        // return back()->with('success', 'successfully sent');


    }

    public function contact( Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email'
        ]);
        NewsLetter:: create($data);
        return back();
        // return Redirect::to(URL::previous() . "#newsletter");
        // return back()->with('success', 'successfully sent');


    }
}
