<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;
use App\Models\ContactType;
use App\Models\ContactDetail;

class AdminController extends Controller
{
    public function index(){
    	$contacts = Contact::with('details')->get();
    	
        return view ('admin.index')->with(compact('contacts'));
    	
   }
}
