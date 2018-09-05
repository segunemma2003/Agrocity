<!DOCTYPE html>
<html lang="en">
    <head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />  
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <!-- <script src="jquery/jquery-3.2.1.js"></script> -->
        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
        <script src="{{asset('assets/js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('assets/js/lga.js') }}"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
       <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/form.css') }}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/josh.css') }}">
       <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
        </head>
        <body>
          <!--   <script>
                $(document).ready(function(){
                    alert("hi");
                });
                </script>
             -->
            
                <!--multistep form-->
                <!-- <div class="img-d">
                  <img src="{{ asset('assets/images/agrocity.jpg')}}" >
                </div>
           -->
           <div style="margin:20 auto;">
                              @foreach($errors->all() as $error)
            <p  class="text-danger">{{$error}}</p>
            @endforeach
            </div>
                <form id="msform" name="msform" novalidate method="post" action="{{ route('farmers.log') }}" enctype="multipart/form-data">
                    @csrf
                    <!--progress bar-->
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Social Profiles</li>
                        <li>Account Details</li>
                        <li>Details of Referee</li>
                        <li>Uploads</li>
                                
                    </ul>
                    <!--fieldsets-->
                    <!-- personal details -->
                    
                    <fieldset>

                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">All fields are required</h3>
    
                    <input type="text" name="fname" id="fname" value="{{$user->name}}" required/> 
                    <!-- <input type="text" name="mname" id="mname" placeholder="Middle Name" />
                    <input type="text" name="lname" placeholder="Last Name" required/> -->
                    <input type="text" name="phone" placeholder="Phone" required/>
                    <div class="row">
                        <div class="co-md-4">
                                <label class="control-label in">Gender</label>
                        </div>
                        <div class="col-md-8">
                                <label class="">Male</label>
                                <input class="radio" type="radio" name="gender" value="male" checked />
                                
                                <label class=""> Female</label>
                                <input type="radio" name="gender" value="female" class="radio" />
                                
                        </div>
                    </div>
                    
                   
                    <div class="form-group" style="display:flex;">
                        <label class="control-label">State of Origin</label>
                   <select name="state" id="state" class="form-control">
                          <option value="" selected="selected" >- Select -</option>
                          <option value='Abia'>Abia</option>
                          <option value='Adamawa'>Adamawa</option>
                          <option value='AkwaIbom'>AkwaIbom</option>
                          <option value='Anambra'>Anambra</option>
                          <option value='Bauchi'>Bauchi</option>
                          <option value='Bayelsa'>Bayelsa</option>
                          <option value='Benue'>Benue</option>
                          <option value='Borno'>Borno</option>
                          <option value='Cross River'>Cross River</option>
                          <option value='Delta'>Delta</option>
                          <option value='Ebonyi'>Ebonyi</option>
                          <option value='Edo'>Edo</option>
                          <option value='Ekiti'>Ekiti</option>
                          <option value='Enugu'>Enugu</option>
                          <option value='FCT'>FCT</option>
                          <option value='Gombe'>Gombe</option>
                          <option value='Imo'>Imo</option>
                          <option value='Jigawa'>Jigawa</option>
                          <option value='Kaduna'>Kaduna</option>
                          <option value='Kano'>Kano</option>
                          <option value='Katsina'>Katsina</option>
                          <option value='Kebbi'>Kebbi</option>
                          <option value='Kogi'>Kogi</option>
                          <option value='Kwara'>Kwara</option>
                          <option value='Lagos'>Lagos</option>
                          <option value='Nasarawa'>Nasarawa</option>
                          <option value='Niger'>Niger</option>
                          <option value='Ogun'>Ogun</option>
                          <option value='Ondo'>Ondo</option>
                          <option value='Osun'>Osun</option>
                          <option value='Oyo'>Oyo</option>
                          <option value='Plateau'>Plateau</option>
                          <option value='Rivers'>Rivers</option>
                          <option value='Sokoto'>Sokoto</option>
                          <option value='Taraba'>Taraba</option>
                          <option value='Yobe'>Yobe</option>
                          <option value='Zamfara'>Zamafara</option>
                        </select>
                </div>
                  
                <div class="form-group" style="display:flex;">
                          <label class="control-label">LGA of Origin</label>
                          <select name="lga" id="lga" class="form-control" required>
                          </select>
                </div>
 
                       
                       
                    <input type="text" name="town" placeholder="Town" required/>
                    <small id="help" class="form-text text-muted">Please ensure the informations provided are correct</small>
                    <!-- <input type="text" name="email" placeholder="email"/>
                    <input type="password" name="pass" placeholder="password"/>
                    <input type="password" name="cpass" placeholder="confirm password"/> -->
                    <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <!-- Business Profiles -->
                    <fieldset>
                        <h2 class="fs-title">Business Profiles</h2>
                        <small id="help" class="form-text text-muted">All fields are required</small>
                        <br></br>
                        <input  class="required" type="text" name="support" placeholder="Supporting Organization(If any)" value="none" required/>
                        <input type="text" name="group" placeholder="Farmers Group/COO" required/>
                        <input type="text" name="land" placeholder="Land Size" required/>
                        <input type="text" name="ward" placeholder="Ward/Farmsite Location" required/>
                        <input type="text" name="crop" placeholder="Crop Produced" required/>
                      <!--   <input type="text" name="geolocation" placeholder="Geolocation" required/> -->
                        <small id="help" class="form-text text-muted">Please ensure the informations provided are correct</small>
                        <input type="button" name="previous" class="previous action-button" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <!-- Account Details -->
                    <fieldset>
                        <h2 class="fs-title">Account Details</h2>
                        <h3 class="fs-subtitle">All fields are required</h3>
                        <input type="text" name="bank" placeholder="Name of Bank" required/>
                        <input type="text" name="accountno" placeholder="Account Number(Personal)" required/>
                        <input type="text" name="bvn" placeholder="BVN" required/>
                        <small id="help" class="form-text text-muted">Please ensure the bank details entered are correct</small>
                        <!-- <textarea name="address" placeholder="Address"></textarea> -->
                        <input type="button" name="previous" class="previous action-button" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                        <!-- Referee -->
                        <fieldset>
                            <h2 class="fs-title">Referees</h2>
                            <small id="help" class="form-text text-muted">All fields are required</small>
                            <br></br>
                            <input  class="required" type="text"name="rname" placeholder="Name of Referee" required/>
                            <input type="text" name="raddress" placeholder="raddress" required/>
                            <input type="text" name="rphone" placeholder="rphone" required/>                               
                            <div class="row ">
                                <div class="col-md-5">
                                        <label class="control-label">Upload Nepa Bill of Referee</label>
                                </div>
                                <div class="col-md-7">
                                        <input type="file" class="filestyle upload" name="nepareferee" data-icon="false">
                                </div>
                                
                            </div>
                            <div class="row">
                                    <div class="col-md-5">
                                            <label class="control-label">Upload Passport of Referee</label>
                                    </div>
                                    <div class="col-md-7">
                                            <input type="file" class="filestyle upload" name="pixreferee" data-icon="false">
                                    </div>
                                    
                            </div>
                            
                            
                                        
                                        
                            
        
                            <small id="help" class="form-text text-muted">Please ensure the informations provided are accurate</small>
                            <input type="button" name="previous" class="previous action-button" value="Previous"/>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <!-- Uploads -->
                        <fieldset>
                                <h2 class="fs-title">Uploads</h2>
                                <small id="help" class="form-text text-muted">Picture sizes should not exceed 500kb</small>
                                <br></br>
                                <div class="row ">
                                        <div class="col-md-5">
                                                <label class="control-label">Upload your passport</label>
                                        </div>
                                        <div class="col-md-7">
                                                <input type="file" class="filestyle upload" name="passport" data-icon="false">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                            <div class="col-md-5">
                                                    <label class="control-label">Upload school certificates</label>
                                            </div>
                                            <div class="col-md-7">
                                                    <input type="file" class="filestyle upload" name="certificates" data-icon="false">
                                            </div>
                                            
                                    </div>
                                    <div class="row ">
                                            <div class="col-md-5">
                                                    <label class="control-label">Upload Copoperative Cert. of Registration</label>
                                            </div>
                                            <div class="col-md-7">
                                                    <input type="file" class="filestyle upload" name="regcert" data-icon="false">
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                                <div class="col-md-5">
                                                        <label class="control-label">Upload Voters ID/National ID</label>
                                                </div>
                                                <div class="col-md-7">
                                                        <input type="file" class="filestyle upload" name="idcard"data-icon="false">
                                                </div>
                                                
                                        </div>
                                <small id="help" class="form-text text-muted">Please ensure the informations provided are correct</small>
                                <input type="button" name="previous" class="previous action-button" value="Previous"/>
                                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                        </fieldset>
                </form>
            </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <!-- jQuery -->
        <!-- <script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script> -->
        <!-- jQuery easing plugin -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js" type="text/javascript"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <!-- <script src="lga.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
        <script src="{{ asset('assets/js/lga.min.js') }}"></script>
            <!-- <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
            <!-- <script src='http://cdnjs.cloudfare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script> -->
            <script src="{{ asset('assets/js/form.js') }}"></script>
            <script src="{{ asset('js/toastr.js') }}"></script>
<script>
@if(Session::has('success'))
  toastr.success("{{Session::get('success')}}");
@elseif(Session::has('info'))
  toastr.info("{{Session::get('info')}}");
@elseif(Session::has('admitted'))
  toastr.info("{{Session::get('admitted')}}");
@endif
</script>
        </body>
        </html>
    