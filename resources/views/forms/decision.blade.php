<!DOCTYPE html>
<html lang="en">
    <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agrocity</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
      <script type = "text/javascript" 
      src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/decision.css') }}">
      <script src="{{ asset('assets/js/app.js') }}"></script>
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/josh.css') }}"> -->
        <script type = "text/javascript" language="javascript">
//   $(document).ready(function() {
//   $('.jumbotron').hide().fadeIn(5000, function() {
//   });
//   });

 // $(document).ready(function(){
//     $('.jumbotron').slideDown(5000);
// });
// $(window).bind("load", function() {
//    $('.jumbotron').animate({ top: '200'}, 'slow');
// });


 </script>
  <script src="{{ asset('js/toastr.js') }}"></script>
<script>
@if(Session::has('success'))
  toastr.success("{{Session::get('success')}}");
@elseif(Session::has('info'))
  toastr.info("{{Session::get('info')}}");
@elseif(Session::has('errors'))
  toastr.info("{{Session::get('error')}}");
@endif
</script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 b" >
                 <div class="jumbotron">                    
                    <div class="row">
                       @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                        <div class="col-sm-12">
                            <img class=" img-responsive text-center" src="{{ asset('assets/images/agrocity.jpg') }}" alt="logo">
                        </div>
                    </div>
                    <!-- <br></br> -->
                            <div class="row r">
                                <div class="col-md-2"></div>
                                <div class="col-md-4 btnsize ">
                                  <form method="post">
                                        @csrf
                                        <input type="hidden" name="user_type" value="farmer">
                                    <button class="btn btn-primary" href="#" role="button">Continue as Farmer</button>
                                  </form>
                                </div>
                                <div class="extra"></div>
                                    <div class="col-md-4 btnsize "  >
                                      <form method="post">
                                        @csrf
                                        <input type="hidden" name="user_type" value="investor">
                                        <button class="btn btn-primary" href="#" role="button">Continue as Investor</button>
                                      </form>
                                    </div>
                                   
                            </div>
                </div>
            </div>
        </div>
    </div>
           
                
       
 
   
</body>
</html>