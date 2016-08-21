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
        $advancedsearch=$request->get('advancedsearch');
        $group_id=$request->get('group_id');
        $group_search=$request->get('group_search');
        $location_search=$request->get('location_search');
    	if($search){
    	// $contacts=Contact::with('details')->where('first_name','like','%'.$search.'%')->paginate(3);
        // dd($contacts);
            $contacts=Contact::with('details')->where('first_name','like','%'.$search.'%')->orWhereHas('contactlocations', function ($query) use($search) {
                            $query->where('location_name','like','%'.$search.'%');
                })->orWhereHas('contactgroups', function ( $query ) use($search) {
                         $query->where('group_name','like','%'.$search.'%' );
                            })->paginate(3);



    	}
        elseif($advancedsearch){
          $searchterm=explode(' ', $advancedsearch);
          foreach ($searchterm as $term ) {
              $trim=trim($term);
              $contacts=Contact::with('details')->where('first_name','like','%'.$trim.'%')->whereHas('contactlocations', function ($query) use($trim) {
                            $query->where('location_name','like','%'.$trim.'%');
                })->orWhereHas('contactgroups', function ( $query ) use($trim) {
                         $query->where('group_name','like','%'.$trim.'%' );
                            })->paginate(3);

          }




           
        }
        elseif($group_search){
            // $contacts=Group::with('contacts','contacts.details')->get()->where('group_name',$group_search);
           // dd($group);
            $contacts=Contact::with(['contactgroups'=>function($query) use($group_search){
                $query->where('group_name',$group_search);
            }])->whereHas('contactgroups', function ($query) use($group_search) {
            $query->where('group_name',$group_search); })->paginate(3);


             // dd($contacts);
            }
        elseif ($location_search) {
            $contacts=Contact::with(['contactlocations'=>function($query) use ($location_search){
                $query->where('location_name','like','%'.$location_search.'%');
            }])->whereHas('contactlocations', function ($query) use ($location_search){
                $query->where('location_name','like','%'.$location_search.'%');
            })->paginate(2);

        }
            
            
           
        
        elseif($group_id){
            $contacts = ContactGroup::get()->where('group_id',$group_id);
            dd($contacts);
        }

    	else{
    		$contacts = Contact::with('details')->orderBy('id','desc')->paginate(3);
    	}
        return view ('admin.index')->with(compact('contacts','groups'));
    	
   }
}
