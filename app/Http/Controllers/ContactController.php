<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    function index() {
        
       
        return  view('contact.contactform');
    }
    
    function post() {
        return  'test';
    }
    
    function listContacts() {
       $contacts = Contact::all();
       
       return  view('contact.list', compact('contacts')); 
    }
    
    function show(Contact $contact) {
        
               
        
        return view('contact.show', compact('contact'));
    }
    
}
