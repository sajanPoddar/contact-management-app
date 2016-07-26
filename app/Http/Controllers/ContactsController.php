<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
           return view ('contacts.add_contact');
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
         $input=$request-> except('_token');
         if ($request->hasFile('image') ){
            $filename=$request->file('image')->getClientOriginalName(); 
            $request->file('image')->move(public_path("uploads"),$filename);
            $input['image']=$filename;
             }
          Contact::create($input);
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
         $contact=Contact::find($id);
        return view('contacts.edit_contact')->with(compact('contact'));
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
