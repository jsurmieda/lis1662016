@extends('layouts.adminframe')

@section('content')
<!-- NOTE: Update yung database table such that to accommodate yung mga uploaded files -->
    <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Post New Article</h3>
              </div>
              
              <!-- THIS IS A SEARCH BAR -->
              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>-->
            </div>
            <div class="clearfix"></div>
            <!-- FILE UPLOADER PERO IDK HOW THIS WORKS -->
            {!! Form::open([
                    'url'=>'articles',
                    'class'=>'form-horizontal',
                  ]) 
              !!}
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Post New Article</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a></li>
                          <li><a href="#">Settings 2</a></li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="form-group">

                  {!! Form::label('articletitle', 'Article Title *', 
                      ['class'=>'control-label col-md-3 col-sm-3 col-xs-12',
                      ]) 
                  !!}
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {!! Form::text('articletitle', NULL, 
                        ['class'=>'form-control col-md-7 col-xs-12',
                        'required'=>'required',
                        ]) 
                      !!}
                    </div>
                  </div>
                  <div class="form-group">
                   {!! Form::label('articletype', 'Type of article *', 
                      ['class'=>'control-label col-md-3 col-sm-3 col-xs-12',
                      ]) 
                    !!}
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      {!! Form::select('articletype', [
                          '1' => 'IP-related News', 
                          '2' => 'Announcement',
                          '3' => 'Classified',
                          '4' => 'Programs and Activities' ], '1', [
                        'class'=>'form-control',
                        'required'=>'required',
                      ]);
                    !!}
                    </div>
                  </div>
                  <div class="form-group">

                  {!! Form::label('mandatory', 'Publish? *', 
                      ['class'=>'control-label col-md-3 col-sm-3 col-xs-12',
                      ]) 
                  !!}
                    
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    {!! Form::select('mandatory', ['0' => 'No', '1' => 'Yes'], '0', [
                        'class'=>'form-control',
                        'required'=>'required',
                      ]);
                    !!}
                    </div>
                  </div>

                  <div class="x_content">
                    <p>Note that selecting "Yes" means that the article is FINAL and ready to be accessed by mainstream media.</p>
                  </div>
                  
                  <div class="form-group">
                    {!! Form::label('articlebody', 'Article Text *', ['class'=>'col-md-3 col-sm-2 col-xs-12 control-label']) !!}
                    <div class="col-sm-5">
                      {!! Form::textarea('articlebody', NULL, [
                        'class'=>'form-control col-md-7 col-xs-12',
                        'placeholder'=>'Write the article here.',
                        'required'=>'required'])
                      !!}
                    </div>
                  </div>
                  {!! Form::hidden('user_id', Auth::user()->id ) !!}

                <div class="x_content">
                    <p>As you create the article, please make sure that the identities of people involved are kept confidential. The usage of aliases is highly recommended.</p>
<!--
                    <form action="form_upload.html" class="dropzone">
                      
                    </form> this must be sent to some php file na naguupload. 
                    
                    <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          {!! Form::submit('Post Article',[
              'class'=>'btn btn-primary col-sm-12'
              ])
          !!}
{!! Form::close(); !!}
@endsection