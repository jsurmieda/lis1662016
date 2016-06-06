@extends('layouts.adminframe')

@section('content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Case Report Update</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Case Update</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
                    <p>Please fill up the form as complete as possible.</p>
                      <!-- <form class="form-horizontal form-label-left"> -->
                      {!! Form::open(['url' => 'reports/'. $casereport->id .'/savePersons','class'=>'form-horizontal']) !!}
                        <div class="panel panel-default">
                          
                          <div class="panel panel-heading">
                            <h2>Persons Involved</h2>
                          </div>
                          @include('reports.personForm')
                            <div class="form-group">
      						{!! Form::hidden('casereport_id', $casereport->id,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
      						{!! Form::hidden('cadt_id', $casereport->cadtcondition_id,['class' => 'form-control']) !!}
                            </div>
                            
                            <!--/Forms-->
                            <div class="col-sm-6 col-sm-offset-3">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
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