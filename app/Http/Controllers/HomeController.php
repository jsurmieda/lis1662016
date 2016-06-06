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
        $ArticlesCarousel = Article::where('mandatory','=','1')->orderBy('created_at','desc')->get();
        //dd($ArticlesCarousel);
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
        $NewsList = Article::where('mandatory','=','1')->orderBy('created_at','desc')->get();
        return view('ncip.news', compact('NewsList'));
    }
	
	public function article($id)
    {
        $newsDetails = Article::findOrFail($id);

        $records = Article::find($id)->records;
        #dd($records);
        return view('ncip.article', compact('newsDetails', 'records'));
        //return view('ncip.article');
    }
	
}
