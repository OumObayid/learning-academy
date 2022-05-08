<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageAdminController extends Controller
{
    public function index()
    {
        $data['messages'] = Message::select ('id','name','email','subject')->orderBy('id','DESC')->get();
        return view('admin.messages.index')->with($data);
    }


    public function delete($id)
    {
        Message::findOrFail($id)->delete();
       return back();
    }
    public function showMessage($id)
    {
        $data['message'] = Message::findOrFail($id)->first();
        return view('admin.messages.index')->with($data);

    }

}
