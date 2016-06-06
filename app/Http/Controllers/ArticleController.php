<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\User;
use App\Articletype;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ArticlesLists = Article::get();
        return view('articles.index', compact ('ArticlesLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saveArticle = Article::create($request->input());
        
        if($saveArticle):
            return redirect('articles')->with('status','Article Saved.');
        else:
            return back()->withInput();
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articleDetails = Article::findOrFail($id);

        $records = Article::find($id)->records;
        #dd($records);
        return view('articles.show', compact('articleDetails', 'records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleInfo = Article::findOrFail($id);
        
        return view('articles.edit', compact('articleInfo'));
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
        $articleUpdate = Article::findOrFail($id);
        $articleUpdate->update($request->input());
        
        return redirect()->action('ArticleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteArticle = Article::findOrFail($id);
        $deleteArticle->delete();
        
        if($deleteArticle):
            return redirect('articles')->with('status', 'Article has been deleted.');
        else:
            return redirect('articles')->with('status', 'Article was not deleted. Please try again.');
        endif;
    }
    public function articleRecords (Request $request, $id)
    {
        $saveArticleRecord = Article::findOrFail($id);
        $saveArticleRecord->records()->create($request->input());

        if($saveArticleRecord):
            return redirect()->action('ArticleController@show', ['id'=>$id])->with('status', 'Saved!');
        
        else:
            return redirect()->action('ArticleController@show', ['id'=>$id])->with('status', 'Record was NOT saved.');
        endif;
    }

}
