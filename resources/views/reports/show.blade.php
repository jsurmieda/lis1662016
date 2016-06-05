@extends('layouts.adminframe')

@section('content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Case Reports</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search incident...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Case Reports Masterlist</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="info">
                          <th colspan=2>Case Information</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>Case ID</td>
                          <td><input class="form-control" id="id" type="text" placeholder="{!! $casereports->id!!}" readonly></td>
                        </tr>
                        <tr>
                          <td>Date Encoded</td>
                          <td><input class="form-control" id="receiptDate" type="text" placeholder="{!! date('F d, Y', strtotime($casereports->receiptDate))!!}" readonly></td>
                        </tr>
                        <tr>
                          <td>Incident Location</td>
                          <td><input class="form-control" id="incidentLocation" type="text" placeholder="{!! $casereports->incidentLocation!!}" readonly></td>
                        </tr>
                        <tr>
                          <td>Case Type</td>
                          <td>@foreach($casetypes as $casetype)
                          <input class="form-control" id="casetype" type="text" placeholder="{!! $casetype->casetypeName!!}" readonly>@endforeach</td>
                        </tr>
                        <tr>
                          <td>Persons Involved</td>
                          <td>
                          <table id="casedescription" class="table table-striped table-bordered">
                            <tr>
                              <th>Name</th>
                              <th>Involvement to the Case</th>
                            </tr>
                            @foreach($casedescriptions as $casedescription)
                            <tr>
                              <td>
                                {!! $casedescription->lastname!!}, {!! $casedescription->firstname!!} {!! $casedescription->middlename!!} {!! $casedescription->suffix!!}
                              </td>
                              <td>
                                {!! $casedescription->rel_type!!}
                              </td>
                            </tr>
                            @endforeach                             
                            <a onclick="addPersonsInvolved()" }}"><i class="fa fa-plus"></i> Add Person Involved</a>
                          </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="danger">
                          <th colspan=2>Case Notes</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>
                          @foreach($casenotes as $casenote)
                            <div class="form-group">
                              <div class="input-group">
                                <div class="input-group-addon">{!! date('F d, Y', strtotime($casenote->date))!!}</div>
                                <input type="text" class="form-control" id="date" placeholder="{!! $casenote->notes!!}" readonly>
                                <div class="input-group-addon">{!! $casenote->noteType!!}</div>
                              </div>
                            </div>
                          @endforeach                        
                          </td>
                        </tr>
                      </tbody>
                      <a onclick="addCaseNotes()" }}"><i class="fa fa-plus"></i> Add New Case Notes</a>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    	</div>

@endsection