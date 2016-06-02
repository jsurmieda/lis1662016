@extends('layouts.adminframe')

@section('content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Case Reports</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Case Report</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
                    <p>Please fill up the form as complete as possible.</p>
                      <!-- <form class="form-horizontal form-label-left"> -->
                      {!! Form::open(['url' => 'reports','class'=>'form-horizontal']) !!}
                        <div class="panel panel-default">
                          <div class="panel panel-heading">
                            <h2>Case Description</h2>
                          </div>
                          
                          <div class="panel panel-body">  
                            <div id="step-1">
                              @include('reports.reportForm')
                            </div>
                          </div>
                          <div class="panel panel-heading">
                            <h2>Persons Involved</h2>
                          </div>
                          <div class="panel panel-body">
                            <div id="step-2">
                              @include('reports.personForm')
                              <div class="col-md-8 col-sm-8 col-xs-8"></div>
                              <div class="col-md-4 col-sm-4 col-xs-4 pull-right">
                                <a href="#" class="btn btn-primary"><i class="fa fa-plus"> Add Person</i></a> 
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-heading">
                            <h2>Submit Case</h2>
                          </div>
                          <div class="panel panel-body">
                            <div class="form-group">
                              <div class="col-sm-5 col-sm-offset-3">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
                              </div>
                            </div>
                          </div>
                        </div>
                      {!! Form::close() !!}
                      <!-- </form> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /page content -->

@endsection