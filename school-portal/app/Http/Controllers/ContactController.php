<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Student;

class ContactController extends Controller
{
    public function index()

    {
        $data = Student::where('user_id', '=', auth()->id())->first();
        return view('contactForm', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
  
        Contact::create($request->all());
  
        return redirect()->back()
                         ->with(['success' => 'Email Sent.']);
    }


    
    // public function showData(){

    //     $data = Student::where('user_id', '=', auth()->id())->first();
        
    //     return view('contactForm', compact('data'));
    // }
}
