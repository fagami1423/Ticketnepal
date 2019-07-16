@extends('backend.layouts.app')
@section('content')
        <div class="container body">
          <div class="main_container">
            @include('backend.partials.sidebar')
            @include('backend.partials.nav')
           
            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                <div class="count">{{count($user)}}</div>
                    
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Admins</span>
                    <div class="count">{{count($admin)}}</div>
                        
                 </div>

                 <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-list"></i> Total tickets sold</span>
                    <div class="count">{{count($bookings)}}
                        
                    </div>
                        
                 </div>

                 <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total amount earned</span>
                    <div class="count"> Rs {{$bookings->sum('total_price')}} 
                        
                    </div>
                        
                 </div>
               
               
               
               
                </div>
            </div>
          </div>
        </div>
@endsection