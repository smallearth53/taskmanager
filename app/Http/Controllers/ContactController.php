<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    function index() {
       /* GET /contact */
       
        return  view('contact.contactform');
    }
    
    function post() {
        /* POST /contact */
        
//        $contact = new Contact;
//        $contact->email = request('email');
//        $contact->message = request('message');
//        
//        $contact->save();
        
        Contact::create([
            'email' => request('email'),
            'message' => request('message')
        ]);
        
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
