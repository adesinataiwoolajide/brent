<!doctype html>
<html class="fixed">
	<head>
        <title>Brent Stores Admin</title>

        <!-- vendor css -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.css' )}}" rel="stylesheet">
        <link href="{{ asset('lib/Ionicons/css/ionicons.css' )}}" rel="stylesheet">
        <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css' )}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/amanda.css' )}}">
    </head>
    <body class="">
        <div class="wrapper">
            @yield('content')
        </div>
        {{-- Footer --}}
        <script src="{{ asset('lib/jquery/jquery.js' )}}"></script>
        <script src="{{ asset('lib/popper.js/popper.js' )}}"></script>
        <script src="{{ asset('lib/bootstrap/bootstrap.js' )}}"></script>
        <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js' )}}"></script>
    
        <script src="../js/amanda.js"></script>
    
        <script src="{{ asset('js/amanda.js' )}}"></script>
        <script src="{{ asset('js/ResizeSensor.js' )}}"></script>
        <script src="{{ asset('js/dashboard.js' )}}"></script>
       
    </body>