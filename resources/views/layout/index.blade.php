<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('meta')

    <title>{{Config('app.name')}} @if(!empty($title)) | {{$title}} @endif</title>

    
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/lnr-icon.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/trumbowyg.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    

    
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    @stack('styles')

    @section('styles')
    @show
</head>

<body class="preload home1 mutlti-vendor">

    
    @section('header')
        @include('layout.common.header')
    @show

    @if(isset($title))
        @include('layout.common.breadcrumb',['title'=>$title])
    @endif

    @yield('content')

    @section('footer')
        @include('layout.common.footer')
    @show


    <script>
        var public_path = "{!! URL::to('/'); !!}/";
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
    
    <script src="{{asset('js/vendor/jquery/jquery-1.12.3.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery/popper.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery/uikit.min.js')}}"></script>
    <script src="{{asset('js/vendor/chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/vendor/grid.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.easing1.3.js')}}"></script>
    <script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('js/vendor/tether.min.js')}}"></script>
    <script src="{{asset('js/vendor/trumbowyg.min.js')}}"></script>
    <script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    

    @stack('scripts')

    @section('scripts')
    @show

</body>
</html>
