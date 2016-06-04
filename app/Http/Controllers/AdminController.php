<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casereport;
use App\Http\Requests;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $casereportcounts = Casereport::count();
        //dd($casereportcount);
        return view('admin.index', compact('casereportcounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function CADC()
    {
        //
        return view('forms.CADC');
    }
    public function CADT()
    {
        //
        return view('forms.CADT');
    }
    public function CALC()
    {
        //
        return view('forms.CALC');
    }
    public function CALT()
    {
        //
        return view('forms.CALT');
    }
    public function COC()
    {
        //
        return view('forms.COC');
    }
}
