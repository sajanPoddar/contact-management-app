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
    public function index(Request $request){
    	
    	$groups = Group::all();
        $search=$request->get('search');
    	if($search){
    	$contacts=Contact::with('details')->where('first_name','like','%'.$search.'%')->paginate(1);
    	}

    	else{
    		$contacts = Contact::with('details')->paginate(1);
    	}
        return view ('admin.index')->with(compact('contacts','groups'));
    	
   }
}
