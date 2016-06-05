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
//NCIP Main Page Sitemap
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/news', 'HomeController@news');
Route::get('/article', 'HomeController@article');

//NCIP Forms
Route::get('/forms.CADC', function () {
    return view('forms.CADC');
});

Route::get('/forms.CADT', function () {
    return view('forms.CADT');
});

Route::get('/forms.CALC', function () {
    return view('forms.CALC');
});

Route::get('/forms.CALT', function () {
    return view('forms.CALT');
});

Route::get('/forms.COC', function () {
    return view('forms.COC');
});

Route::get('/articles.create', function () {
    return view('articles.create');
});
Route::get('/notifications.index', function () {
    return view('notifications.index');
});

Route::auth();

Route::get('/admin', 'AdminController@index');

/*
 *routes for the reports resource 
 */
Route::group(['middleware' => 'auth'], function()
{
Route::resource('reports', 'ReportController');
Route::resource('persons', 'PersonController');
Route::resource('offices', 'OfficeController');
});