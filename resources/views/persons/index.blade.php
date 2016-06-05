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
                    <h2>Indigents Masterlist</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  @if (session('status'))
                  <div class= 'alert alert-danger'>
                    {{session('status')}}
                  </div>
                  @endif
                    <p class="text-muted font-13 m-b-30">
                      Masterlist of registered Indigenous People in your office.
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="success">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Controls</th>
                        </tr>
                      </thead>

                      <tbody>
                      @foreach($personLists as $person)
                        <tr>
                          <td>{!! $person->id!!}</td>
                          <td>{!! $person->lastname!!}, {!! $person->firstname!!} {!! $person->middlename!!}</td>
                          <td>{!! $person->address!!}</td>
                          <td>
                          	<a href="{{ url('persons/'.$person->id) }}"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('reports/'.$person->id.'/edit') }}"><i class="fa fa-pencil"></i></a>
                           {{ Form::open(['method' => 'DELETE', 'action' => ['PersonController@destroy', $person->id]]) }} 
                           {{ Form::submit('Delete', ['class' => 'fa fa-btn fa-trash']) }} 
                           {{ Form::close() }}
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                    <a href="{{ url('persons/create') }}"><i class="fa fa-plus"></i> Register Indigent</a>
                  </div>
                </div>
              </div>
            </div>
    	</div>

@endsection