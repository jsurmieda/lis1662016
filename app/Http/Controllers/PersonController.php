<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Person;
use App\Casedescription;
use App\Tribe;
use App\Casetype;
use App\Relationship;
use App\Originoffice;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $personLists = Person::paginate(25);
        return view('persons.index', compact('personLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tribes = Tribe::lists('tribeName', 'id');
        $casetypes = Casetype::lists('casetypeName', 'id');
        $relations = Relationship::lists('rel_type', 'id');
        $offices = Originoffice::lists('csc_name', 'id');
        return view('persons.create', compact('tribes', 'casetypes', 'relations', 'offices'));
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
        $tribes = Person::where('persons.id','=', $id)
            ->join('tribes','persons.tribe_id','=','tribes.id')
            ->select('persons.*','tribes.tribeName as tribeName')
            ->get();
        $persons = Person::findorFail($id);
        $caserecords=Casedescription::where('person_id','=', $id)
            ->join('casereports','casedescriptions.casereport_id','=','casereports.id')
            ->join('casetypes','casereports.casetype_id','=','casetypes.id')
            ->join('relationships','casedescriptions.relationship_id','=','relationships.id')
            ->join('originoffices','casereports.originoffice_id','=','originoffices.id')
            ->select('casedescriptions.*','relationships.rel_type as rel_type','casedescriptions.casereport_id as casereport_id' ,'originoffices.csc_name as csc_name', 'casereports.incidentDate as incidentDate', 'casetypes.casetypeName as casetypeName')
            ->get();
        //dd($caserecords);
        return view('persons.show',compact('persons', 'tribes', 'caserecords'));
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
}
