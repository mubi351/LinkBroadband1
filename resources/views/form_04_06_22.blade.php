<!DOCTYPE HTML>
<html>
<!-- 
    Vandan's changes (LB Project)
    Date:02/05/2022:- Line: 146 add index route  
    Date:02/05/2022:- Line: 218 to 229 add postcode functionality  
-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Link Broadbands</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link rel="stylesheet" type="text/css" href="{{ asset('wizard/css/muli-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('wizard/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/wizard-form-style.css')}}" />
    <link rel="stylesheet" href="{{ asset('wizard/css/menu.css') }}" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script defer src="plugins/OwlCarousel2.3/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Theme style  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="assets/css/flexslider.css">
    <!-- Pricing -->
    <link rel="stylesheet" href="assets/css/pricing.css">
    <link href="assets/css/carousel.css" rel="stylesheet">
    <!-- Theme style  -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Modernizr JS -->
    <script src="assets/js/modernizr-2.6.2.min.js"></script>


    <style>
        section {
            padding-top: 10px;
        }

         .form-section {
            display: none;
        }

        .form-section.current {
            display: inherit;
        }

        .btn-info {
            margin-top: 10px;
        }

        .btn-success {
            margin-top: 10px;
            background-color: #34AFAC;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            color: red;
        }

        /*new styling codes*/

        .inner h3, .table {
            box-shadow: none;
        }
        .full-white-div {
            padding: 0px 10px 3px;
            background-color: white;
        }
        .full-wrapper {
            box-shadow: 0px 10px 10px #d7d7d7;
            border-bottom: 10px solid #00c1be;  
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            padding-bottom: 65px;
        }
        .l-head {
            margin-top: 0px;
        }
        .list-group {
            background-color: white;
            box-shadow: 0px 10px 10px #d7d7d7;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            border-bottom: 6px solid #00c1be;
        }
        .list-group .list-group-item {
            border: 1px solid white;
        }
        .td-content, .price-table-header, #calculated_total_amount {
            color: #00c1be;
            font-weight: 700;
            text-align: right;
        }
        .price-table-header {
            color: black;
        }
        .hr-divide-list {
            width: 80%;
            border: 0.5px solid #00c1be;
        }
        .form-check-label {
            margin-left: 10px;
        }   
        .tablepack tbody tr:nth-child(odd) {
            border-color: transparent;
            background-color: white;
        }
        .t {
            border: 1px solid transparent;
        }
        #connection_plan1 th, #connection_plan1 td, #connection_plan11 th, #connection_plan11 td, #bb_plan11 th, #bb_plan11 td,
        #vv_plan11 th, #vv_plan11 td, #transfer_no_chrg11 th, #transfer_no_chrg11 td,
        #mob_plan_amount11 th, #mob_plan_amount11 td,#rt_extr_plan111 th, #rt_extr_plan111 td,
        #rt_extr_plan211 th, #rt_extr_plan211 td, #rt_extr_plan311 th, #rt_extr_plan311 td, 
        #rt_extr_plan411 th, #rt_extr_plan411 td, #rt_extr_plan511 th, #rt_extr_plan511 td, 
        #rt_extr_plan611 th, #rt_extr_plan611 td, #rt_extr_plan711 th, #rt_extr_plan711 td, 
        #routercharge11 th, #routercharge11 td, #bbkp_chrg11 th, #bbkp_chrg11 td, #router_install11 th,
        #router_install11 td, #it_support11 th, #it_support11 td, #dl_chrg11 th, #dl_chrg11 td {
            padding-left: 20px;
        }
        #connection_plan1 td, #connection_plan11 td, #bb_plan11 td, #vv_plan11 td, #transfer_no_chrg11 td,
        #mob_plan_amount11 td, #rt_extr_plan111 td, #rt_extr_plan211 td, #rt_extr_plan311 td,
        #rt_extr_plan411 td, #rt_extr_plan511 td, #rt_extr_plan611 td, #rt_extr_plan711 td, 
        #routercharge11 td, #bbkp_chrg11 td, #router_install11 td, #it_support11 td, #dl_chrg11 td 8{
            color: #00c1be;
            font-weight: 700;
        }
        #product-details th {
            padding-bottom: 10px;
        }
        #order_summary #bb_plan td,  #order_summary #vv_plan td, #order_summary #transfer_no_chrg td,
        #order_summary #mob_plan_amount td, #order_summary #rt_extr_plan1 td, #order_summary #rt_extr_plan2 td,
        #order_summary #rt_extr_plan3 td, #order_summary #rt_extr_plan4 td, #order_summary #rt_extr_plan5 td,
        #order_summary #rt_extr_plan6 td, #order_summary #rt_extr_plan7 td, #order_summary #routercharge td,
        #order_summary #bbkp_chrg td, #order_summary #router_install td, #order_summary #it_support td,
        #order_summary #dl_chrg td {
            text-align: right;
            font-weight: 700;
            color: #00c1be;
        }
  
    </style>

</head>

<body>

    <div class="fh5co-loader"></div>
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="topbar">
                    <div class="left">
                        <div class="col-md-6 col-xs-6 col-sm-12">
                            <a href="index.html" style="text-decoration: none; cursor: pointer;">Residential</a>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-12">
                            <a href="business.html" style="text-decoration: none; cursor: pointer;">Business Broadband</a>
                        </div>
                    </div>
                    <div class="middle"></div>
                    <div class="right">
                        <ul>
                            <li class="r"><a href="mailto:info@linkbroadbands.com" target="_blank"
                                    rel="noopener noreferrer">info@linkbroadbands.com</a></li>
                            <li class="r"><a href="tel:033 0174 1444">033 0174 1444</a></li>
                            <li class="r"><a href="#">Help</a></li>
                            <li class="r"><a href="faq.html">FAQ</a></li>
                            <li><a href="news.html">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="{{route('home')}}"><img src="assets/images/logo1.png"
                                    style="width:120px;height:68px;"></a></div>
                    </div>

                    <div class="col-xs-10">
                        <!-- mobile menu -->
                        <div id="mySidenav" class="sidenav">
						    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						    <a href="index.html">Broadband</a>
						    <hr style="border-width: 0px; height: 1px; background-color: silver;">
						    <a href="about-us.html">Voice</a>
						    <hr style="border-width: 0px; height: 1px; background-color: silver;">
						    <a href="services.html">Mobile</a>
						    <hr style="border-width: 0px; height: 1px; background-color: silver;">
						    <a href="industries.html">Details</a>
						    <hr style="border-width: 0px; height: 1px; background-color: silver;">
						    <a href="aboutus.html">Get Started</a>
						    <hr style="border-width: 0px; height: 1px; background-color: silver; ">
						    <a href="contact-us.html">My Account</a>
					    </div>
					    <div id="main" class="main" class="col-xs-10 text-right">
						    <span style="font-size: 20px; cursor: pointer; margin-top:0px; color: #00C1BE;" onclick="openNav()">
							&#9776;
						    </span>
					    </div>
					    
                         <!-- mobile menu -->
                         <div class="text-right menu-1">
                        <ul>
                            <li class="has-dropdown"><a href="#">Broadband</a>
                                <ul class="dropdown">
                                    <li><a href="index12.html">Residential</a></li>
                                    <li><a href="business.html">Business</a></li>

                                </ul>
                            </li>
                            <li class="has-dropdown"><a href="#">Voice</a>
                                <ul class="dropdown">
                                    <li><a href="voiceresidential.html">Residential Voice</a></li>
                                    <li><a href="businessvoice.html">Business Voice</a></li>

                                </ul>
                            </li>
                            <li><a href="mobileresidential.html">Mobile</a></li>


                            <li>
                                <a href="hardware.html">Deals</a>

                            </li>

                            <li class="btn-cta"><a href="form.html"><span>Get Started</span></a></li>
                            <li class="btn-cta1"><a href="https://orders.linkbroadbands.com/login"><span>My
                                        Account</span></a></li>
                        </ul>
                    </div>
                    </div>

                   
                    
                </div>

            </div>
        </div>
    </nav>

    <!-- <div class="container-fluid" style="background-color:#34AFAC">
        <div class="row animate-box">
            <div class="col-lg-12">
                <p class="webfeatures">Good News, </p>
                <p class="text-center" style="color:white;!">
                    We can provide ultrafast broadband to your Postcode Area
                </p>
            </div>
        </div>
    </div> -->

    <section id="sectionform">
        <div class="container">
            <div class="row ">
                <div class="col-md-8">
                    <h3 class="l-head broadband-heading">Broadband</h3>
                    <div class="full-wrapper"> 
                        <p class="form-header">Good News, We can provide ultrafast broadband to your Postcode Area
                        </p>
                    <div class="full-white-div">
                        
                        <div class="">
                            @if(count($errors))
                                <div class="form-group">
                                    <div class="alert alert-danger" id="display-error">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <form class="form-register" id="broadband-form" method="" action="" role="form"
                                data-parsley-validate="">
                                <div class="alert alert-danger print-error-msg" style="display:none">
                                  <ul></ul>
                                </div>
                                <div class="inner">
                                <!-- SECION-1 -->
                                    <div class="form-section">
                                        <h3>Broadband</h3>
                                        <h5>Service Checker</h5>
                                        <div class="form-row inline mt-3 mb-3">
                                        <label for="postcode" class="col-sm-2 control-label">Postcode :</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{$postcode}}" class="form-control input-sm" id="postcode" name="postcodes" disabled>
                                            <span id="postcodeValidation" style="color:red"></span>
                                            <span class="text-danger error-text postcodes_error"></span>
                                        </div>
                                    </div>
                                     <div class="form-row inline mb-3">
                                        <label class="col-sm-2 control-label " for="customer">Customer :</label>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label class="checkbox-inline">
                                                <!--<input type="radio" name="customer" value="new_customer">-->
                                                    <input type="radio" name="connection" id="new_connection"
                                                    value="1" data-name="New Connection" data-price="30.00"
                                                    onclick="ShowHideDiv()" required checked>
                                                    <b>New Connection</b><br>
                                                    <p>I am a new customer in this property and have no working
                                                    service</p>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label class="checkbox-inline">
                                                <!--<input type="radio" name="customer" value="migration_customer">-->
                                                    <input type="radio" name="connection" id="migration_connection"
                                                    value="2" data-name="Migration Connection"
                                                    data-price="00.00" onclick="ShowHideDiv1()" required>
                                                    <b>Migration Connection</b> - <b>Free</b><br>
                                                    <p>I currently have a working service in this property and wish
                                                    to migrate over to Link Broadband</p>
                                                    <div id="migration_connection_date_sel" style="display:none;">
                                                        <p>Contract end date for your present service provider
                                                        including notice period:</p>
                                                        <input type="date" id="migration_date" name="migration_date"
                                                        class="form-control input-sm" />
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row inline mb-3">
                                        <label class="col-sm-2 control-label">Select contract length :</label>
                                        <div class="col-sm-10">
                                            <button type="button" class="btn-primary btn-xs" style="font-size:14px;" id="3m" onclick="Showpack3()">3 months</button>
                                            <button type="button" class="btn-primary btn-xs" style="font-size:14px;" id="6m" onclick="Showpack6()">6 months</button>
                                            <button type="button" class="btn-primary btn-xs" style="font-size:14px;" id="12m" onclick="Showpack12()">12 months</button>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <table class="tt" style="box-shadow: none;">
                                            <tr class="space-row">
                                                <th class="ttt" style="font-weight: 700;">Required Activation Date * <br>
                                                <label style="color: gray; font-weight: normal;"> Please select a business day </label> </th>
                                                <td class="ttt"><input type="date" name="acvdate" class="form-control" id="acvdate" placeholder=""  >
                                                </td>
                                            </tr>
                                        </table>
                                        </div>
                                    <div class="form-row inline mb-3">
                                        <div id="3mshow" style="">
                                            <div class="catlist" style="margin-top:20px;">
                                                <h5>Choose Your Broadband Plan*</h5>
                                                <div id="table1">
                                                    <table class="table tablepack">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Broadband packages </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check" >
                                                                            <input type="radio" name="broadband_plan" class="brd_plan"
                                                                            value="Link Fast Fibre 40 - £26.44 (40 Mbps download | 10 Mbps upload | Unlimited)" 
                                                                            data-name="Link Fast Fibre 40" data-price="26.44" >
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 40 - £26.44</b> per month
                                                                            <br><span>40 Mbps download | 10 Mbps upload | Unlimited</span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 33.20 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="33.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £33.20</b> per month
                                                                            <br><span>120 Mbps download |24 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 28.25 (50 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="28.25">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £28.25</b> per month
                                                                            <br><span>50 Mbps download | 10 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 38.70 (120 Mbps download | 120 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="38.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120 - £38.70</b> per month
                                                                            <br><span>120 Mbps download | 120 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 29.70  (50 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="29.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £29.70</b> per month
                                                                            <br><span>50 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 160 - £ 34.95 (160 Mbps download | 30 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 160" data-price="34.95">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 160 - £34.95</b> per month
                                                                            <br><span>160 Mbps download | 30 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 30.45 (60 Mbps download | 12 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="30.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £30.45</b> per month
                                                                            <br><span>60 Mbps download | 12 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 38.44 (200 Mbps download | 25 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="38.44">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £38.44</b> per month
                                                                            <br><span>200 Mbps download | 25 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 33.65 (60 Mbps download | 60 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="33.65">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £33.65</b> per month
                                                                            <br><span>60 Mbps download | 60 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 44.05 (200 Mbps download | 200 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="44.05">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £44.05</b> per month
                                                                            <br><span>200 Mbps download | 200 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 80 - £ 32.65 (80 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 80" data-price="32.65">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 80 - £32.65</b> per month
                                                                            <br><span>80 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 300 - £ 50.45 (300 Mbps download | 300 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 300" data-price="50.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 300 - £50.45</b> per month
                                                                            <br><span>300 Mbps download | 300 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 32.85 (100 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="32.85">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £32.85</b> per month
                                                                            <br><span>100 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 330 - £ 46.10 (330 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 330" data-price="46.10">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 330 - £46.10</b> per month
                                                                            <br><span>330 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 36.45 (100 Mbps download | 100 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="36.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £36.45</b> per month
                                                                            <br><span>100 Mbps download | 100 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 48.44 (360 Mbps download | 72 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="48.44">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 360 - £48.44</b> per month
                                                                            <br><span>360 Mbps download | 72 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 110 - £ 32.95 (110 Mbps download | 15 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 110" data-price="32.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 110 - £32.95</b> per month
                                                                            <br><span>110 Mbps download | 15 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 49.45 (360 Mbps download | 180 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="49.45" >
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 360 - £49.45</b> per month
                                                                            <br><span>360 Mbps download | 180 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="table2">
                                                    <table class="table tablepack">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Broadband packages </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 40 - £ 26.44 (40 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 40" data-price="26.44">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 40 - £26.44</b> per month
                                                                            <br><span>40 Mbps download | 10 Mbps upload | Unlimited</span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 28.25 (50 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="28.25">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £28.25</b> per month
                                                                            <br><span>50 Mbps download | 10 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 29.70 (50 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="29.70">
                                                                            <label class="form-check-label" for="credit"><b>Link Fast Fibre 50 - £29.70</b> per month
                                                                            <br><span>50 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 30.45 (60 Mbps download | 12 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="30.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £30.20</b> per month
                                                                            <br><span>60 Mbps download | 12 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 33.65 (60 Mbps download | 60 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="33.65">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £33.65</b> per month
                                                                            <br><span>60 Mbps download | 60 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 80 - £ 32.65 (80 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 80" data-price="32.65">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 80 - £32.65</b> per month
                                                                            <br><span>80 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 32.85 (100 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="32.85">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £32.85</b> per month
                                                                            <br><span>100 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 36.45 (100 Mbps download | 100 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="36.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £36.20</b> per month
                                                                            <br><span>100 Mbps download | 100 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 110 - £ 32.95 (110 Mbps download | 15 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 110" data-price="32.95">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 110 - £32.95</b> per month
                                                                            <br><span>110 Mbps download | 15 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 33.20 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="33.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £33.20</b> per month
                                                                            <br><span>120 Mbps download |24 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 38.70 (120 Mbps download | 120 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="38.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £38.70</b> per month
                                                                            <br><span>120 Mbps download |120 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 160 - £ 34.95 (160 Mbps download | 30 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 160" data-price="34.95">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 160 - £34.95</b> per month
                                                                            <br><span>160 Mbps download | 30 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 38.44 (200 Mbps download | 25 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="38.44">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £38.44</b> per month
                                                                            <br><span>200 Mbps download | 25 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 44.05 (200 Mbps download | 200 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="44.05">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £44.05</b> per month
                                                                            <br><span>200 Mbps download | 200 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 300 - £ 50.45 (300 Mbps download | 300 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 300" data-price="50.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 300 - £50.45</b> per month
                                                                            <br><span>300 Mbps download | 300 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 330 - £ 46.10 (330 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 120" data-price="46.10">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 330 - £46.10</b> per month
                                                                            <br><span>330 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 48.44 (360 Mbps download | 72 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="48.44">
                                                                            <label class="form-check-label" for="credit">
                                                                            <b>LINK ULTRA FAST FIBRE 360 - £48.44</b> per month
                                                                            <br><span>360 Mbps download | 72 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 49.45 (360 Mbps download | 180 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="49.45">
                                                                            <label class="form-check-label" for="credit">
                                                                            <b>LINK ULTRA FAST FIBRE 360 - £49.45</b> per month
                                                                            <br><span>360 Mbps download | 180 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="6show" style="display:none;">
                                            <div class="catlist" style="margin-top:20px;">
                                                <h5>Choose Your Broadband Plan</h5>
                                                <div id="table1">
                                                    <table class="table tablepack">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Broadband packages </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 40 - £26.19 (40 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 40" data-price="26.19">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 40 - £26.19</b> per month
                                                                            <br><span>40 Mbps download | 10 Mbps upload | Unlimited</span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 32.95 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="32.95">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £32.95</b> per month
                                                                            <br><span>120 Mbps download |24 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 28.00 (50 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="28.00">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £28.00</b> per month
                                                                            <br><span>50 Mbps download | 10 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 38.45 (120 Mbps download | 120 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="38.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120 - £38.45</b> per month
                                                                            <br><span>120 Mbps download | 120 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 29.45  (50 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="29.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £29.45</b> per month
                                                                            <br><span>50 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 160 - £ 34.70 (160 Mbps download | 30 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 160" data-price="34.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 160 - £34.70</b> per month
                                                                            <br><span>160 Mbps download | 30 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 30.20 (60 Mbps download | 12 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="30.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £30.20</b> per month
                                                                            <br><span>60 Mbps download | 12 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 38.19 (200 Mbps download | 25 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="38.19">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £38.19</b> per month
                                                                            <br><span>200 Mbps download | 25 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 32.20 (60 Mbps download | 60 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="32.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £32.20</b> per month
                                                                            <br><span>60 Mbps download | 60 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 43.80 (200 Mbps download | 200 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="43.80">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £43.80</b> per month
                                                                            <br><span>200 Mbps download | 200 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 80 - £ 32.40 (80 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 80" data-price="32.40">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 80 - £32.40</b> per month
                                                                            <br><span>80 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 300 - £ 50.20 (300 Mbps download | 300 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 300" data-price="50.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 300 - £50.20</b> per month
                                                                            <br><span>300 Mbps download | 300 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 32.60 (100 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="32.60">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £32.60</b> per month
                                                                            <br><span>100 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 330 - £ 45.85 (330 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 330" data-price="45.85">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 330 - £45.85</b> per month
                                                                            <br><span>330 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 36.20 (100 Mbps download | 100 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="36.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £36.20</b> per month
                                                                            <br><span>100 Mbps download | 100 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 48.19 (360 Mbps download | 72 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="48.19">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 360 - £48.19</b> per month
                                                                            <br><span>360 Mbps download | 72 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 110 - £ 32.70 (110 Mbps download | 15 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 110" data-price="32.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 110 - £32.70</b> per month
                                                                            <br><span>110 Mbps download | 15 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 49.20 (360 Mbps download | 180 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="49.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 360 - £49.20</b> per month
                                                                            <br><span>360 Mbps download | 180 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="table2">
                                                    <table class="table tablepack">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Broadband packages </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 40 - £ 26.19 (40 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 40" data-price="26.19">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 40 - £26.19</b> per month
                                                                            <br><span>40 Mbps download | 10 Mbps upload | Unlimited</span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 28.00 (50 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="28.00">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £28.00</b> per month
                                                                            <br><span>50 Mbps download | 10 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 29.45 (50 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="29.45">
                                                                            <label class="form-check-label" for="credit"><b>Link Fast Fibre 50 - £29.45</b> per month
                                                                            <br><span>50 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 30.20 (60 Mbps download | 12 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="30.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £30.20</b> per month
                                                                            <br><span>60 Mbps download | 12 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 32.20 (60 Mbps download | 60 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="32.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £32.20</b> per month
                                                                            <br><span>60 Mbps download | 60 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 80 - £ 32.40 (80 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 80" data-price="32.40">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 80 - £32.40</b> per month
                                                                            <br><span>80 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 32.60 (100 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="32.60">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £32.60</b> per month
                                                                            <br><span>100 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 36.20 (100 Mbps download | 100 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="36.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £36.20</b> per month
                                                                            <br><span>100 Mbps download | 100 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 110 - £ 32.70 (110 Mbps download | 15 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 110" data-price="32.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 110 - £32.70</b> per month
                                                                            <br><span>110 Mbps download | 15 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 32.95 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="32.95">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £32.95</b> per month
                                                                            <br><span>120 Mbps download |24 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 38.45 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="38.45">
                                                                            <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £38.45</b> per month
                                                                            <br><span>120 Mbps download |120 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 160 - £ 34.70 (160 Mbps download | 30 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 160" data-price="34.70">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 160 - £34.70</b> per month
                                                                            <br><span>160 Mbps download | 30 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 38.19 (200 Mbps download | 25 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="38.19">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £38.19</b> per month
                                                                            <br><span>200 Mbps download | 25 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 43.80 (200 Mbps download | 200 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="43.80">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £43.80</b> per month
                                                                            <br><span>200 Mbps download | 200 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 300 - £ 50.20 (300 Mbps download | 300 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 300" data-price="50.20">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 300 - £50.20</b> per month
                                                                            <br><span>300 Mbps download | 300 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 330 - £ 45.85 (330 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 120" data-price="45.85">
                                                                            <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 330 - £46.10</b> per month
                                                                            <br><span>330 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 48.19 (360 Mbps download | 72 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="48.19">
                                                                            <label class="form-check-label" for="credit">
                                                                            <b>LINK ULTRA FAST FIBRE 360 - £48.19</b> per month
                                                                            <br><span>360 Mbps download | 72 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                            <tr>
                                                                <div class="form-row">
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 49.20 (360 Mbps download | 180 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="49.20">
                                                                            <label class="form-check-label" for="credit">
                                                                            <b>LINK ULTRA FAST FIBRE 360 - £49.20</b> per month
                                                                            <br><span>360 Mbps download | 180 Mbps upload | Unlimited
                                                                            </span></label>
                                                                        </div>
                                                                    </td>
                                                                </div>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="12show" style="display:none;">
                                        <div class="catlist" style="margin-top:20px;">
                                            <h5>Choose Your Broadband Plan</h5>
                                            <div id="table1">
                                                <table class="table tablepack">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">Broadband packages </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 40 - £24.99 (40 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 40" data-price="24.99">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 40 - £24.99</b> per month
                                                                            <br><span>40 Mbps download | 10 Mbps upload | Unlimited</span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 31.75 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="31.75">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £31.75</b> per month
                                                                            <br><span>120 Mbps download |24 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 26.80 (50 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="26.80">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £26.80</b> per month
                                                                            <br><span>50 Mbps download | 10 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 37.25 (120 Mbps download | 120 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="37.25">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120 - £37.25</b> per month
                                                                            <br><span>120 Mbps download | 120 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 28.25  (50 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="28.25">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £28.25</b> per month
                                                                            <br><span>50 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 160 - £ 33.50 (160 Mbps download | 30 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 160" data-price="33.50">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 160 - £33.50</b> per month
                                                                            <br><span>160 Mbps download | 30 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 29.00 (60 Mbps download | 12 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="29.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £29.00</b> per month
                                                                            <br><span>60 Mbps download | 12 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 36.99 (200 Mbps download | 25 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="36.99">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £36.99</b> per month
                                                                            <br><span>200 Mbps download | 25 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 31.00 (60 Mbps download | 60 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="31.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £31.00</b> per month
                                                                            <br><span>60 Mbps download | 60 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 42.60 (200 Mbps download | 200 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="42.60">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £42.60</b> per month
                                                                            <br><span>200 Mbps download | 200 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 80 - £ 31.20 (80 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 80" data-price="31.20">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 80 - £31.20</b> per month
                                                                            <br><span>80 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 300 - £ 49.00 (300 Mbps download | 300 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 300" data-price="49.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 300 - £49.00</b> per month
                                                                            <br><span>300 Mbps download | 300 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 31.40 (100 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="31.40">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £31.40</b> per month
                                                                            <br><span>100 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 330 - £ 44.65 (330 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 330" data-price="44.65">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 330 - £44.65</b> per month
                                                                            <br><span>330 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 35.00 (100 Mbps download | 100 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="35.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £35.00</b> per month
                                                                            <br><span>100 Mbps download | 100 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 46.99 (360 Mbps download | 72 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="46.99">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 360 - £46.99</b> per month
                                                                            <br><span>360 Mbps download | 72 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 110 - £ 31.50 (110 Mbps download | 15 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 110" data-price="31.50">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 110 - £31.50</b> per month
                                                                            <br><span>110 Mbps download | 15 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 48.00 (360 Mbps download | 180 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="48.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 360 - £48.00</b> per month
                                                                            <br><span>360 Mbps download | 180 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="table2">
                                                <table class="table tablepack">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">Broadband packages </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 40 - £ 24.99 (40 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 40" data-price="24.99">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 40 - £24.99</b> per month
                                                                            <br><span>40 Mbps download | 10 Mbps upload | Unlimited</span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 26.80 (50 Mbps download | 10 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="26.80">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 50 - £26.80</b> per month
                                                                            <br><span>50 Mbps download | 10 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 50 - £ 28.25 (50 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Fast Fibre 50" data-price="28.25">
                                                                        <label class="form-check-label" for="credit"><b>Link Fast Fibre 50 - £28.25<b> per month
                                                                                    <br><span>50 Mbps download | 50 Mbps upload | Unlimited
                                                                                    </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 29.00 (60 Mbps download | 12 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="29.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £29.00</b> per month
                                                                            <br><span>60 Mbps download | 12 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 60 - £ 31.00 (60 Mbps download | 60 Mbps upload | Unlimited)" data-name="Link Fast Fibre 60" data-price="31.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK FAST FIBRE 60 - £31.00</b> per month
                                                                            <br><span>60 Mbps download | 60 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 80 - £ 31.20 (80 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 80" data-price="31.20">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 80 - £31.20</b> per month
                                                                            <br><span>80 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 31.40 (100 Mbps download | 20 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="31.40">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £31.40</b> per month
                                                                            <br><span>100 Mbps download | 20 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 100 - £ 35.00 (100 Mbps download | 100 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 100" data-price="35.00">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 100 - £35.00</b> per month
                                                                            <br><span>100 Mbps download | 100 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 110 - £ 31.50 (110 Mbps download | 15 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 110" data-price="31.50">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 110 - £31.50</b> per month
                                                                            <br><span>110 Mbps download | 15 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 31.75 (120 Mbps download | 24 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="31.75">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £31.75</b> per month
                                                                            <br><span>120 Mbps download |24 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Super Fast Fibre 120 - £ 37.25 (120 Mbps download | 120 Mbps upload | Unlimited)" data-name="Link Super Fast Fibre 120" data-price="37.25">
                                                                        <label class="form-check-label" for="credit"><b>LINK SUPER FAST FIBRE 120- £37.25</b> per month
                                                                            <br><span>120 Mbps download |120 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 160 - £ 33.50 (160 Mbps download | 30 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 160" data-price="33.50">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 160 - £33.50</b> per month
                                                                            <br><span>160 Mbps download | 30 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 36.99 (200 Mbps download | 25 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="36.99">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £36.99</b> per month
                                                                            <br><span>200 Mbps download | 25 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 200 - £ 42.60 (200 Mbps download | 200 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 200" data-price="42.60">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 200 - £42.60</b> per month
                                                                            <br><span>200 Mbps download | 200 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Fast Fibre 300 - £ 49.00 (300 Mbps download | 300 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 300" data-price="49.00" onclick="broadband()">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 300 - £49.00</b> per month
                                                                            <br><span>300 Mbps download | 300 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 330 - £ 44.65 (330 Mbps download | 50 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 120" data-price="44.65">
                                                                        <label class="form-check-label" for="credit"><b>LINK ULTRA FAST FIBRE 330 - £45.85</b> per month
                                                                            <br><span>330 Mbps download | 50 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 46.99 (360 Mbps download | 72 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="46.99">
                                                                        <label class="form-check-label" for="credit">
                                                                            <b>LINK ULTRA FAST FIBRE 360 - £46.99</b> per month
                                                                            <br><span>360 Mbps download | 72 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="form-row">
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input type="radio" name="broadband_plan" class="brd_plan" value="Link Ultra Fast Fibre 360 - £ 48.00 (360 Mbps download | 180 Mbps upload | Unlimited)" data-name="Link Ultra Fast Fibre 360" data-price="48.00">
                                                                        <label class="form-check-label" for="credit">
                                                                            <b>LINK ULTRA FAST FIBRE 360 - £48.00</b> per month
                                                                            <br><span>360 Mbps download | 180 Mbps upload | Unlimited
                                                                            </span></label>
                                                                    </div>
                                                                </td>
                                                            </div>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    <!-- SECTION1 ENDS
                                    SECTION2 STARTS -->
                                    <div class="form-section">
                                    <h3>Voice</h3>
                                    <div id="s" style="display:none;">
                                        <h5>Transfer Your Number</h5>
                                        <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify;">
                                            Would you like to transfer your existing telephone number(s) to your Linkbroadband account? There is a £15 charge for each successful number transfer, unless you are transferring the number from an existing
                                            Linkbroadband account. Any charges will be applied to your first bill.</label>
                                        <div class="form-row">
                                            <div class="col-md-12"><label style="text-align:justify;vertical-align: bottom;">Transfer You Number</label></div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-2" style="text-align:left;vertical-align: bottom;">
                                                <div class="form-check-inline">
                                                    <input type="radio" name="transfer_number" value="yes" id="transferNo" class="form-check-input">
                                                    <label class="form-check-label" for="credit">Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2" style="text-align:left;">
                                                <div class="form-check-inline">
                                                    <input type="radio" name="transfer_number" value="no" id="transferNo" class="form-check-input" checked>
                                                    <label class="form-check-label" for="credit">No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-8" style="text-align:left;"></div>
                                        </div>
                                        <div id="show_if_transfer_number" style="padding-top:10px;display:none;">
                                            <ul>
                                                <li>If your current service provider is not listed below, we will not be able to proceed with your request. </li>
                                                <li>We will require a copy of your latest telephone bill - we'll send you instructions on how to do this</li>
                                                <li>Your current service must remain active until your request has completed</li>
                                                <li>You will be allocated a temporary contact number until we hear further regarding the status of your request</li>
                                                <li>If you have a preferred date we will do our best to achieve this, however, we cannot guarantee this due to circumstances beyond our control. </li>
                                            </ul>
                                            <div class="form-row" style="padding-bottom:10px;">
                                                <label class="col-sm-3 control-label pull-left" for="cur_service_provdr"><b>Who is your current service provider?</b> </label>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control input-sm" name="cur_service_provdr" id="cur_service_provdr">
                                                </div>
                                            </div>
                                            <div class="form-row" style="padding-bottom:10px;">
                                                <label class="col-sm-3 control-label pull-left" for="what_no_wish_to_transfer"><b>What number do you wish to transfer?</b> </label>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control input-sm" name="what_no_wish_to_transfer" id="what_no_wish_to_transfer" >
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-row" style="padding-bottom:10px;">
                                                <label class="col-sm-3 control-label pull-left" for="what_addr_wish_to_transfer"><b>What address are you transferring the number from?</b> </label>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control input-sm" name="what_addr_wish_to_transfer" id="what_addr_wish_to_transfer" >
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-row" style="padding-bottom:10px;">
                                                <label class="col-sm-3 control-label pull-left" for="preferred_transfer_date"><b>Preferred transfer date?</b> </label>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-7">
                                                    <input type="date" class="form-control input-sm" name="preferred_transfer_date" id="preferred_transfer_date">
                                                    <label><input type="checkbox" name="preferred_transfer_date_asap" value="yes"> ASAP</label>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="form-row" style="padding-bottom:10px;">
                                                <label class="col-sm-3 control-label pull-left" for=""><b>Would you like to transfer a 2nd number?</b> </label>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-7">
                                                    <div class="radio">
                                                        <label><input type="radio" name="transfer_second_no" value="yes">Yes</label>
                                                        <label><input type="radio" name="transfer_second_no" value="no" checked>No</label>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <h5>Choose Your Voice Plan</h5>
                                    <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">All our broadband services are completely unlimited leaving you to download as much as like. If you don't need a phoneline,
                                        we offer a great rage of broadband only services.</label>
                                    <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">Please pick from one of our exciting services below :</label><br>
                                    <div class="">
                                        <table class="table tablepack">
                                            <thead>
                                                <tr>
                                                    <th>Voice packages </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding-top: 4px;padding-bottom: 4px;">
                                                        <div class="form-check">
                                                            <input type="radio" id="voice5" name="voice_package" value="None - £ 0.00" data-name="Voice Plan None" data-price="0.00" class="form-check-input" onclick="transfernoDiv()" checked>
                                                            <label class="form-check-label" for="credit"><b>None</b>
                                                                <br>
                                                                <!--<span style="color:#6F6F6F;font-size:14px;">160 Mbps download |30 Mbps upload | Unlimited
                                                </span>--></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 4px;padding-bottom: 4px;">
                                                        <div class="form-check">
                                                            <input type="radio" id="voice1" name="voice_package" value="Pay as you go - £ 4.50" data-name="Pay as you go" data-price="4.50" class="form-check-input" onclick="transfernoDiv()">
                                                            <label class="form-check-label" for="credit"><b>Pay as you go £4.50 Incl.Vat</b> per month
                                                                <br><span>Same as broadband contract
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 4px;padding-bottom: 4px;">
                                                        <div class="form-check">
                                                            <input type="radio" id="voice2" name="voice_package" value="Weekend Bundle - £ 6.99" data-name="Weekend Bundle" data-price="6.99" class="form-check-input" onclick="transfernoDiv()">
                                                            <label class="form-check-label" for="credit"><b>Weekend Bundle £6.99 Incl.Vat</b> per month
                                                                <br><span>Same as broadband contract
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="padding-top: 4px;padding-bottom: 4px;">
                                                        <div class="form-check">
                                                            <input type="radio" id="voice3" name="voice_package" value="Talk UK - £ 9.80" data-name="Talk UK" data-price="9.80" class="form-check-input" onclick="transfernoDiv()">
                                                            <label class="form-check-label" for="credit"><b>Talk UK £9.80 Incl.Vat</b> per month
                                                                <br><span>Same as broadband contract
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <!-- SECTION 3 -->
                                    <div class="form-section">
                                    <h3>Mobile</h3>
                                    <div id="ss" style="display:none;">
                                        <h5>Port Your Mobile Number</h5>
                                        <label style="padding:10px;padding-top:10px;text-align:justify;">
                                            Would you like to migrate/port your existing mobile number for free?</label><br>
                                        <div class="form-row" style="padding-left:10px;">
                                            <div class="col-md-6" style="padding-bottom:10px;">
                                                <div class="form-check-inline">
                                                    <input type="radio" name="port_no" value="yes" class="form-check-input">
                                                    <label class="form-check-label" for="credit">Yes
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" name="port_no" value="no" class="form-check-input" checked>
                                                    <label class="form-check-label" for="credit">No
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                        </div>
                                        <div id="show_if_port_mobile_no" style="display:none;">
                                            <div class="form-row" style="padding-bottom:15px;">
                                                <label class="col-sm-3 control-label pull-left" for="cur_mobile_number">Mobile number
                                                    <!-- <span class="error">*</span> --></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control input-sm" name="cur_mobile_number" id="cur_mobile_number">
                                                </div>
                                            </div>
                                            <div class="form-row" style="padding-bottom:15px;">
                                                <label class="col-sm-3 control-label pull-left" for="cur_pac_code">PAC code
                                                    <!-- <span class="error">*</span> --></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control input-sm" name="cur_pac_code" id="cur_pac_code">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Choose Your Mobile Sim Plans</h5>
                                    <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">We have a wide range of O2 Mobile Sim Plans to choose from:</label>
                                    <div class="">
                                        <table class="t" style="width:40%;box-shadow:none;border: none;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check" style="margin-left: 5px;">
                                                            <input type="radio" class="form-check-input" id="same-address" name="sim">
                                                            <label class="form-check-label" for="same-address">eSIM</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check" style="margin-left: 5px;">
                                                            <input type="radio" class="form-check-input" id="same-address" name="sim" checked>
                                                            <label class="form-check-label" for="same-address">
                                                                Standard SIM</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br><br>
                                    <div class="">
                                        <table class="table tablepack">
                                            <thead>
                                                <tr>
                                                    <th>Mobile packages </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check-inline d-flex">
                                                            <input type="radio" id="mobileplan1" name="mobile_plan" class="mob_plan" value="None" data-name="Mobile Plan" data-price="0.00" class="form-check-input" onclick="portnoDiv()" checked>
                                                            <label class="form-check-label" for="credit"><b>None</b>
                                                                <br>
                                                                <!--<span style="color:#6F6F6F;font-size:14px;">160 Mbps download |30 Mbps upload | Unlimited
                                                        </span>--></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check-inline d-flex">
                                                            <input type="radio" id="mobileplan2" name="mobile_plan" class="mob_plan" value="O2 Unlimited Special" data-name="O2 Unlimited Special" data-price="18.99" class="form-check-input" onclick="portnoDiv()">
                                                            <label class="form-check-label" for="credit"><b>O2 Unlimited Special - £18.99 Incl.Vat</b> per month
                                                                <br><span>Unlimited Mobile Data| Unlimited Minutes | Unlimited Text
                                                                    5G data
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check-inline d-flex">
                                                            <input type="radio" id="mobileplan3" name="mobile_plan" class="mob_plan" value="O2 40 GB" data-name="O2 40 GB" data-price="17.00" class="form-check-input" onclick="portnoDiv()">
                                                            <label class="form-check-label" for="credit"><b>O2 40 GB - £17.00 Incl.Vat</b> per month
                                                                <br><span>40 GB Mobile Data| Unlimited Minutes | Unlimited Text
                                                                    5G data
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check-inline d-flex">
                                                            <input type="radio" id="mobileplan4" name="mobile_plan" class="mob_plan" value="O2 20 GB" data-name="O2 20 GB" data-price="12.50" class="form-check-input" onclick="portnoDiv()">
                                                            <label class="form-check-label" for="credit"><b>O2 20 GB - £12.50 Incl.Vat</b> per month
                                                                <br><span>20 GB Mobile Data| Unlimited Minutes | Unlimited Text
                                                                    5G data
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check-inline d-flex">
                                                            <input type="radio" id="mobileplan5" name="mobile_plan" class="mob_plan" value="O2 5 GB" data-name="O2 5 GB" data-price="10.50" class="form-check-input" onclick="portnoDiv()">
                                                            <label class="form-check-label" for="credit"><b>O2 5 GB - £10.50 Incl.Vat</b> per month
                                                                <br><span>5 GB Mobile Data| Unlimited Minutes | Unlimited Text
                                                                    4G data
                                                                </span></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--<h5>LEBARA: Following countries included in international mins.</h5>

                                <span style="color:#6F6F6F;font-size:14px;">Australia, Austria, Belgium, Bulgaria, Canada, China, Croatia, Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hong Kong, Hungary, Iceland, India, Ireland, Italy, Latvia, Lithuania, Luxembourg, Malaysia, Malta, Netherlands, New Zealand, Norway, Poland, Portugal, Romania, Singapore, Slovakia, Slovenia, Spain, Sweden, Switzerland, Thailand, United States</span>

                                        --><br><br>
                                
                                </div>

                                <!-- section5 -->
                                <div class="form-section">
                                <h3>Router</h3>
                                    <h5>Select Your Router</h5>
                                    <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">Great, that is your package sorted</label>
                                    <!--<label id="deliveryrou" style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">Router Delivery Charge : £ 6.25</label>-->
                                    <br>
                                    <div class="form-row" style="padding-left:10px;">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input type="radio" id="routertype" class="form-check-input" name="routertype" value='Router Delivery Charge' data-name="Router Delivery Charge" data-price="6.25" onclick="deliveryshow()">
                                                <label class="form-check-label" for="same-address" style="font-weight: 700;">I require a router </label><br> 
                                                <label label id="deliveryrou" style="font-weight: normal;">Router Delivery Charge : £ 6.25 </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div><br>
                                    <div class="form-row" style="padding-left:10px;">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input type="radio" id="routertypeno" class="form-check-input" name="routertype" value="Free Router" data-name="Router Delivery Charge" data-price="00.00" onclick="deliveryshow()">
                                                <label class="form-check-label" for="same-address" style="font-weight: 700;">I do not require a router</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div><br>
                                    <div class="form-row">
                                        <label for="firstName" style=" font-weight: 400;">Optional Extras :</label>
                                    </div>
                                    <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">Note: Optional Routers purchased from Link Broadband can only be returned if they are defective.</label>
                                    <br>
                                    <div class="">
                                        <table class="table tablepack table-router">
                                            <thead>
                                                <tr>
                                                    <th class="mesh-wifi">Mesh WiFi system for download over 100Mbps</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraT" id="re1" value="Tenda Nova MW5G-2 Whole Home Mesh Wi-Fi System, 2500sq² Wi-Fi Coverage, £81.99" data-name="Tenda Nova MW5G-2 " data-price="81.99" onchange="valueChanged()">
                                                                &nbsp;&nbsp;Tenda Nova MW5G-2 Whole Home Mesh Wi-Fi System, 2500sq² Wi-Fi Coverage, £81.99</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraAL" id="re2" value="Asus Lyra Mini AC1300 Whole-home Wi-fi System £112.00" data-price="112.00" data-name="Asus Lyra Mini AC1300" onchange="valueChanged1()">
                                                                &nbsp;&nbsp;Asus Lyra Mini AC1300 Whole-home Wi-fi System £112.00</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraAC" id="re3" value="Asus (ZenWiFi AC Mini (CD6)) AC1500 Wireless Dual Band Mesh Mini System, 2 Pack (Router & Node), AiMesh, AiProtection £150.00" data-price="150.00" data-name="Asus (ZenWiFi AC Mini (CD6))" onchange="valueChanged2()">
                                                                &nbsp;&nbsp;Asus (ZenWiFi AC Mini (CD6)) AC1500 Wireless Dual Band Mesh Mini System, 2 Pack (Router & Node), AiMesh, AiProtection £150.00</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraL" id="re4" value="Linksys Velop Intelligent Whole Home Wi-fi Mesh System 2-pack AC2400 £165.00" data-price="165.00" class="form-check-input" data-name="Linksys Velop Intelligent" onchange="valueChanged3()">
                                                                &nbsp;&nbsp;Linksys Velop Intelligent Whole Home Wi-fi Mesh System 2-pack AC2400 £165.00</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table tablepack table-router">
                                            <thead>
                                                <tr>
                                                    <th>Optional Routers</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraW" id="re5" value="Asus (RT-AC57U) AC1200 (300+867) Wireless Dual Band GB Cable Router, 4-Port, USB 2.0, 4K Video Streaming £81.99" data-price="81.99" data-name="Asus (RT-AC57U) AC1200 (300+867)" onchange="valueChanged4()">
                                                                &nbsp;&nbsp;Asus (RT-AC57U) AC1200 (300+867) Wireless Dual Band GB Cable Router, 4-Port, USB 2.0, 4K Video Streaming £81.99</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraD" id="re6" value="Asus (RT-AC85P) AC2400 (600+1733) Wireless Dual Band Gaming Cable Router, Dual Core CPU, MU-MIMO, USB 3.0 £122.70" data-price="122.70" data-name="Asus (RT-AC85P) AC2400 (600+1733)" onchange="valueChanged5()">
                                                                &nbsp;&nbsp;Asus (RT-AC85P) AC2400 (600+1733) Wireless Dual Band Gaming Cable Router, Dual Core CPU, MU-MIMO, USB 3.0 £122.70</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr style="color: #0a0c0c !important;">
                                                    <td>
                                                        <div class="form-row inline">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="router_extraB" id="re7" value="Asrock (G10) Gaming AC2600 (800+1733) Wireless Dual Band Cable Router & H2R HDMI Dongle Router, USB 3.0 £124.00" data-price="124.00" data-name="Asrock (G10) Gaming AC2600 (800+1733)" onchange="valueChanged6()">
                                                                &nbsp;&nbsp;Asrock (G10) Gaming AC2600 (800+1733) Wireless Dual Band Cable Router & H2R HDMI Dongle Router, USB 3.0 £124.00</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="t table-router" style="box-shadow: none;">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <h5 style="background-color:#00C1BD;color:white;">Managed router installation</h5>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="managed_router" id="re11" class="extrRouter" value="Managed router installation 70.00" data-price="70.00" data-name="Router Installation" onchange="installation()">
                                                            <label class="form-check-label" for="same-address">Managed router installation £70.00</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" name="remote_it" id="re12" class="extrRouter" value="Remote IT support" data-name="Remote IT support" data-price="15.00" onchange="itsupport()">
                                                            <label class="form-check-label" for="same-address">
                                                                Remote IT support : £15 / hr</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="">
                                        <h5 style="background-color:#00C1BD;color:white;">Communication</h5>
                                        <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">
                                            Linkbroadband will use the contact details you have provided to us to contact you when necessary regarding important information relating to your telephone and broadband services, account or terms of contract.</label>
                                        <br>
                                        <h5 style="background-color:#00C1BD;color:white;">Communication</h5>
                                        <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">
                                            From time to time we would like to send you information on news and community events that may be happening in your area. Please
                                            select your preferred contact method(s) from the options below:</label>
                                        <br>
                                        <div class="form-row inline" style="padding-left:10px;">
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input type="checkbox" name="phone" value="phone" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Phone</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="email" value="email" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Email</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="post" value="post" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Post</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="text" value="text" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Text</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="none" value="none" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        None</label>
                                                </div>
                                            </div>
                                        </div><br>
                                        <h5 style="background-color:#00C1BD;color:white;">Marketing Communications</h5>
                                        <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">
                                            We would like to also contact you about products and services we think you’d like. Please select your preferred contact method(s)
                                            from the options below:</label>
                                        <br>
                                        <div class="form-row" style="padding-left:10px;">
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <input type="checkbox" name="Mphone" value="phone" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Phone</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="Memail" value="email" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Email</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="Mpost" value="post" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Post</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="Mtext" value="text" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        Text</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" name="Mnone" value="none" class="form-check-input">
                                                    <label class="form-check-label" for="same-address">
                                                        None</label>
                                                </div><br>
                                            </div>
                                        </div>
                                        <h5 style="background-color:#00C1BD;color:white;">Vulnerabilities</h5>
                                        <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">
                                            Are there any disabilities or vulnerabilities that you would like to make us aware of? This will ensure that we can support you as much as possible when we need to contact you.</label>
                                        <br>
                                        <div class="form-row" style="padding-left:10px;">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input type="radio" name="vulnerabilities" value="yes" id="vulnerabilities" class="form-check-input" onclick="vul()">
                                                    <label class="form-check-label" for="credit">Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input type="radio" name="vulnerabilities" value="no" id="vulnerabilitiesno" class="form-check-input" onclick="vul()" checked>
                                                    <label class="form-check-label" for="credit">No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row" style="padding-left:10px;">
                                            <div class="col-md-12">
                                                <div id="vulnerabilities_details" style="display:none;">
                                                    <br>
                                                    <input type="text" class="form-control" name="vulnerabilities_details">
                                                </div>
                                            </div>
                                        </div><br>
                                        <h5 style="background-color:#00C1BD;color:white;">Battery Back-ups</h5>
                                        <label style="padding:20px;padding-left:12px;padding-right: 12px;padding-top:10px;text-align:justify; font-weight: 400;">
                                            From the information that you have provided to us, we think that you are eligible to have a battery back-up installed at your property. This will be provided free of charge and ensure that you still have access to your phone line to contact the emergency services in the event of a power outage.Do you wish to request a battery back-up unit?</label>
                                        <br>
                                        <div class="form-row" style="padding-left:10px;">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input type="radio" name="battery_bkp" id="battery_bkp" value="yes" class="form-check-input" onclick="backup()">
                                                    <label class="form-check-label" for="credit">Yes
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input type="radio" name="battery_bkp" id="battery_bkpno" value="no" class="form-check-input" onclick="backup()" checked>
                                                    <label class="form-check-label" for="credit">No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="battery_bkp_amnt" class="batery-bkp-amnt" style="display:none;">
                                        <p>Battery backup unit self-install <b>£ 55.00</b></p>
                                    </div>
                                    <br>

                                </div>

                                <!-- SECTION 6 -->
                                <div class="form-section">
                                <h3>Billing Details</h3>
                                    <h5>Your Order</h5><br>
                                    <table class="tt" style="box-shadow: none;">
                                        <tbody>
                                            <tr class="space-row">
                                                <th class="ttt">Title *</th>
                                                <td class="ttt"><select name="title" class="form-select" id="title" style="padding: 12px;">
                                                        <option value="">Select your Title</option>
                                                        <option value="mr">Mr</option>
                                                        <option value="ms">Ms</option>
                                                        <option value="mrs">Mrs</option>
                                                        <option value="dr">Dr</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">First Name *</th>
                                                <td class="ttt"><input type="text" class="form-control" name="fname" value="{{old('fname')}}"  id="firstname" placeholder="" >
                                             
                                                </td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Last Name *</th>
                                                <td class="ttt"><input type="text" name="lname" value="{{old('lname')}}" class="form-control" id="lastname" placeholder="" ></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Email Address *</th>
                                                <td class="ttt"><input type="email" name="email1" value="{{old('email1')}}" class="form-control" id="email" placeholder=""></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Phone *</th>
                                                <td class="ttt"><input type="text" name="phone1" class="form-control" id="phone" placeholder=""></td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <h5>Installation Address</h5><br>
                                    <table class="tt" style="box-shadow: none;">
                                        <tbody>
                                            <tr class="space-row">
                                                <th class="ttt">Address line 1 *</th>
                                                <td class="ttt"><input type="text" name="add1" class="form-control" id="add1" placeholder="">
                                                </td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Address line 2</th>
                                                <td class="ttt"><input type="text" name="add2" class="form-control" id="add2" placeholder=""></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Address line 3</th>
                                                <td class="ttt"><input type="text" name="add3" class="form-control" id="add3" placeholder=""></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Town / City *</th>
                                                <td class="ttt"><input type="text" name="city" class="form-control" id="city" placeholder=""></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Postcode *</th>
                                                <td class="ttt"><input type="text" name="pcode" class="form-control" id="postcode" placeholder="" ></td>
                                            </tr>
                                            <tr class="space-row">
                                                <th class="ttt">Router Delivery address<span style="color:#6F6F6F;font-size:14px;">(if diff from installation address) *</span></th>
                                                <td class="ttt"> <input type="radio" name="router_delivery_address" value="yes" class="form-check-input">
                                                    <label class="form-check-label" for="credit">Yes
                                                    </label>
                                                    <input type="radio" name="router_delivery_address" value="no" class="form-check-input" style="margin-left: 10px;" checked>
                                                    <label class="form-check-label" for="credit">No
                                                    </label></td>
                                            </tr>
                                            <tr class="space-row router_delivery_addrs" style="display:none;">
                                                <th class="ttt">Address linee 1 *</th>
                                                <td class="ttt"><input type="text" class="form-control" id="router_addressline1" name="router_addressline1">
                                                </td>
                                            </tr>
                                            <tr class="space-row router_delivery_addrs" style="display:none;">
                                                <th class="ttt">Address line 2</th>
                                                <td class="ttt"><input type="text" class="form-control" id="router_addressline2" name="router_addressline2"></td>
                                            </tr>
                                            <tr class="space-row router_delivery_addrs" style="display:none;">
                                                <th class="ttt">Address line 3</th>
                                                <td class="ttt"><input type="text" class="form-control" id="router_addressline3" name="router_addressline3"></td>
                                            </tr>
                                            <tr class="space-row router_delivery_addrs" style="display:none;">
                                                <th class="ttt">Town / City *</th>
                                                <td class="ttt"><input type="text" class="form-control" id="router_town" name="router_town"></td>
                                            </tr>
                                            <tr class="space-row router_delivery_addrs" style="display:none;">
                                                <th class="ttt">Postcode *</th>
                                                <td class="ttt"><input type="text" class="form-control" id="router_postcode" name="router_postcode"></td>
                                            </tr>
                             
                                </tr>
                                <tr class="space-row">
                                    <th class="ttt">Billing address<span style="color:#6F6F6F;font-size:14px;">(if diff from installation address) *</span>
                                    </th>
                                    <td class="ttt"> <input type="radio" name="billing_diff_address_1" value="yes" class="form-check-input">
                                        <label class="form-check-label" for="credit">Yes
                                        </label>
                                        <input type="radio" name="billing_diff_address_1" value="no" class="form-check-input" style= "margin-left: 10px;" checked>
                                        <label class="form-check-label" for="credit">No
                                        </label></td>
                                <tr class="space-row diff_addrs_billing" style="display:none;">
                                    <th class="ttt">Address line 1 *</th>
                                    <td class="ttt"><input type="text" class="form-control" id="billing_addressline1" name="billing_addressline1">
                                    </td>
                                </tr>
                                <tr class="space-row diff_addrs_billing" style="display:none;">
                                    <th class="ttt">Address line 2</th>
                                    <td class="ttt"><input type="text" class="form-control" id="billing_addressline2" name="billing_addressline2"></td>
                                </tr>
                                <tr class="space-row diff_addrs_billing" style="display:none;">
                                    <th class="ttt">Address line 3</th>
                                    <td class="ttt"><input type="text" class="form-control" id="billing_addressline3" name="billing_addressline3"></td>
                                </tr>
                                <tr class="space-row diff_addrs_billing" style="display:none;">
                                    <th class="ttt">Town / City *</th>
                                    <td class="ttt"><input type="text" class="form-control" id="billing_town" name="billing_town" ></td>
                                </tr>
                                <tr class="space-row diff_addrs_billing" style="display:none;">
                                    <th class="ttt">Postcode *</th>
                                    <td class="ttt"><input type="text" class="form-control" id="billing_postcode" name="billing_postcode" ></td>
                                </tr>
                                </tr>
                                <!--<tr class="space-row">
                                    <th class="ttt">Required Activation Date *</th>
                                    <td class="ttt"><input type="date" name="acvdate" class="form-control" id="acvdate" placeholder=""  >
                                    </td>
                                </tr>-->
                                <tr class="space-row">
                                    <th class="ttt">Preferred Direct Debit Date *</th>
                                    <td class="ttt"><select class="form-select" id="dddate" name="debit_date" style="padding: 12px;">
                                            <option value="">Select your Preferred Direct Debit date *</option>
                                            <option value="1st day of the month">1st day of the month</option>
                                            <option value="2nd day of the month">2nd day of the month</option>
                                            <option value="3rd day of the month">3rd day of the month</option>
                                            <option value="4th day of the month">4th day of the month</option>
                                            <option value="5th day of the month">5th day of the month</option>
                                            <option value="10th day of the month">10th day of the month</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="space-row">
                                    <th class="ttt">Notes</th>
                                    <td class="ttt"><input type="textarea" name="billing_notes" class="form-control" id="note">
                                        <span style="color:#6F6F6F;font-size:14px;">* Migration customer : 14 days to move seamlessly from the current supplier.</span>
                                    </td>
                                </tr>
                                <tr class="space-row">
                                    <td class="ttt"><input type="checkbox" id="terms1" name="terms1" class="form-check-input">
                                        <label class="form-check-label" for="plan1">I accept terms and conditions. *</label>
                                    </td>
                                </tr>
                                <tr class="space-row">
                                    <td class="ttt"><input type="checkbox" id="terms2" name="terms2" class="form-check-input">
                                        <b><label id="contractlength" class="form-check-label"></label> <span class="error">*</span></b><br>
                                        <input type="hidden" name="initial_contractlength" id="initial_contractlength">
                                        
                                    </td>
                                </tr>
                                <tr class="space-row">
                                    <td class="ttt"><input type="checkbox" id="terms3" name="terms3" class="form-check-input" required>
                                        <label class="form-check-label" for="plan3">I accept the privacy policy. *
                                        </label> </td>
                                </tr>
                                </tbody>
                                </table>
                                    </div>

                                    <!-- SECTION7 -->
                                    <div class="form-section">
                                    <h3>Payments</h3>
                                <h5>Order Summary</h5><br>
                                <table class="tt" style="box-shadow: none; background-color: #e6f8f8;">
                                     <tr class="space-row">
                                            <th class="ttt" style="font-weight: 700" padding="0px 20px;">Details</th>
                                            <th class="ttt" style="font-weight: 700">Price</th>
                                        </tr>
                                    <tbody id="order_summary2" style="font-weight: 400;">
                    
                                        <tr id="bb_plan11"></tr>
                                        <tr id="vv_plan11"></tr>
                                        <tr id="transfer_no_chrg11"></tr>
                                        <tr id="mob_plan_amount11"></tr>
                                        <!--<tr id="rt_extr_plan111"></tr>
                                        <tr id="rt_extr_plan211"></tr>
                                        <tr id="rt_extr_plan311"></tr>
                                        <tr id="rt_extr_plan411"></tr>
                                        <tr id="rt_extr_plan511"></tr>
                                        <tr id="rt_extr_plan611"></tr>
                                        <tr id="rt_extr_plan711"></tr>
                                        <tr id="routercharge11"></tr>
                                        <tr id="bbkp_chrg11"></tr>
                                        <tr id="router_install11"></tr>
                                        <tr id="it_support11"></tr>
                                        <tr id="dl_chrg11"></tr>-->
                                    </tbody>
                                   
                                    <tr>
                                        <th style="padding-left: 20px; padding-bottom: 20px; padding-top: 20px;">Recurring Charges</th><td id="calculated_total_amount11" style="padding-left: 20px; color: #00c1be; font-weight: 700; padding-bottom: 20px; padding-top: 20px;"></td>
                                    </tr>
                                </table>
                                <input type="hidden" name="all_order_details" id="all_order_details">
                                <input type="hidden" name="order_total" id="order_total">

                                    </div>
                                </div>
                                <div class="form-navigation">
                                    <button type="button" class="previous btn btn-info" style="float:left;">Previous
                                    </button>
                                    <button type="button" class="nextbtn btn btn-info" style="float:right;" onclick="scrollToTop();">Next
                                    </button>
                                </div>
                               <div id="message-error" class="error-message-style"></div>
                            <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.8 -->

                </div>
                <div class="col-md-4">
                <div class="wizard-image" style="background-color:#E6F8F8;">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="margin-left:10px;width:100%;margin-top:30px;margin-right:10px;">
                    <h1 class="r-head">Payments</h1>
                    <ul class="list-group " id="sidetab">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <table id="product-details" style="box-shadow:none;background-color:white;border-collapse: collapse;border:none;font-size:13px;">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th class="price-table-header">Price</th>
                                    </tr>
                                </thead>
                                <tbody id="order_summary">
                                    <tr id="connection_plan">
                                        <th>New Connection
                                        </th>
                                        <td class="row2 td-content">£30.00</td>
                                    </tr>
                                    <tr id="bb_plan"></tr>
                                    <tr id="vv_plan"></tr>
                                    <tr id="transfer_no_chrg"></tr>
                                    <tr id="mob_plan_amount"></tr>
                                    <tr id="rt_extr_plan1"></tr>
                                    <tr id="rt_extr_plan2"></tr>
                                    <tr id="rt_extr_plan3"></tr>
                                    <tr id="rt_extr_plan4"></tr>
                                    <tr id="rt_extr_plan5"></tr>
                                    <tr id="rt_extr_plan6"></tr>
                                    <tr id="rt_extr_plan7"></tr>
                                    <tr id="routercharge"></tr>
                                    <tr id="bbkp_chrg"></tr>
                                    <tr id="router_install"></tr>
                                    <tr id="it_support"></tr>
                                    <tr id="dl_chrg"></tr>
                                </tbody>
                            </table>
                        </li>
                        <center> <hr class="hr-divide-list"> </center>
                        <li class="list-group-item d-flex justify-content-between">
                            <span style="font-weight: 700;">Total Due Today </span>
                            <span id="calculated_total_amount"></span>
                            <input type="hidden" name="due_order_details" id="due_order_details">
                            <input type="hidden" name="due_order_total" id="due_order_total">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-navigation">
            <button type="submit" id="formSubmit" class="btn btn-success" style="float:right;">Stripe </button>
            <button type="submit" id="GoCardlessformSubmit" class="btn btn-success" style="float:right;">Go Cardless </button>

    </div>
                </div>
                </form>
                <!-- /.row-->

            </div>
        </div>


    </section>

    

    <footer id="fh5co-footer"
        style="background-color: #34AFAC;margin-bottom:0px !important;padding-bottom:0px !important;">

        <div class="container-fluid" style="color:white;margin-bottom:0px !important;padding-bottom:0px !important;">
            <div class="row ">

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <img src="assets/images/logofooter.png" style="width:119px;height:76px;">
                    <h3 style="margin-top:30px;">OPENING TIME</h3>
                    <ul class="fh5co-footer-links">
                        <li>Mon - Fri: 8am to 6pm
                        </li>
                        <li>Sat: 10am to 5pm</li>

                    </ul>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>ADDRESS</h3>
                    <ul class="fh5co-footer-links">
                        <li>Kemp House,
                            152-160, City Road,
                            London, EC1V 2NX.</li>
                        <li>Dartford Business Park,
                            Victoria Road,
                            Dartford, DA1 5FS, UK</li>

                    </ul>

                </div>

                <div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget" style="color:white;">
                    <h3>QUICK LINKS</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="termsandconditions.html">Terms And Condition</a></li>
                        <li><a href="privacy.html">Privacy Policy</a></li>
                        <li><a href="tc-for-digital-phone-and-fibre-broadband.html">T&C For Digital Phone And
                                Fibre Broadband</a></li>
                        <li><a href="code-of-complaints.html">Code Of Complaints</a></li>
                        <li><a href="https://www.royalmail.com/track-your-item#/">Track Your Router</a></li>
                        <li><a href="https://pay.gocardless.com/flow/RE001P69K2PYRCX7CFTCV1VQ8VMME257">Set Up Your
                                Direct Debit</a></li>
                    </ul>

                </div>

                <div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>ALL SERVICES</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index12.html">Home Broadband</a></li>
                        <li><a href="business.html">Business Broadband</a></li>
                        <li><a href="hardware.html">Hardwares</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="copy">
                    <div class="copy1">

                        <p>Copyright © 2022 Link Broadbands. All Rights Reserved.</p>


                    </div>
                    <div class="copy2" style="color:white;">

                        <a href="https://www.facebook.com/uklinkbroadband/"><i class="fa fa-facebook"
                                style="background-color:transparent;color:white;"></i></a><a
                            href="https://www.instagram.com/uklinkbroadband/"><i class="fa fa-instagram"
                                style="background-color:transparent;color:white;"></i></a><a
                            href="https://twitter.com/linkbroadband"><i class="fa fa-twitter"
                                style="background-color:transparent;color:white;"></i></a><a
                            href="https://www.linkedin.com/company/link-broadbands/"><i class="fa fa-linkedin"
                                style="background-color:transparent;color:white;"></i></a>


                    </div>
                </div>
            </div>

        </div>
    </footer>

    <div class="gototop js-top">
        <a href="#"><i class="fa fa-arrow-up" style="background:transparent;color:white;" onclick="scrollToTop();"></i></a>
    </div>
    <!-- jQuery -->
    <!-- jQuery Easing -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Waypoints -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="assets/js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Flexslider -->
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="assets/js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="assets/js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="assets/js/main.js"></script>
    <!-- dvkd -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <script>
        function scrollToTop() {
            window.scrollTo(0, 0);
        }
    </script>
    <script>
	   var today = new Date().toISOString().split('T')[0];
		document.getElementsByName("acvdate")[0].setAttribute('min', today);
		$('#acvdate').datepicker({
            beforeShowDay: checkoutdisableddays,
            dateFormat: 'dd-mm-yy',
            minDate: 1
            
        });
       /*  var today = new Date();
        const yesterday = new Date(today);
        yesterday.setDate(yesterday.getDate()+1);
        today.toDateString();
        yesterday.toDateString();
        $('#acvdate').datepicker({
            beforeShowDay: checkoutdisableddays,
            dateFormat: 'dd-mm-yy',
            minDate: yesterday
            
        });*/
        
    </script>
    <script>
        function closeNav() {
          document.getElementById('mySidenav').style.width = '0';
          document.getElementById('main').style.marginLeft = '0';
        }
function openNav() {
          document.getElementById('mySidenav').style.width = '250px';
          document.getElementById('main').style.marginLeft = '250px';
        }
		
var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName('mySlides');
        var dots = document.getElementsByClassName('dot');
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = 'none';
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(' active', '');
        }
        slides[slideIndex - 1].style.display = 'block';
        dots[slideIndex - 1].className += ' active';
        setTimeout(showSlides, 2000);
      }
	  
 var slideIndex = 1;
        showDivs(slideIndex);
        function plusDivs(n) {
          showDivs((slideIndex += n));
        }
        function currentDiv(n) {
          showDivs((slideIndex = n));
        }
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName('mySlides-two');
          var dots = document.getElementsByClassName('demo');
          if (n > x.length) {
            slideIndex = 1;
          }
          if (n < 1) {
            slideIndex = x.length;
          }
          for (i = 0; i < x.length; i++) {
            x[i].style.display = 'none';
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(' w3-red', '');
          }
          x[slideIndex - 1].style.display = 'block';
          dots[slideIndex - 1].className += ' w3-red';
        }
    </script>
    <script>
        $(document).ready(function() {
            var silder = $(".owl-carousel");
            silder.owlCarousel({
                autoplay: true,
                items: 1,
                center: false,
                nav: false,
                margin: 40,
                dots: false,
                opacity: 1,
                checkVisibility: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    575: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    991: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(function() {
                var $sections = $('.form-section');
                function navigateTo(index) {
                    $sections.removeClass('current').eq(index).addClass('current');
                    $('.form-navigation .previous').toggle(index > 0)
                    var atTheEnd = index >= $sections.length - 1;
                    $('.form-navigation .nextbtn').toggle(!atTheEnd);
                    $('.form-navigation [type=submit]').toggle(atTheEnd);
                }
                function curIndex() {
                    return $sections.index($sections.filter('.current'));
                }
                $('.form-navigation .previous').click(function() {
                    navigateTo(curIndex() - 1);
                });
                $('.form-navigation .nextbtn').click(function() {
                    $('#broadband-form').parsley().whenValidate({
                        group: 'block-' + curIndex()
                    }).done(function() {
                        navigateTo(curIndex() + 1);
                    });
                });
                $sections.each(function(index, section) {
                    $(section).find(':input').attr('data-parsley-group', 'block-' + index);
                });
                navigateTo(0);
            });
        });
    </script>
    <script>
        function portnoDiv() {
            var chkYes = document.getElementById("mobileplan2");
            var chkYes1 = document.getElementById("mobileplan3");
            var chkYes2 = document.getElementById("mobileplan4");
            var chkYes3 = document.getElementById("mobileplan5");
            var chkYes4 = document.getElementById("mobileplan1");
            var dvtext = document.getElementById("ss");
            dvtext.style.display = chkYes.checked||chkYes1.checked||chkYes2.checked||chkYes3.checked? "block" : "none";
            dvtext.style.display = chkYes4.checked? "none" : "block";
        }
        function transfernoDiv() {
            var chkYes = document.getElementById("voice1");
            var chkYes1 = document.getElementById("voice2");
            var chkYes2 = document.getElementById("voice3");
            var chkYes4 = document.getElementById("voice5");
            var dvtext = document.getElementById("s");
            dvtext.style.display = chkYes.checked||chkYes1.checked||chkYes2.checked? "block" : "none";
            dvtext.style.display = chkYes4.checked? "none" : "block";
        }
        var total=0;
        var newTotal = 0.0;
    </script>
    <script type="text/javascript">
        function calctotal() {
            var result = 0;
            $('tbody#order_summary > tr').each(function(index, tr) {
                if (tr.innerHTML != '') {
                    var order = tr.cells[0].innerHTML;
                    var amount = tr.cells[1].innerHTML;
                    //console.log(tr.cells[1].innerHTML.split('£'));
                    //orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                    var amount1 = tr.cells[1].innerHTML.split("£")[1];
                    if ((amount1 != undefined)) {
                        //var thisNumber = parseFloat(amount1);
                        result += parseFloat(amount1);
                        //$("#calculated_total_amount").html("<th>" + order + "</th><td>£"+result+"</td>");
                        $("#calculated_total_amount").html("<td>£" + result.toFixed(2) + "</td>");
                        /*if (!isNaN(thisNumber))
                        result += thisNumber;*/
                    }
                }
            });
        }
            function calctotal1() {
                var result = 0;
                $('tbody#order_summary1 > tr').each(function(index, tr) {
                    if (tr.innerHTML != '') {
                        var order = tr.cells[0].innerHTML;
                        var amount = tr.cells[1].innerHTML;
                        //console.log(tr.cells[1].innerHTML.split('£'));
                        //orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                        var amount1 = tr.cells[1].innerHTML.split("£")[1];
                        if ((amount1 != undefined)) {
                            //var thisNumber = parseFloat(amount1);
                            result += parseFloat(amount1);
                            //$("#calculated_total_amount").html("<th>" + order + "</th><td>£"+result+"</td>");
                            $("#calculated_total_amount1").html("<td>£" + result.toFixed(2) + "</td>");
                            /*if (!isNaN(thisNumber))
                            result += thisNumber;*/
                        }
                    }
                });
            }
            function calctotal2() {
                var result = 0;
                $('tbody#order_summary2 > tr').each(function(index, tr) {
                    if (tr.innerHTML != '') {
                        var order = tr.cells[0].innerHTML;
                        var amount = tr.cells[1].innerHTML;
                        //console.log(tr.cells[1].innerHTML.split('£'));
                        //orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                        var amount1 = tr.cells[1].innerHTML.split("£")[1];
                        if ((amount1 != undefined)) {
                            //var thisNumber = parseFloat(amount1);
                            result += parseFloat(amount1);
                            //$("#calculated_total_amount").html("<th>" + order + "</th><td>£"+result+"</td>");
                            $("#calculated_total_amount11").html("£"+result.toFixed(2));
                            /*if (!isNaN(thisNumber))
                            result += thisNumber;*/
                        }
                    }
                });
            }
            function deliveryshow() {
                var chkYes = document.getElementById("routertype");
                var chkYes1 = document.getElementById("routertypeno");
                var dvtext = document.getElementById("deliveryrou");
                dvtext.style.display = chkYes1.checked ? "none" : "block";
                if ($('#routertype').is(":checked")) {
                    $("#dl_chrg").html("<th>" + 'Router Delivery Charge' + "</th><td>£" + '6.25' + "</td>");
                    $("#dl_chrg1").html("<th>" + 'Router Delivery Charge' + "</th><td>£" + '6.25' + "</td>");
                    $("#dl_chrg11").html("<th>" + 'Router Delivery Charge' + "</th><td>£" + '6.25' + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                } else {
                    $("#dl_chrg").html("<th>" + 'Router Delivery Charge' + "</th><td>£" + '0.00' + "</td>");
                    $("#dl_chrg1").html("<th>" + 'Router Delivery Charge' + "</th><td>£" + '0.00' + "</td>");
                    $("#dl_chrg11").html("<th>" + 'Router Delivery Charge' + "</th><td>£" + '0.00' + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                }
            }
            function backup() {
                var chkYes = document.getElementById("battery_bkpno");
                var dvtext = document.getElementById("battery_bkp_amnt");
                dvtext.style.display = chkYes.checked ? "none" : "block";
                if ($('#battery_bkp').is(":checked")) {
                    $("#router_install").html("<th>" + 'Battery Backup' + "</th><td>£" + '55.00' + "</td>");
                    $("#router_install1").html("<th>" + 'Battery Backup' + "</th><td>£" + '55.00' + "</td>");
                    $("#router_install11").html("<th>" + 'Battery Backup' + "</th><td>£" + '55.00' + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                } else {
                    $("#router_install").html("<th>" + 'Battery Backup' + "</th><td>£" + '0.00' + "</td>");
                    $("#router_install1").html("<th>" + 'Battery Backup' + "</th><td>£" + '0.00' + "</td>");
                    $("#router_install11").html("<th>" + 'Battery Backup' + "</th><td>£" + '0.00' + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                }
            }
            function vul() {
                var chkYes = document.getElementById("vulnerabilitiesno");
                var dvtext = document.getElementById("vulnerabilities_details");
                dvtext.style.display = chkYes.checked ? "none" : "block";
            }
            function ShowHideDiv() {
                var chkYes = document.getElementById("migration_connection");
                var chkf = document.getElementById("new_connection");
                var dvtext = document.getElementById("migration_connection_date_sel");
                dvtext.style.display = chkYes.checked ? "block" : "none";
                $('#connection_plan').html("<th>" + 'New Connection' + "</th><td style='text-align: right; font-weight: 700; color: #00c1be;'>£" + '30.00' + "</td>");
                $('#connection_plan1').html("<th>" + 'New Connection' + "</th><td>£" + '30.00' + "</td>");
                $('#connection_plan11').html("<th>" + 'New Connection' + "</th><td>£" + '30.00' + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            }
            function ShowHideDiv1() {
                var chkYes = document.getElementById("migration_connection");
                var chkf = document.getElementById("new_connection");
                var dvtext = document.getElementById("migration_connection_date_sel");
                dvtext.style.display = chkYes.checked ? "block" : "none";
                $('#connection_plan').html("<th>" + 'Migration Connection' + "</th><td style='text-align: right; font-weight: 700; color: #00c1be;'>£" + '0.00' + "</td>");
                $('#connection_plan1').html("<th>" + 'Migration Connection' + "</th><td>£" + '0.00' + "</td>");
                $('#connection_plan11').html("<th>" + 'Migration Connection' + "</th><td>£" + '0.00' + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            }
            function Showpack3() {
                //$('#3m').css('background-color', 'rgb(61 125 128)');
                var three = document.getElementById("3m");
                var six = document.getElementById("6m");
                var tweleve = document.getElementById("12m");
                var threetable = document.getElementById("3mshow");
                var sixtable = document.getElementById("6show");
                var twelvetable = document.getElementById("12show");
                var extra_name = "Router Delivery Charge";
                var extra_price = "6.25";
                sixtable.style.display = 'none';
                twelvetable.style.display = 'none';
                threetable.style.display = 'block';
                $('#routercharge').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '25.00' + "</td>");
                $('#routercharge1').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '25.00' + "</td>");
                $('#routercharge11').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '25.00' + "</td>");
                $('#contractlength').text('I accept 3 months initial contract.');
                $('#initial_contractlength').val('3');
                $("#dl_chrg1").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#dl_chrg").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#dl_chrg11").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            }
            function Showpack6() {
                //$('#6m').css('background-color', 'rgb(61 125 128)');
                var three = document.getElementById("3m");
                var six = document.getElementById("6m");
                var tweleve = document.getElementById("12m");
                var threetable = document.getElementById("3mshow");
                var sixtable = document.getElementById("6show");
                var twelvetable = document.getElementById("12show");
                var extra_name = "Router Delivery Charge";
                var extra_price = "6.25";
                sixtable.style.display = 'block';
                twelvetable.style.display = 'none';
                threetable.style.display = 'none';
                $('#routercharge').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '25.00' + "</td>");
                $('#routercharge1').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '25.00' + "</td>");
                $('#routercharge11').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '25.00' + "</td>");
                $('#contractlength').text('I accept 6 months initial contract.');
                $('#initial_contractlength').val('6');
                $("#dl_chrg1").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#dl_chrg").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#dl_chrg11").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            }
            function Showpack12() {
                //$('#12m').css('background-color', 'rgb(61 125 128)');
                var three = document.getElementById("3m");
                var six = document.getElementById("6m");
                var tweleve = document.getElementById("12m");
                var threetable = document.getElementById("3mshow");
                var sixtable = document.getElementById("6show");
                var twelvetable = document.getElementById("12show");
                sixtable.style.display = 'none';
                twelvetable.style.display = 'block';
                threetable.style.display = 'none';
                $('#routercharge').html("<th>" + 'Gigabit dual band router' + "</th><td>" + '00.00' + "</td>");
                $('#routercharge1').html("<th>" + 'Gigabit dual band router' + "</th><td>" + '00.00' + "</td>");
                $('#routercharge11').html("<th>" + 'Gigabit dual band router' + "</th><td>£" + '00.00' + "</td>");
                $('#contractlength').text('I accept 12 months initial contract.');
                $('#initial_contractlength').val('12');
                $('#dl_chrg1').html("<th>Router Delivery Charge</th><td>£6.25</td>");
                $('#dl_chrg11').html("<th>Router Delivery Charge</th><td>£6.25</td>");
                $('#dl_chrg').html("<th>Router Delivery Charge</th><td>£6.25</td>");
                calctotal();
                calctotal1();
                calctotal2();
            }
            function valueChanged() {
                if ($('#re1').is(":checked")) {
                    var extra_name = $('#re1').data('name');
                    var extra_price = $('#re1').data('price');
                    $("#rt_extr_plan1").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan11").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan111").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                } else {
                    $("#rt_extr_plan1").html("");
                    $("#rt_extr_plan11").html("");
                    $("#rt_extr_plan111").html("");
                    calctotal();
                    calctotal1();
                    calctotal2();
                }
            }
            function valueChanged1() {
                if ($('#re2').is(":checked")) {
                    var extra_name = $('#re2').data('name');
                    var extra_price = $('#re2').data('price');
                    $("#rt_extr_plan2").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan21").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan211").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                } else {
                    $("#rt_extr_plan2").html("");
                    $("#rt_extr_plan21").html("");
                    $("#rt_extr_plan211").html("");
                    calctotal();
                    calctotal1();
                    calctotal2();
                }
            }
            function valueChanged2() {
                if ($('#re3').is(":checked")) {
                    var extra_name = $('#re3').data('name');
                    var extra_price = $('#re3').data('price');
                    $("#rt_extr_plan3").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan31").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan311").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                } else {
                    $("#rt_extr_plan3").html("");
                    $("#rt_extr_plan31").html("");
                    $("#rt_extr_plan311").html("");
                    calctotal();
                    calctotal1();
                    calctotal2();
               }
            }
            function valueChanged3() {
                if ($('#re4').is(":checked")) {
                    var extra_name = $('#re4').data('name');
                    var extra_price = $('#re4').data('price');
                    $("#rt_extr_plan4").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan41").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    $("#rt_extr_plan411").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                    calctotal();
                    calctotal1();
                    calctotal2();
                } else {
                    $("#rt_extr_plan4").html("");
                    $("#rt_extr_plan41").html("");
                    $("#rt_extr_plan411").html("");
                    calctotal();
                    calctotal1();
                    calctotal2();
                }
            }
        function valueChanged4() {
            if ($('#re5').is(":checked")) {
                var extra_name = $('#re5').data('name');
                var extra_price = $('#re5').data('price');
                $("#rt_extr_plan5").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#rt_extr_plan51").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#rt_extr_plan511").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            }else {
                $("#rt_extr_plan5").html("");
                $("#rt_extr_plan51").html("");
                $("#rt_extr_plan511").html("");
            }
        }
        function valueChanged5() {
            if ($('#re6').is(":checked")) {
                var extra_name = $('#re6').data('name');
                var extra_price = $('#re6').data('price');
                $("#rt_extr_plan6").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#rt_extr_plan61").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#rt_extr_plan611").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $("#rt_extr_plan6").html("");
                $("#rt_extr_plan61").html("");
                $("#rt_extr_plan611").html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        }
        function valueChanged6() {
            if ($('#re7').is(":checked")) {
                var extra_name = $('#re7').data('name');
                var extra_price = $('#re7').data('price');
                $("#rt_extr_plan7").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#rt_extr_plan71").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#rt_extr_plan711").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $("#rt_extr_plan7").html("");
                $("#rt_extr_plan71").html("");
                $("#rt_extr_plan711").html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        }
        function installation() {
            if ($('#re11').is(":checked")) {
                var extra_name = $('#re11').data('name');
                var extra_price = $('#re11').data('price');
                $("#router_install").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#router_install1").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#router_install11").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $("#router_install").html("");
                $("#router_install1").html("");
                $("#router_install11").html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        }
        function itsupport() {
            if ($('#re12').is(":checked")) {
                var extra_name = $('#re12').data('name');
                var extra_price = $('#re12').data('price');
                $("#it_support").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#it_support1").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                $("#it_support11").html("<th>" + extra_name + "</th><td>£" + extra_price + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $("#it_support").html("");
                $("#it_support1").html("");
                $("#it_support11").html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        }
        function getOrderDetails() {
            var orderAmount = {};
            $('tbody#order_summary2 > tr').each(function(index, tr) { 
                if (tr.innerHTML != '') {
                    var order = tr.cells[0].innerHTML;
                    var amount = tr.cells[1].innerHTML;
                    orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                    //console.log(tr.cells[1].innerHTML.split('£'));
                    //orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                    //var amount1 = tr.cells[1].innerHTML.split("£")[1];
                }
                /*if( tr.innerHTML != '' ) {
                    var order = tr.cells[0].innerHTML;
                    var amount = tr.cells[1].innerHTML;
                    orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                }*/
            });
            return orderAmount;
        }

        function orderTotal1() {
    var result = 0;
    $('tbody#order_summary2 > tr').each(function(index, tr) {
        if (tr.innerHTML != '') {
            var order = tr.cells[0].innerHTML;
            var amount = tr.cells[1].innerHTML;
            //console.log(tr.cells[1].innerHTML.split('£'));
            //orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
            var amount1 = tr.cells[1].innerHTML.split("£")[1];
            if ((amount1 != undefined)) {
                //var thisNumber = parseFloat(amount1);
                result += parseFloat(amount1);
                //$("#calculated_total_amount").html("<th>" + order + "</th><td>£"+result+"</td>");
              ///  $("#order_total").append("£"+result.toFixed(2));
                /*if (!isNaN(thisNumber))
                        result += thisNumber;*/
            }

        }
    });
    return result;

}

function getOrderDueDetails() {
            var orderAmount = {};
            $('tbody#order_summary > tr').each(function(index, tr) { 
                if (tr.innerHTML != '') {
                    var order = tr.cells[0].innerHTML;
                    var amount = tr.cells[1].innerHTML;
                    orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                    //console.log(tr.cells[1].innerHTML.split('£'));
                    //orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                    //var amount1 = tr.cells[1].innerHTML.split("£")[1];
                }
                /*if( tr.innerHTML != '' ) {
                    var order = tr.cells[0].innerHTML;
                    var amount = tr.cells[1].innerHTML;
                    orderAmount[order] = amount.replace(/<\/?[^>]+(>|$)/g, "");
                }*/
            });
            return orderAmount;
        }
        function orderdueTotal() {
    var result = 0;
    $('tbody#order_summary > tr').each(function(index, tr) {
        if (tr.innerHTML != '') {
            var order = tr.cells[0].innerHTML;
            var amount = tr.cells[1].innerHTML;
            var amount1 = tr.cells[1].innerHTML.split("£")[1];
            if ((amount1 != undefined)) {
                result += parseFloat(amount1);
                
            }

        }
    });
    return result;

}

$(document).ready(function(){
        
        $('#formSubmit').on('click',function(e){
                e.preventDefault();
                //var orderTable = $('#order_summary2')[0].outerHTML;
                var orderDetails = getOrderDetails();
               // console.log(orderDetails);
                   $('#all_order_details').val(JSON.stringify(orderDetails));
                 
                   var orderTotal = orderTotal1();
               $('#order_total').val(JSON.stringify(orderTotal));
                var orderDueDetails = getOrderDueDetails();
                $('#due_order_details').val(JSON.stringify(orderDueDetails));
                var orderDueTotal = orderdueTotal();
                $('#due_order_total').val(JSON.stringify(orderDueTotal));

                var formData = $("#broadband-form").serializeArray();
        
                $.ajax({
                    url: "/BroadbandformSubmit",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        ...formData
                    },
                    success:function(response){
                        
                            window.location = '{{ route('stripe') }}'
                            alert("Order has been placed");
                     
                    },
                    error: function(response) {
                        printErrorMsg(response.responseJSON.errors);
                    }
                });
            });
        
            });
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                });
            }       
        var getRemanningDays = function() {
            var actvdate = document. getElementById("acvdate"). value;
            var date = new Date(actvdate);
            var time = new Date(date.getTime());
            time.setMonth(date.getMonth() + 1);
            time.setDate(0);
            var days =time.getDate() > date.getDate() ? time.getDate() - date.getDate() : 0;
            var daysInMonth = time.getDate();        
            return {days:days, daysInMonth: daysInMonth};
        }
        $('input[name=broadband_plan]').click(function() {
            if ($(this).attr('data-name') != "None") {            
                var remainingDays = getRemanningDays();
                var reminningDaysPrice = ($(this).attr('data-price') / remainingDays.daysInMonth) * remainingDays.days;
                var oneMonthPrice = ($(this).attr('data-price'))
                var reminningDaysPrice = Math.round(reminningDaysPrice * 100) / 100;
                var sel_price = $(this).data('price');
                $('#bb_plan').html("<th>" + $(this).attr('data-name') + "</th><td>£" + reminningDaysPrice + "</td>");
                $('#bb_plan1').html("<th>" + $(this).attr('data-name') + "</th><td>£" + reminningDaysPrice + "</td>");
                $('#bb_plan11').html("<th>" + $(this).attr('data-name') + "</th><td>£" + oneMonthPrice + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $('#bb_plan').html("");
                $('#bb_plan1').html("");
                $('#bb_plan11').html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        });
        $('input[name=voice_package]').click(function() {
            if ($(this).attr('data-name') != "None") {
                var remainingDays = getRemanningDays();
                var oneMonthPrice = ($(this).attr('data-price'));
                var reminningDaysPrice = ($(this).attr('data-price') / remainingDays.daysInMonth) * remainingDays.days;
                var reminningDaysPrice = Math.round(reminningDaysPrice * 100) / 100;
                var sel_price = $(this).data('price');
                $('#vv_plan').html("<th>" + $(this).attr('data-name') + "</th><td>£" + reminningDaysPrice + "</td>");
                $('#vv_plan1').html("<th>" + $(this).attr('data-name') + "</th><td>£" + reminningDaysPrice + "</td>");
                $('#vv_plan11').html("<th>" + $(this).attr('data-name') + "</th><td>£" + oneMonthPrice + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $('#vv_plan').html("");
                $('#vv_plan1').html("");
                $('#vv_plan11').html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        });
        $('input[name=mobile_plan]').click(function() {
            if ($(this).attr('data-name') != "None") {            
                var remainingDays = getRemanningDays();
                var oneMonthPrice = ($(this).attr('data-price'));
                var reminningDaysPrice = ($(this).attr('data-price') / remainingDays.daysInMonth) * remainingDays.days;
                var reminningDaysPrice = Math.round(reminningDaysPrice * 100) / 100;
                var sel_price = $(this).data('price');
                $('#mob_plan_amount').html("<th>" + $(this).attr('data-name') + "</th><td>£" + reminningDaysPrice + "</td>");
                $('#mob_plan_amount1').html("<th>" + $(this).attr('data-name') + "</th><td>£" + reminningDaysPrice + "</td>");
                $('#mob_plan_amount11').html("<th>" + $(this).attr('data-name') + "</th><td>£" + oneMonthPrice + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $('#mob_plan_amount').html("");
                $('#mob_plan_amount1').html("");
                $('#mob_plan_amount11').html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        });
        $('input[name=router_delivery_address]').click(function() {
            if ($(this).val() == "yes") {
                $(".router_delivery_addrs").each(function() {
                    $(this).show();
                });
            } else {
                $(".router_delivery_addrs").each(function() {
                    $(this).hide();
                });
            }
        });
        $('input[name=billing_diff_address_1]').click(function() {
            if ($(this).val() == "yes") {
                $(".diff_addrs_billing").each(function() {
                    $(this).show();
                });
            } else {
                $(".diff_addrs_billing").each(function() {
                    $(this).hide();
                });
            }
        });
        $('input[name=transfer_number]').click(function() {
            if ($(this).val() == "yes") {
                $("#show_if_transfer_number").each(function() {
                    $(this).show();
                });
                $("#transfer_no_chrg").html("<th>" + "Transfer Number Charge" + "</th><td>£" + "15.00" + "</td>");
                $("#transfer_no_chrg1").html("<th>" + "Transfer Number Charge" + "</th><td>£" + "15.00" + "</td>");
                $("#transfer_no_chrg11").html("<th>" + "Transfer Number Charge" + "</th><td>£" + "15.00" + "</td>");
                calctotal();
                calctotal1();
                calctotal2();
            } else {
                $("#show_if_transfer_number").each(function() {
                    $(this).hide();
                });
                $("#transfer_no_chrg").html("");
                $("#transfer_no_chrg1").html("");
                $("#transfer_no_chrg11").html("");
                calctotal();
                calctotal1();
                calctotal2();
            }
        });
        $('input[name=port_no]').click(function() {
            if ($(this).val() == "yes") {
                $("#show_if_port_mobile_no").each(function() {
                    $(this).show();
                });
            } else {
                $("#show_if_port_mobile_no").each(function() {
                    $(this).hide();
                });
            }
        });
        calctotal();
        calctotal1();
        calctotal2();
    </script>
<script>
$(document).ready(function(){
        
        $('#GoCardlessformSubmit').on('click',function(e){
                e.preventDefault();
                var orderDetails = getOrderDetails();
               
                   $('#all_order_details').val(JSON.stringify(orderDetails));
                 
                   var orderTotal = orderTotal1();
               $('#order_total').val(JSON.stringify(orderTotal));
               var orderTotal = orderTotal1();
               $('#order_total').val(JSON.stringify(orderTotal));
                var orderDueDetails = getOrderDueDetails();
                $('#due_order_details').val(JSON.stringify(orderDueDetails));
                var orderDueTotal = orderdueTotal();
                $('#due_order_total').val(JSON.stringify(orderDueTotal));

                var formData = $("#broadband-form").serializeArray();
        
                $.ajax({
                    url: "/BroadbandformSubmit",
                    type:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        ...formData
                    },
                    success:function(response){
                        // if (response) {
                            window.location = '{{ url('https://pay-sandbox.gocardless.com/AL00006HRFDJD2') }}'
                            //$('#success-message').text(response.success);
                            //$("#contactForm")[0].reset();
                            alert("Order has been placed");
                      //  }
                    },
                    error: function(response) {
                        // var value = response.error;
                        // console.log(value)
                        printErrorMsg(response.responseJSON.errors);
                     //   $('#message-error').text(response.responseJSON.errors.message);
                    }
                });
            });
        
            });



</script>



</body>

</html>