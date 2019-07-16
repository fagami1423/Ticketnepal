@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger text-center">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif

@if(session('error_message'))
    <div class="alert alert-danger text-center">
        {{session('error_message')}}
    </div>
@endif