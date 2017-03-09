<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Mail\ContactMail;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    function index() {
       /* GET /contact */
       
        return  view('contact.contactform');
    }
    
    function post() {
        /* POST /contact */
        
        $this->validate(request(), [
           'email' => 'required', 
           'message' => 'required'
        ]);
        
        Contact::create(request(['email', 'message']));
        
        $email = request('email');
        
        \Mail::to($email)->send(new ContactMail);
       
        
        return redirect('/contact');
      
        
    }
    
    function listContacts() {
       $contacts = Contact::all();
       
       return  view('contact.list', compact('contacts')); 
    }
    
    function show(Contact $contact) {
        
               
        
        return view('contact.show', compact('contact'));
    }
    
}
