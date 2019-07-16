@extends('frontend.layouts.app')

@section('title', 'message')

@section('content')
<section class="bus--us-area section-padding-100-0"> 
    <div class="container">
        <div class="row">
                <div class="alert alert-success text-center" role="alert">
                        {{$message}}
            </div>
            <div class="col-12 center-block">
                <div>
                    <a href="{{ route('invoice.show') }}" class="btn btn-success">Show Ticket</a>  <a href="{{ url('/') }}" class="btn btn-primary">Home Page</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
