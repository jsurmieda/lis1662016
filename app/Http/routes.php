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
    return view('ncip.index');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about', function () {
    return view('ncip.about');
});
Route::get('/admin.index', 'AdminController@index');

Route::get('/forms.CADC', function () {
    return view('forms.CADC');
});

Route::get('/forms.CADT', function () {
    return view('forms.CADT');
});