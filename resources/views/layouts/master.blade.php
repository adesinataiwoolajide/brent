<!doctype html>
<html class="fixed">
	<head>
        <title>Brent Stores Admin</title>

        <!-- vendor css -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css' )}}" rel="stylesheet">
        <link href="{{ asset('lib/Ionicons/css/ionicons.css' )}}" rel="stylesheet">
        <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css' )}}" rel="stylesheet">
        <link href="{{ asset('lib/jquery-toggles/toggles-full.css' )}}" rel="stylesheet">
        <link href="{{ asset('lib/rickshaw/rickshaw.min.css' )}}" rel="stylesheet">
       
        <!-- Amanda CSS -->
        <link rel="stylesheet" href="{{ asset('css/amanda.css' )}}">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('partials.header')
            @include('partials.side-bar')
            @yield('content')
        </div>
        {{-- Footer --}}
        <script src="{{ asset('lib/jquery/jquery.js' )}}"></script>
        <script src="{{ asset('lib/popper.js/popper.js' )}}"></script>
        <script src="{{ asset('lib/bootstrap/bootstrap.js' )}}"></script>
        <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js' )}}"></script>
        <script src="{{ asset('lib/jquery-toggles/toggles.min.js' )}}"></script>
        <script src="{{ asset('lib/d3/d3.js' )}}"></script>
        <script src="{{ asset('lib/rickshaw/rickshaw.min.js' )}}"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
        <script src="{{ asset('lib/gmaps/gmaps.js' )}}"></script>
        <script src="{{ asset('lib/Flot/jquery.flot.js' )}}"></script>
        <script src="{{ asset('lib/Flot/jquery.flot.pie.js' )}}"></script>
        <script src="{{ asset('lib/Flot/jquery.flot.resize.js' )}}"></script>
        <script src="{{ asset('lib/flot-spline/jquery.flot.spline.js' )}}"></script>
        <script src="{{ asset('js/amanda.js' )}}"></script>
        <script src="{{ asset('js/ResizeSensor.js' )}}"></script>
        <script src="{{ asset('js/dashboard.js' )}}"></script>
        <script src="{{ asset('js/widgets.js' )}}"></script>

        
    </body>