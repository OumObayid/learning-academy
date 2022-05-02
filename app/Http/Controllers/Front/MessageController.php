<?php

namespace App\Http\Controllers\front;

use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
}
