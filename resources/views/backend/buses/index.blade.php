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
                          <h3>Bus</h3>
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
                                    <h2>Add Bus </h2>
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
                                {!! Form::open(['action'=>'\App\Http\Controllers\Backend\BusController@store','method' => 'POST', 'enctype' => 'multipart/form-data','class'=>'form-horizontal form-label-left']) !!}
                                    <div class="form-group">
                                        {{Form::label('operator', 'Operator',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select name='operator_id' class="form-control col-md-7 col-xs-12">
                                                @if($operators->count())
                                                    @foreach($operators as $operator)
                                                        <option value="{{$operator->id}}">{{$operator->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('boarding_point', 'Boarding Point',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{Form::text('boarding_point', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('destination', 'Destination',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::text('destination', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('bus_no', 'Bus Number',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::text('bus_no', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            {{Form::label('no_of_seats', 'No of Seats',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{Form::text('no_of_seats', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            {{Form::label('type', 'Type',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                {{Form::select('type', ['normal'=>'Normal','AC'=>'AC'], null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                                            </div>
                                        </div>

                                    <div class="form-group">
                                        {{Form::label('features', 'Features',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::textarea('features', '', ['id' => 'foo','class'=>'form-control col-md-7 col-xs-12'])}}
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('driver_name', 'Driver Name',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::text('driver_name', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('driver_contact', 'Driver contact',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::text('driver_contact', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('availability', 'Availablity',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::select('availability', ['Yes'=>'Yes','No'=>'No'],null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {{Form::label('shift', 'Shift',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{Form::select('shift', ['Day'=>'Day','Night'=>'Night'], null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            {{Form::label('ticket_price', 'Ticket Price',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            {{Form::number('ticket_price', '', ['class'=>'form-control col-md-7 col-xs-12'])}}
                                            </div>
                                        </div>
                                    <div class="form-group">
                                            {{Form::label('bus_image', 'Add Image',['class'=>"control-label col-md-3 col-sm-3 col-xs-12"])}}
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        
                                        {{Form::file('bus_image')}}
                                        </div>
                                        
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
                                    <h2>Bus <small>Bus Details</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                      </li>
                                      {{-- <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Settings 1</a>
                                          </li>
                                          <li><a href="#">Settings 2</a>
                                          </li>
                                        </ul>
                                      </li> --}}
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
                                          <th>Operator</th>
                                          <th>Bus no</th>
                                          <th>Route</th>
                                          <th>Type</th>
                                          <th>No of seats</th>
                                          <th>shift</th>
                                          <th>availability</th>
                                          <th>ticket price</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      @php
                                      $sn=1
                                  @endphp
                                  @if($results->count())
                                      @foreach($results as $result)
                                          <tr>
                                              <td>{{ $sn++ }}</td>
                                              <td>{{ $result->operator_id }}</td>
                                              <td>{{ $result->bus_no }}</td>
                                              <td>{{ $result->boarding_point }}-{{ $result->destination }}  </td>
                                              <td>{{ $result->type }}</td>
                                              <td>{{ $result->no_of_seats }}</td>

                                              <td>{{ $result->shift }}</td>
                                              <td>{{ $result->availability }}</td>
                                              <td>Rs {{ $result->ticket_price }}</td>
                                              <td>
                                                  <a href="{{route('bus.edit',['id'=>$result->id])}}"
                                                     class="btn btn-primary">Edit</a>
                                                  <a href="{{route('bus.destroy',['id'=>$result->id])}}" class="btn btn-danger">Delete</a>
                                              </td>
                          
                                          </tr>
                                      @endforeach
                                      @else
                                              <tr>
                                                  <td colspan="12">
                                                      <div class="alert alert-warning text-center">
                                                          NO DATA FOUND.
                                                      </div>
                                                  </td>
                                              </tr>
                                          @endif
                
                                      <tbody>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                        
                    </div>
                </div>
                    
            </div>
            <!-- /page content -->
    
            @include('backend.partials.footer')
          </div>
        </div>
    
       
        
     
@endsection