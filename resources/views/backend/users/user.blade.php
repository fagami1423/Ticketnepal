@extends('backend.layouts.app')
@section('content')
        <div class="container body">
          <div class="main_container">
            @include('backend.partials.sidebar')
            @include('backend.partials.nav')
           
    
            <!-- page content -->
            <div class="right_col" role="main">
                    <div class="">
                      <div class="page-title">
                        <div class="title_left">
                          <h3>Operators</h3>
                        </div>
          
                        <div class="title_right">
                          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                              {{-- <input type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span> --}}
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      @include('alerts');
          
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2>Users <small>User Details</small></h2>
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
                                          <th>Sn</th>
                                          <th>Name</th>
                                          <th>email</th>
                                          <th>Contact</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                
                
                                      <tbody>
                                        @php
                                            $sn=1
                                        @endphp
                                        @if($results->count())
                                            @foreach($results as $result)
                                                <tr>
                                                    <td>{{ $sn++ }}</td>
                                                    <td>{{ $result->name }}</td>
                                                    <td>{{ $result->email }}</td>
                                                    <td>{{ $result->phone }}</td>
                                                    <td>
                                                        <a href="{{route('user.destroy',['id'=>$result->id])}}" class="btn btn-danger" onclick="return confirm('Delete this record?')">Delete</a>
                                                    </td>
                                
                                                </tr>
                                            @endforeach
                                            @else
                                                    <tr>
                                                        <td colspan="8">
                                                            <div class="alert alert-warning text-center">
                                                                NO DATA FOUND.
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                        
                        </div>
                    </div>
                       
                    
                  </div>
    
            @include('backend.partials.footer')
          </div>
        </div>
@endsection