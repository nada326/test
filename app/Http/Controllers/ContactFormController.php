<?php

namespace App\Http\Controllers;
use App\contact;
use Illuminate\Http\Request;
use Mail;

class ContactFormController extends Controller
{
    public  function index(Request $request){

        return view('contact.contact');
    }

    public function store(Request $request){

        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',

        ]);

        contact::create($request->all());
         //  Send mail to admin
        \Mail::send('mail', array(
            'firstname' => $request->get('firstname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
//            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('elqisar1997@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }






}
