<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agrocity | Farmers Home</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
</head>
<body style="font-size:20px !important;">
    @include('layouts.dashboard.navbar')
    @include('layouts.dashboard.nav2')
    <!-- LOGO HEADER END-->
    <!-- MENU SECTION END-->
    @yield('content')
    <!-- CONTENT-WRAPPER SECTION END-->
@include('layouts.dashboard.footer')
    <!-- FOOTER SECTION END-->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/jquery-1.11.1.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>
