@extends('layout.master')
@section('content')
<!-- <div class="container">
<div class="emoji">
    <div class="jumbotron">
        <div class="text-center">
        <h1>Agrocity</h1>
        <p>This is the Official page for Agrocity. An independent Agricultural platform for farmers are in ire needs of arable farmlands for the cultivation of crops
        
</div>
        </div>
    </div>
</div> -->
<div class="jumbotron  bg-cover">
    <div class="overlay"></div>
    <div class="container">
      <h1 class="display-3 mb-1">AGROCITY</h1>
      <p class="lead"> <span>The No1 Farmer's choice</span></p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
  </div>
<!--josh-->
<div class="card-title">
	<h2>What We Do</h2>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <div>
      	<img src="{{asset('assets/images/farmlands.png')}}" class="card-img">
      </div>
      <h3>Access Farmlands</h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div>
      	<img src="{{ asset('assets/images/sponsor.png')}}" class="card-img">
      </div>
      <h3>Get sponsored</h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div>
      	<img src="{{asset('assets/images/investment.png')}}" class="card-img">
      </div>
      <h3>Earn On Investment</h3>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </div>
  </div>
</div>
<!--End of What we do container-->

<div>
	<div class="cta-btn">
		<button class="btn red" type="button"><span>Apply as farmers</span></button>
	</div>
	<div class="partners-section">
		<h2 class="card-title">Our partners</h2>

		<div class="ro">
		  <div class="colum">
		    <div class="car">
		    	<img src="{{ asset('assets/images/cowry.jpg') }}" class="partners-logo">
		    </div>
		  </div>

		  <div class="colum">
		    <div class="car">
		    	<img src="{{ asset('assets/images/ighub.jpg') }}" class="partners-logo">
		    </div>
		  </div>
		  
		  <div class="colum">
		    <div class="car">
		    	<img src="{{ asset('assets/images/abia.jpg') }}" class="partners-logo">
		    </div>
		  </div>
		  
		  <div class="colum">
		    <div class="car">
		    	<img src="{{ asset('assets/images/cowry.jpg') }}" class="partners-logo">
		    </div>
		  </div>
		</div>

	</div>
</div>


@endsection

    