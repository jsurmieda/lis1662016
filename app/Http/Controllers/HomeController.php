<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        return view('ncip.index');
    }
	
	public function about()
    {
        return view('ncip.about');
    }
	
	public function offices()
    {
        return view('ncip.offices');
    }
	
	public function services()
    {
        return view('ncip.services');
    }
	
	public function news()
    {
        return view('ncip.news');
    }
	
	public function article()
    {
        return view('ncip.article');
    }
	
}
