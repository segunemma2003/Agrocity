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
     <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/amara.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/josh.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styless.css') }}">
    
</head>
<body style="font-size:13px !important;">
    @include('layouts.admin.navbar')
    @include('layouts.admin.nav2')
    <!-- LOGO HEADER END-->
    <!-- MENU SECTION END-->
    @yield('content')
    <!-- CONTENT-WRAPPER SECTION END-->
@include('layout.footer')
    <!-- FOOTER SECTION END-->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="{{ asset('assets/js/jquery-1.11.1.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/noframework.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/dreyanim.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/contact.js') }}"></script>
 <!-- <script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.0.min.js') }}"></script> -->
     <script src="{{ asset('js/toastr.js') }}"></script>
<script>
@if(Session::has('success'))
  toastr.success("{{Session::get('success')}}");
@elseif(Session::has('info'))
  toastr.info("{{Session::get('info')}}");
@elseif(Session::has('errors'))
  toastr.error("{{Session::get('errors')}}");
@endif
</script>
</body>
</html>
