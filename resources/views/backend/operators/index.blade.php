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
                              <input type="text" class="form-control" placeholder="Search for...">
                              <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      @include('alerts');
          
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                    <h2>Add Operator </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                    <br />
                                {!! Form::open(['action'=>['\App\Http\Controllers\Backend\OperatorController@store'],'method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'form-horizontal form-label-left']) !!}
                                    <div class="form-group">
                                        {{Form::label('name', 'Name',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{Form::text('name', '',['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('contact', 'Contact',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{Form::text('contact', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('address', 'Address',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::text('address', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                                        </div>
                                    </div>
                                    
                                {!! Form::close() !!}

                                </div>
                                
                              </div>
                            </div> 
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2>Operator <small>Operator Details</small></h2>
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
                                          <th>Address</th>
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
                                                    <td>{{ $result->address }}</td>
                                                    <td>{{ $result->contact }}</td>
                                                    <td>
                                                        <a href="{{route('operator.edit',['id'=>$result->id])}}"
                                                           class="btn btn-primary">Edit</a>
                                                        <a href="{{route('operator.destroy',['id'=>$result->id])}}" class="btn btn-danger" onclick="return confirm('Delete this record?')">Delete</a>
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