@extends('layouts.adminframe')

@section('content')
		@if(session('status'))
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			</div>
		</div>
		@endif
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Articles</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search article...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div><!-- search bar -->
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Articles List</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <a href="http://localhost/lis1662016/public/articles.create"><i class="fa fa-pencil"></i>&nbsp;Post New Article</a>
                    </p>
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Article Title</th>
                          <th>Author</th>
                          <th>Date Created</th>
                          <th>Published</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach($ArticlesLists as $articles)
                      
                        <tr>
                          <td>{!! $articles->articletitle !!}</td>
                          <td>{!! $articles->user_id !!}</td>
                          <td>{!! date('M j Y g:i A', strtotime($articles->created_at)) !!}</td><!-- should be username -->
                          <td></td>
                          <td>{!! $articles->mandatory !!}</td>
                          <td> <!-- add help text sa mga ito on hover -->
                          	<h3><a href="{{ url('articles/')}}/{!! $articles->id !!}"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('articles/')}}/{!! $articles->id !!}/edit"><i class="fa fa-pencil"></i></a>
                            <!-- find out how delete link works -->
                            {{ Form::open([
                                'method'=>'delete',
                                'action' => ['ArticleController@destroy', $articles->id]
                                ]) }} 
                                {{ Form::submit('Delete') }}<!-- gawing image ang submit button -->
                            {{ Form::close() }}
                            <a href="{{ url('articles/')}}/{!! $articles->id !!}"><i class="fa fa-trash"></i></a></h3>
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                    <a href="http://localhost/lis1662016/public/articles.create"><i class="fa fa-pencil"></i>&nbsp;Post New Article</a>
                  </div>
                </div>
              </div>
            </div>
    	</div>

@endsection