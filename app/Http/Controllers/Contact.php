<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;



class Contact extends Controller
{
     function ContactPage() {
        return view('contact',
        [
        ]
    );
    }

    public function Send(Request $request) {
        
        $contact_data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:250'
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS', env('CONTACT_EMAIL')))
            ->send(new ContactFormMail($contact_data));

        return redirect()->back()->with('success', '');
    }
}
