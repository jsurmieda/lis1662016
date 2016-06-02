<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Casereport;
use App\Casetype;
use App\Casedescription;
use App\Person;
use App\Tribe;
use App\Relationship;
use App\Originoffice;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $casereportLists = Casereport::paginate(10);
        return view('reports.index', compact('casereportLists'));//display the index pager and append
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tribes = Tribe::lists('tribeName', 'id');
        $casetypes = Casetype::lists('casetypeName', 'id');
        $relations = Relationship::lists('rel_type', 'id');
        $offices = Originoffice::lists('csc_name', 'id');
        return view('reports.create', compact('tribes', 'casetypes', 'relations', 'offices'));
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
        dd($request);
        /*$savePerson = Person::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'suffix' => $request->suffix,
            'address' => $request->address,
            'tribe_id' => $request->tribe,
        ]);


        $saveReport = Casereport::create([
            '' => $request->name,
            'price' => $request->price,
        ]);

        $saveProduct = Product::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);*/
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

        $casereports = Casereport::findorFail($id);
        //$casedescriptions=Casereport::find($id)->casedescription;
        //$casedescriptions=Casedescription::where('casereport_id','=', $id)->get();
        $casedescriptions=Casedescription::where('casereport_id','=', $id)->join('persons','casedescriptions.person_id','=','persons.id')->select('casedescriptions.*','persons.lastname as lastname','persons.firstname as firstname')->get();
        //$persons=Casedescription::find($id)->person;
        //dd($persons);
        return view('reports.show',compact('casereports','casedescriptions'));
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

    /**
     * Displays case reports
     */
    public function caseReports($id)
    {
        //
        $caseReports=casereports::find($id)->caseReports;
        return view('reports.show',compact('caseReports'));
    }
}
