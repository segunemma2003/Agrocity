<!DOCTYPE html>
<html lang="en">
    <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Agrocity</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styless.css') }}">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/amara.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/josh.css') }}">
         <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
</head>
<body>
  
    @include('layout.nav')
    @yield('content')
    @include('layout.footer')
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('js/toastr.js') }}"></script>
<script>
@if(Session::has('success'))
  toastr.success("{{Session::get('success')}}");
@elseif(Session::has('info'))
  toastr.info("{{Session::get('info')}}");
@elseif(Session::has('error'))
  toastr.info("{{Session::get('error')}}");
@endif
</script>
</body>
</html>