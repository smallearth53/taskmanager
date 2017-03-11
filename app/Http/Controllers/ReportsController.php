<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ReportsController extends Controller {

    //
    public function __construct() {
        $this->middleware('auth');
    }

    function listContacts() {

        $this->middleware('auth');

        $contacts = Contact::all();

        return view('contact.list', compact('contacts'));
    }

}
