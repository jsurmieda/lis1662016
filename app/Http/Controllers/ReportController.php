<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Casereport;
use App\Casetype;
use App\Casenote;
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
        $person = Person::where('lastname','=',$request->lastname)->where('firstname','=',$request->firstname)->where('middlename','=',$request->middlename)->select('persons.*')->get();
        //dd($person->count());
        if($person->isEmpty()):
            //dd('walang laman!');
            $request->user()->persons()->create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'suffix' => $request->suffix,
            'address' => $request->address,
            'tribe_id' => $request->tribe_id,
            ]);
            $person_id = Person::orderBy('created_at', 'desc')->first()->id;
        else:
            $person_id = Person::where('lastname','=',$request->lastname)->where('firstname','=',$request->firstname)->where('middlename','=',$request->middlename)->first()->id;            
        endif;

        $cadt_id = Tribe::where('id','=',$request->tribe_id)->first()->id;

        $request->user()->casereports()->create([
            'receiptDate' => $request->receiptDate,
            'casetype_id' => $request->casetype_id,
            'infoSource' => $request->infoSource,
            'incidentLocation' => $request->incidentLocation,
            'cadtcondition_id' => $cadt_id,
            'incidentDate' => $request->incidentDate,
            'originoffice_id' => $request->originoffice_id,
        ]);

        $casereport_id = Casereport::orderBy('created_at', 'desc')->first()->id;
        //dd($person_id, $casereport_id);
       
        $request->user()->casedescriptions()->create([
            'person_id' => $person_id,
            'relationship_id' => $request->rel_id,
            'casereport_id' => $casereport_id,
        ]);

        $casereportLists = Casereport::paginate(10);
        return view('reports.index', compact('casereportLists'));
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

        //$casereports = Casereport::findorFail($id)
        $casetypes = Casereport::where('casereports.id','=', $id)
            ->join('casetypes','casereports.casetype_id','=','casetypes.id')
            ->select('casereports.*','casetypes.casetypeName as casetypeName')
            ->get();
        $casereports = Casereport::findorFail($id);
        //$casetypes=Casetype::where($id->casetype_id,'=','casetypes.id')->get();
        //dd($casetypes);
        $casedescriptions=Casedescription::where('casereport_id','=', $id)
            ->join('persons','casedescriptions.person_id','=','persons.id')
            ->join('relationships','casedescriptions.relationship_id','=','relationships.id')
            ->select('casedescriptions.*','persons.lastname as lastname','persons.firstname as firstname' ,'persons.middlename as middlename','relationships.rel_type as rel_type')
            ->get();
        $casenotes=Casenote::where('casereport_id','=', $id)
            ->join('notequalifiers','casenotes.notequalifier_id','=','notequalifiers.id')
            ->select('casenotes.*','casenotes.notes as notes', 'notequalifiers.noteType as noteType')
            ->get();
        //dd($casenotes);
        return view('reports.show',compact('casereports','casedescriptions','casetypes','casenotes'));
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
        $deleteCasereport = Casereport::findorfail($id);
        $deleteCasereport ->delete();

        if($deleteCasereport):
            return redirect('reports')
            ->with('status', 'Entry deleted!');
        else:
            return redirect('reports')
            ->with('status', 'Error!!');
        endif;
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
