<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/admin',function(){
// 	return view ('admin.index');
// });
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::resource('contacts', 'ContactsController');
Route::resource('groups', 'GroupsController');
Route::resource('locations', 'LocationsController');

