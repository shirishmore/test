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

Route::get('/', function () {
    return view('welcome');
});
// route to show the login form
Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));

Route::get('editProfile', array('uses' => 'HomeController@editProfile'));

Route::post('updateProfile', array('uses' => 'HomeController@updateProfile'));

//Route::get('addressListing', array('uses' => 'AddressBookController@index'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::get('addressBook/delete/{id}', 'AddressBookController@destroy');

Route::resource('addressBook', 'AddressBookController');

