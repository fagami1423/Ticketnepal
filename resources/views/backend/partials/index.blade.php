@extends('backend.layouts.app')
@section('content')
        <div class="container body">
          <div class="main_container">
            @include('backend.partials.sidebar')
            @include('backend.partials.nav')
           
    
            <!-- page content -->
            <div class="right_col" role="main">
              <!-- top tiles -->
              <div class="row tile_count"></div>
              <!-- /top tiles -->
    
              <div class="row"></div>
              <br />
    
              <div class="row"></div>
    
    
              <div class="row"></div>
            </div>
            <!-- /page content -->
    
            @include('backend.partials.footer')
          </div>
        </div>
    
       
        
     
@endsection