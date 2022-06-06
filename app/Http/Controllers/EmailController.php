<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterMail;

class EmailController extends Controller
{
    public function create()
    {
        $categories = Catergory::all();

        return view('emailblade.create', compact('categories'));
    }

    public function email(Request $request) {
        //Validate the request...
        $this->validate($request, [
            'subject' => 'required',
            'category_id' => 'required',
            'message' => 'required',
        ]);

        //dd($request->all());

        //Setting up variables
        $people = People::where('category_id', $request->category_id)->get();
        $subject = $request->subject;
        $message = $request->message;

        //Gathering the data from the NewsletterMail.php
        $compose = [
            'subject' => $request->subject,
            'category_id' => $request->category_id,
            'message' => $request->message,
        ];

        //Looping through the people and sending email
        foreach ($people as $person) {
            Mail::to($person->email)->send(new NewsletterMail($subject, $message ));
        }

        //Store the data in the database

        //reroute to the dashboard
        return back()->with('success', 'Email sent successfully');
        //return redirect()->route('dashboard')->with('success', 'Email sent successfully');
    }

    public function store (Request $request) { 
        $data = request()->validate([
            'email' => 'required',
            'category' => 'required'
        ]);

        //dd($data);

        //$currentUser = Auth::user()->id;

        $people = People::create([
            'email' => $data['email'],
            'category_id' => $data['category']
            ]);

        $people->save();

        return redirect()->route('email.create')->with('success', 'Email stored successfully');
    
    }
}
