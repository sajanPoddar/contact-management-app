<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;
use App\Models\ContactType;
use App\Models\ContactDetail;
use App\Models\Group;
use App\Models\ContactGroup;
class AdminController extends Controller
{
    public function index(){
    	$contacts = Contact::with('details')->get();
    	$groups = Group::all();
        return view ('admin.index')->with(compact('contacts','groups'));
    	
   }
}
