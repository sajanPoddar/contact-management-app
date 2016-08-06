<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;
use App\Models\ContactType;
use App\Models\ContactDetail;
use App\Models\Group;
use App\Models\ContactGroup;
use App\Models\Location;
use App\Models\ContactLocation;

class ContactsController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{       
       $contact_type=ContactType::all();
       $locations=Location::all();
       $groups=Group::all();
       return view ('contacts.add_contact')->with(compact('contact_type','groups','locations'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    
     $input=$request-> except('_token','phoneNo_email','contact_type_id');
     if ($request->hasFile('image') ){
        $filename=$request->file('image')->getClientOriginalName(); 
        $request->file('image')->move(public_path("uploads"),$filename);
        $input['image']=$filename;
         }

      $contact = Contact::create($input);
    // dd($contact->id);  
      foreach ($request->phoneNo_email as $key => $phone_value) 
      {
          # code...
      
          ContactDetail::create([
              'contact_id'=>$contact->id,
              'phoneNo_email' => $phone_value,
              'contact_type_id'=>$request->contact_type_id[$key]
            
           ]);
      }
      foreach ($request->group_id as $key => $value) {
          ContactGroup::create([
             'contact_id'=>$contact->id,
             'group_id'=>$value  
            ]);
      }
      foreach ($request->location_id as $key => $value) {
        ContactLocation::create([
          'contact_id'=>$contact->id,
          'location_id'=>$value
          ]);
      }

        return redirect('admin');
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $groups = Group::all();
     $contact=Contact::find($id);
    return view('contacts.edit_contact')->with(compact('contact','groups'));
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $contact=Contact::find($id);
    $input= $request->except(['_token','_method']);
     // Contact::where('id',$id)->update($input);
    if ($request->hasFile('image') ){
$filename=$request->file('image')->getClientOriginalName(); 
    $request->file('image')->move(public_path("uploads"),$filename);
    $input['image']=$filename;
            }
    $contact->update($input);
  return redirect("admin");
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    Contact::destroy($id);
    
    return redirect('admin');
}
}
