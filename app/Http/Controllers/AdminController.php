<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;
use App\Models\Contact_type;
use App\Models\Contact_detail;

class AdminController extends Controller
{
    public function index(){
    	$contacts = Contact::all();
    	$contact_detail=Contact_detail::all();
        return view ('admin.index')->with(compact('contacts','contact_detail'));
    	
   }
}
