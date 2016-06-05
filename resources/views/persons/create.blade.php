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
                      {!! Form::open(['url' => 'persons','class'=>'form-horizontal']) !!}
                        <div class="panel panel-default">
                          
                          <div class="panel panel-heading">
                            <h2>Indigent Registration</h2>
                          </div>
                          <div class="panel panel-body">
                            <!--Forms-->
                              <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">First Name<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('firstname',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="middlename">Middle Name <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('middlename',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastname">Last Name <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('lastname',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="suffix">Suffix <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('suffix',null,[ 'class'=>'form-control col-md-7 col-xs-12']) !!}
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="address">Address <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('address',null,['required'=>'required', 'class'=>'form-control col-md-7 col-xs-12']) !!}
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tribeName">Tribe <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::select('tribe_id', $tribes, null,['class' => 'form-control']) !!}
                              </div>
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