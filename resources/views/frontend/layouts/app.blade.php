<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/logo.png" type="image/png" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/frontend/style.css">
    <link rel="stylesheet" href="/frontend/checkout.css">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
    
    @yield('extra-css')     
</head>
<body>
           
    <div id="app">
            
             @include('frontend.partials.header')
        @yield('content')
    </div>
    @include('frontend.partials.footer')
    @yield('extra-js')

    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/confer.bundle.js"></script>
    <script src="/frontend/js/default-assets/active.js"></script>
</body>
</html>
