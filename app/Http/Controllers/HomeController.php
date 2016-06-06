<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;

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
        $ArticlesCarousel = Article::get();
        return view('ncip.index', compact ('ArticlesCarousel'));
        //return view('ncip.index');
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
        //$newsDetails = Article::findOrFail($id);

        //$records = Article::find($id)->records;
        #dd($records);
        //return view('ncip.article', compact('newsDetails', 'records'));
        return view('ncip.article');
    }
	
}
