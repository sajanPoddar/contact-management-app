<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index(){
    	$contacts = Contact::all();
           return view ('admin.index')->with(compact('contacts'));
    	
   }
}
