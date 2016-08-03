<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allGroup = Group::all();
        return view('group')->with(compact('allGroup'));
    }

    public function store(Request $request)
    {
        $input = $request->except("_token");
        Group::create($input);
        return redirect('group');
    }
}
