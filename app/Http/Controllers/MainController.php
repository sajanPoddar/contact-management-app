<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
   public function index(){
   	$header=view('pages.header');
   	$left_sidebar=view('pages.left_sidebar');
   	$main_content=view('pages.main_content');
   	return view('master')->with('header',$header)
                     	->with('left_sidebar',$left_sidebar)
   	                   ->with('main_content',$main_content);

   }
   public function form(){
   		$header=view('pages.header');
   		$left_sidebar=view('pages.left_sidebar');
         $main_content=view('pages.form');
   		
   		return view('master')->with('header',$header)
   		                    ->with('left_sidebar',$left_sidebar)
                             ->with('main_content',$main_content);}
   		                    

}
