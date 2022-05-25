<?php

namespace App\Http\Controllers\Admin;
use App\Models\NewsLetter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;

class NewsletterController extends Controller
{
    public function index()
    {
        $data['newsletters'] = NewsLetter::all();
        return view('admin.newsletters.index')->with($data);
    }

    public function create()
    {
        return view('admin.newsletters.create');
    }

    public function send(Request $request)
    {
        #1. Validation de la requête
        $mailData = $request -> validate([
            'subject' => 'nullable|max:255',
            'newsletter' => 'bail|required',            
        ]);
         
        #2. Récupération des utilisateurs
		$emailNews = NewsLetter::all();

        #3. Envoi du mail
		Mail::to($emailNews )->bcc("testobayid@gmail.com")
        ->queue(new MessageGoogle($mailData));
         return back()->with('success','Message envoyé');

        

      





        
		#1. Validation de la requête
		$this->validate($request, [ 'newsletter' => 'bail|required' ]);

		#2. Récupération des utilisateurs
		$emailNews = NewsLetter::all();

		#3. Envoi du mail
		Mail::to($emailNews )->bcc("testobayid@gmail.com")
						->queue(new MessageGoogle($request->all()));

		return back()->withText("Message envoyé");
    }

    public function delete($id)
    {
        Newsletter::findOrFail($id)->delete();
       return back();
    }
   

}
