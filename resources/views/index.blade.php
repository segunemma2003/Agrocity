<!DOCTYPE html>
<html>
<head>
    <title>Agrocity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styless.css') }}">
</head>

<body>
    <main class="l-main" id="index-page" role="main">
     
        <nav class="l-nav" role="navigation">
            <div class="nav-main">
                <div class="brand-container" onclick="javascript:location.href='/'">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="brand-icon" style="margin-left: 0px!important">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="" class="brand-text">
                </div>
                <div class="nav-links-container">
                    <div class="nav-link home" data-href="home">Home</div>
                    <div class="nav-link who-we-are"><a href="#who"></a> Who we are</div>
                    <div class="nav-link what-we-do" data-href="what-we-do">What we do</div>
                    <div class="nav-link contact-us" data-href="contact-us">Contact us</div>
                </div>
            </div>
            <div class="nav-mobile">
                <div class="nav-link home" data-href="home"></div>
                <div class="nav-link who-we-are" data-href="who-we-are"></div>
                <div class="nav-link what-we-do" data-href="what-we-do"></div>
                <div class="nav-link contact-us" data-href="contact-us"></div>
            </div>
        </nav>
        <header class="l-header" role="header" id="home">
            <img src="{{ asset('assets/images/header.jpg') }}" alt="Afrivelle" class="header-bg">
            <div class="header-content">
                <div class="row">
                   <!--  <div class="col-xs-12 col-md-4">
                        <img src="img/icon.brand--light.png" class="header-brand">
                    </div> -->
                    <div class="col-xs-12 col-md-12">
                        <p class="hero-title">
                            What has been holding you <span>back</span>?
                        </p>
                        <p class="hero-subtitle">
                            Become a farmer.<br>Become a sponsor<br> and support the revitalization of the farming system.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-color2 btn-header">GET STARTED</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="l-section who-we-are" role="" id="who">
            <img src="{{ asset('assets/images/icon.section-bg.png') }}" class="section-bg">
            <div class="section-content">
                <img src="{{ asset('assets/images/icon.who-we-are.png') }}" alt="" class="section-icon">
                <p class="section-title">
                    Who we are
                </p>
                <p class="section-body">
                    Our mission to revive the dying Agricultural sector within the south eastern part of Nigeria.
                    Agrocity builds a sustainable and efficient farming process where we lease lands to farmers on 0% fee, connect them to prospective sponsors and investors.
                    Growing the food basket, economy of the nation while ensuring maximized income for both our farmers and investors.
                </p>
            </div>
        </section>
        <section class="l-section what-we-do" role="" id="what-we-do">
            <div class="container-responsive">
                <div class="row no-gutter">
                    <div class="col-xs-12 col-md-7">
                        <div class="pane left">
                            <div class="pane-content">
                                <div class="pane-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-2">
                                            <img src="{{ asset('assets/images/farmlands.png') }}" alt="" class="pane-item-icon">
                                        </div>
                                        <div class="col-xs-12 col-md-10">
                                            <p class="pane-item-title">
                                                Access farmlands
                                            </p>
                                            <p class="pane-item-body">
                                                We provide interested farmers with lands to grow their produce for a given period.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pane-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-2">
                                            <img src="{{ asset('assets/images/sponsor.png') }}" alt="" class="pane-item-icon">
                                        </div>
                                        <div class="col-xs-12 col-md-10">
                                            <p class="pane-item-title">
                                                Get sponsored
                                            </p>
                                            <p class="pane-item-body">
                                             We encourage interested partners to invest and sponsor farmers based on their interest.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="pane-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-2">
                                            <img src="{{ asset('assets/images/investment.png') }}" alt="" class="pane-item-icon">
                                        </div>
                                        <div class="col-xs-12 col-md-10">
                                            <p class="pane-item-title">
                                                Earn on investment
                                            </p>
                                            <p class="pane-item-body">
                                                Sustainable ROI is certain for both farmers and sponsors on our platform.
                                            </p>
                                            <button class="btn btn-color2 mvp-sprint-button">
                                                Get started
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="pane right">
                            <div class="pane-content">
                                <img src="{{ asset('assets/images/agrocity.jpg')}}" alt="Afrivelle" class="brand-icon">
                                <p class="pane-title">
                                    Agrocity's Advantage
                                </p>
                                <p class="advantage one">Business Experience</p>
                                <p class="advantage two">Access to partners and investors</p>
                                <p class="advantage three">Access to market</p>
                                <p class="advantage four">Quality-driven Delivery Model</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 sign drop-pad">
                <h3>About Agrocity</h3>
                    <p>Agrocity is a branch of sefapcol. An omline Agri platform that alots lands to farmers and conects them to prospective investors at giving them support.</p>
                    <p style="text-align: left;">For further information on the investment opportunity, please contact any of the following .</p>
                    <ul style="margin: 0px">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Address</strong> : Ibeku street, Umuahia, Abia state <span>Nigeria.</span></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><strong>Email</strong>  : <a href="#">info@sefapcol.com</a></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><strong>Phone </strong> : +2348024438577, +2348034877615</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 drop-pad login-pad">
                <h3>Drop Us A Message</h3>
                    <form action="#" method="get" name="sentMessage" id="contactForm" novalidate style="color: #000">
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="Email" style="border: none;" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <textarea rows="5" cols="30" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none;border-color: #fff;color: #fff"></textarea>
                        </div>
                    </div>
                        <div id="success"></div>
                        <!-- For success/fail message-->
                        <button type="submit" class=" btn btn-color2">Send Message</button>
                    <div class="clearfix"></div>    
                    </form>
                </div>
                <div class="clearfix"></div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>  
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p>&copy; 2018 SEFAPCOL. All Rights Reserved | Design by <a href="http://ighub.com.ng"> Innovation Growth Hub (igHub). </a></p>
                </div>
                </hr>
            </div>  
        </div>
    </section>
    <!-- ./Footer -->
</footer>
</body>
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.2.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/js/noframework.waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/dreyanim.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/contact.js') }}"></script>
<script>
    $(function() {
        var closeBtn = $('.mvp-sprint-button');
        closeBtn.click(function() {
            location.href = "mvp.html";
        });
    });
</script>
</html>
