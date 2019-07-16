@extends('frontend.layouts.app')
@section('content')
    <section class="bus--us-area section-padding-100-0">
            <div class="container">  
                @include('alerts')
                <div class="row">
                        <div class="col-lg-8 center-block panel-heading">
                                <h3>Passengers Detail</h3>    
                            </div>   
                    <div class="col-lg-6 center-block">

                    <form class="form-horizontal responsive" action="{{route('booking.store')}}" method="POST">
                        {{ csrf_field() }}
                                <div class="form-group">
                                        <label class="control-label col-sm-4" for="name">Name:</label>
                                        <div class="col-sm-8">
                                          <input type="name" class="form-control" name="name" id="name" >
                                        </div>
                                      </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="email">Email:</label>
                                  <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" id="email" >
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-sm-4" for="contact">Contact:</label>
                                  <div class="col-sm-8"> 
                                    <input type="text" class="form-control" name="contact" id="contact">
                                  </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-sm-4" for="boarding_point">Boarding Point:</label>
                                        <div class="col-sm-8"> 
                                          <input type="text" class="form-control" name="boarding_point" id="boarding_point">
                                        </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-sm-4" for="boarding_point">Seats Selected: </label>
                                <div class="col-sm-8"> 
                                        {{ $seat_occupied }}
                                      </div>
                              </div> 
                                <div class="form-group">
                                        <label class="control-label col-sm-4" for="boarding_point">Total Price:</label>
                                        <div class="col-sm-8"> 
                                                {{$total_price}}
                                        </div>
                                </div>
                                <input type="hidden" name="departure_date" value="{{ $departure_date }}">
                                <input type="hidden" name="bus_id" value="{{ $bus_id }}">
                                <input type="hidden" name="total_price" value="{{ $total_price }}">
                                <input type="hidden" name="seat_occupied" value="{{ $seat_occupied }}">
                                <input type="hidden" name="no_of_seats" value="{{ $no_of_seats }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group"> 
                                  <div class="col-sm-offset-2 col-sm-10">
                                    <input type="submit" value="Continue Booking" class="btn btn-primary" onclick="return confirm('Are you sure?')">
                                  </div>
                                </div>
                          </form>
                    </div>
                </div>                 
            </div>
      </section>
  
            
@endsection
