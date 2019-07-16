@extends('frontend.layouts.app')
@section('content')
    <section class="bus--us-area section-padding-100-0">
            <div class="container">  
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route('buses.show')}}" method="GET">
                            {{ csrf_field() }}
                            <label for="">from</label>
                            <input type="text" name="from">
                            <label for="">to</label>
                            <input type="text" name="to">
                            <label for="">date</label>
                            <input type="date" name="departure_date">
                            <label for="">Shift</label>
                            <input type="radio" name="shift" value="day">day
                            <input type="radio" name="shift" value="night">night
                            <input type="radio" name="shift" value="both" checked>both 
                            <input type="submit" value="Search" class="btn btn-primary">
                        </form>
                     </div>       
                </div>   
                @include('alerts')      
                <div class="row">
                    <div class="table table-responsive">
                        <table class="table table-bordered dataTable" id="table">
                            <thead>
                                <tr>
                                    
                                    <th>Operator</th>
                                    <th>Bus Type</th>
                                    <th>No of seats</th>
                                    <Th>Route</Th>
                                    <th>ticket price</th>
                                    <th>Features</th>
                                    <th>Book</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @if (isset($buses) && count($buses)>0)
                                    @foreach($buses as $bus)
                                    
                                        <tr>
                                            
                                           <td>{{$bus->name}}</td>
                                           <td>{{$bus->type}}</td>
                                           <td>{{$bus->no_of_seats}}</td>
                                           <td>{{$bus->boarding_point}}-{{$bus->destination}}</td>
                                           <td>{{$bus->ticket_price}}</td>
                                           <td>{!! $bus->features !!}</td>
                                           <td>
                                                
                                            <a href="#" class="btn btn-primary" data-toggle="collapse" role="button" aria-expanded="false" data-target="#seats-{{$bus->id}}" aria-controls="#seats-{{$bus->id}}">Book</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td colspan="7">
                                                    <div class="collapse out" id="seats-{{$bus->id}}">
                                                    <form action="{{route('passengers.create')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <section id="seat">
                                                                <?php 
                                                                    $count=0;
                                                                    for($i = 1; $i <= $bus->no_of_seats; $i++) {
                                                                    ?>
                                                                    <input id="seat-{{$i}}" class="seat-select" type="checkbox" value="{{$i}}" name="seat[]" />
                                                                    <label for="seat-{{$i}}" class="seat occupied">{{$i}}</label>
                                                                <?php }
                                                               
                                                                ?>
                                                            </section>
                                                    <input type="hidden" name="departure_date" value="{{ $departure_date }}">
                                                    <input type="hidden" name="bus_id" value="{{ $bus->id }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        
                                                    
                                                    <input type="submit" class="btn btn-default" value="Continue booking" onclick="return confirm('continue booking?')">
                                                </form>
                                                    </div>
                                                </td>
        
                                        </tr>
                                       
                                     @endforeach
                                              
                                @else
                                    <tr> <td colspan="7"> <p class="text-center"> No data </p></td></tr>
                                @endif
                             </tbody>
                        </table>
                    </div>
                </div>                 
            </div>
    </section>         
@endsection
