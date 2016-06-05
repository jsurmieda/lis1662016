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
                    <p class="text-muted font-13 m-b-30">
                      @if (count($casereportLists) === 1)
                          {!! count($casereportLists)!!} record found
                      @else (count($casereportLists) > 1)
                          {!! count($casereportLists)!!} records found
                      @endif
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="success">
                          <th>Case ID</th>
                          <th>Date Reported</th>
                          <th>Incident Location</th>
                          <th>Controls</th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach($casereportLists as $casereport)
                        <tr>
                          <td>{!! $casereport->id!!}</td>
                          <td>{!! $casereport->receiptDate!!}</td>
                          <td>{!! $casereport->incidentLocation!!}</td>
                          <td>
                          	<a href="{{ url('reports/'.$casereport->id) }}"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('reports/'.$casereport->id.'/edit') }}"><i class="fa fa-pencil"></i></a>
                           {{ Form::open(['method' => 'DELETE', 'action' => ['ReportController@destroy', $casereport->id]]) }} 
                           {{ Form::submit('Delete', ['class' => 'fa fa-trash']) }} 
                           {{ Form::close() }}
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    	</div>

@endsection