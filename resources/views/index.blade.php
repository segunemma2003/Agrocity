@extends('layout.master')
@section('content')
<div class="jumbotron  bg-cover">
    <div class="overlay"></div>
    <div class="container">
      <div class="row" style="padding-top: 100px;">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h1 class="jumboh">AGROCITY</h1>
          <p class="jumbop">Do you want to get a farm?</p>
          <p class="jumbop">Do you want to sponsor or invest in farm and make money?</p>
          <p class="jumbop">Do you want to get fund for your farming?</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <button class="jumbo-button btn " type="button"><span>Apply now</span></button>
        </div>
      </div>
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
	<!-- <div class="cta-btn">
		<button class="btn red" type="button"><span>Apply as farmers</span></button>
	</div> -->
</div>




@endsection

    