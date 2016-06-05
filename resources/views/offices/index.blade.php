@extends('layouts.adminframe')

@section('content')

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Offices</h3>
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
                    <h2>NCIP Offices Masterlist</h2>
                    <div class="clearfix"></div>
                  </div>
                  @foreach($regionofficeLists as $regionofficeList)
                  <!-- Regional Office -->
                  <div class="x_title">
                    <strong>{!! $regionofficeList->region_name!!}</strong>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table id="region_info" class="table table-striped table-bordered">
                      <thead>
                        <tr class="success">
                          <th>Address</th>
                          <th>Mandate</th>
                          <th>Contact Information</th>
                          <th>Website</th>
                        </tr>
                        
                      </thead>
                      <tbody>
                        <tr>
                          <td>{!! $regionofficeList->address!!}</td>
                          <td>{!! $regionofficeList->mandate!!}</td>
                          <td>(02)889-2222</td>
                          <td><a href="{!! $regionofficeList->website!!}">{!! $regionofficeList->website!!}</a></td>
                        </tr>
                      </tbody>
                    </table>
                  <em>Community Service Centers under {!! $regionofficeList->region_name!!}</em>
                  <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="danger">
                          <th>CSC ID</th>
                          <th>CSC Name</th>
                          <th>Address</th>
                          <th>Contact Information</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($officeLists as $officeList)
                          @if($officeList->regionalOffice_id == $regionofficeList->id)
                          <tr>
                            <td>{!! $officeList->id!!}</td>
                            <td>{!! $officeList->csc_name!!}</td>
                            <td>{!! $officeList->address!!}</td>
                            <td>{!! $officeList->contact_number!!}</td>
                          </tr>
                          @else
                          @endif
                      </tbody>
                      @endforeach
                    </table>
                  <hr>
                  </div>
                  <!-- /Regional Office -->
                  @endforeach
                </div>
              </div>
            </div>
            <div class="text-center">
              {!! $regionofficeLists->links();!!}
            </div>
    	</div>

@endsection