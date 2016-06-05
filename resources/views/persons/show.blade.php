@extends('layouts.adminframe')

@section('content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Database</h3>
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
                    <h2>{!! $persons->lastname!!}, {!! $persons->firstname!!} {!! $persons->middlename!!} {!! $persons->suffix!!}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th colspan=2>Person Information</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>ID</td>
                          <td><input class="form-control" id="id" type="text" placeholder="{!! $persons->id!!}" readonly></td>
                        </tr>
                        <tr>
                          <td>Name</td>
                          <td>
                          <form class="form-inline">
                          <div class="form-group">
                          <input class="form-control" id="lastname" type="text" placeholder="{!! $persons->lastname!!}" readonly>
                          <input class="form-control" id="firstname" type="text" placeholder="{!! $persons->firstname!!}" readonly>
                          <input class="form-control" id=middlename" type="text" placeholder="{!! $persons->middlename!!}" readonly>
                          <input class="form-control" id="suffix" type="text" placeholder="{!! $persons->suffix!!}" readonly>
                          </td></div></form>
                        </tr>
                        <tr>
                          <td>Address</td>
                          <td><input class="form-control" id="address" type="text" placeholder="{!! $persons->address!!}" readonly></td>
                        </tr>
                        <tr>
                          <td>Tribe</td>
                          <td>@foreach($tribes as $tribe)
                          <input class="form-control" id="tribeName" type="text" placeholder="{!! $tribe->tribeName!!}" readonly>@endforeach</td>
                        </tr>
                      </tbody>
                      <a href="{{ url('persons') }}"><i class="fa fa-backward"></i> Return to Indigents Masterlist</a>
                    </table>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th colspan=2>Case Records</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>
                          <table id="caserecords" class="table table-striped table-bordered">
                            <tr>
                              <th>Case ID</th>
                              <th>Case Type</th>
                              <th>Incident Date</th>
                              <th>Relationship to the Case</th>
                              <th>Record Origin</th>
                            </tr>
                            @foreach($caserecords as $caserecord)
                            <tr>
                              <td>
                                {!! $caserecord->casereport_id!!}
                              </td>
                              <td>
                                {!! $caserecord->casetypeName!!}
                              </td>
                              <td>
                                {!! $caserecord->incidentDate!!}
                              </td>
                              <td>
                                {!! $caserecord->rel_type!!}
                              </td>
                              <td>
                                {!! $caserecord->csc_name!!}
                              </td>
                            </tr>
                            @endforeach                             
                          </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    	</div>

@endsection