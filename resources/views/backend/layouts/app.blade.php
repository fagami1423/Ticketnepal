<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/images/logo.png" type="image/png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
    <title>{{ config('app.name', 'Laravel') }}</title>

     <link href="/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     <link href="/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
     <link href="/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
     <link href="/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
     <link href="/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
     <link href="/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <link href="/backend/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
        @yield('content')
  
    <script src="/backend/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/backend/vendors/fastclick/lib/fastclick.js"></script>
    <script src="/backend/vendors/nprogress/nprogress.js"></script>
    <script src="/backend/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="/backend/vendors/gauge.js/dist/gauge.min.js"></script>
    <script src="/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="/backend/vendors/iCheck/icheck.min.js"></script>
    <script src="/backend/vendors/skycons/skycons.js"></script>
    <script src="/backend/vendors/Flot/jquery.flot.js"></script>
    <script src="/backend/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/backend/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/backend/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/backend/vendors/Flot/jquery.flot.resize.js"></script>
    <script src="/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/backend/vendors/flot.curvedlines/curvedLines.js"></script>
    <script src="/backend/vendors/DateJS/build/date.js"></script>
    <script src="/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="/backend/vendors/moment/min/moment.min.js"></script>
    <script src="/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/backend/build/js/custom.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        if($("textarea").length > 0){
            CKEDITOR.replace( 'foo' );
        }
    </script>
</body>
</html>
