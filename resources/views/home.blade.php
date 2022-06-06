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

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Animate.css -->
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
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>

	<!-- dvkd -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<style>
		.owl-next {
			display: none;
		}

		.owl-prev {
			display: none;

		}

		.owl-dots {
			display: none;
		}

		.owl-carousel .owl-item .card {
			opacity: 1;
		}

		.btn-cta11 a {
			background: white;
			padding: 2px 5px;
			display: -moz-inline-stack;
			display: inline-block;
			zoom: 1;
			*display: inline;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
			border: 1px solid white;
			width: 160px;
			border-top-left-radius: 25px;
			border-top-right-radius: 0px;
			border-bottom-right-radius: 25px;
			border-bottom-left-radius: 25px;
			color: white;
			text-align: center;
		}

		.btn-cta11 a:hover {
			background: transparent;
			color: black;
		}

		.morecontent span {
			display: none;
		}

		.morelink {
			display: block;
		}
	</style>

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="topbar">

						<div class="left">
							<a href="{{url('residential')}}">Residential</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('business')}}">Business
								</a>
						</div>
						<div class="middle"></div>
						<div class="right">
							<ul>
								<li class="r"><a href="mailto:info@linkbroadbands.com" target="_blank" rel="noopener noreferrer">info@linkbroadbands.com</a></li>
								<li class="r"><a href="tel:033 0174 1444">033 0174 1444</a></li>
								<li class="r"><a href="#">Help</a></li>
								<li class="r"><a href="{{('faq')}}">FAQ</a></li>
								<li><a href="{{url('news')}}">News</a></li>
							</ul>
						</div>

					</div>

				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href=""><img src="assets/images/logo1.png" style="width:120px;height:68px;"></a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="has-dropdown"><a href="#">Broadband</a>
									<ul class="dropdown">
										<li><a href="{{url('residential')}}">Residential</a></li>
										<li><a href="{{url('business')}}">Business</a></li>

									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Voice</a>
									<ul class="dropdown">
										<li><a href="{{url('voice-residential')}}">Residential Voice</a></li>
										<li><a href="{{url('voice-business')}}">Business Voice</a></li>

									</ul>
								</li>
								<li><a href="mobileresidential.html">Mobile</a></li>


								<li>
									<a href="{{url('hardware')}}">Deals</a>

								</li>

								<li class="btn-cta"><a href="{{route('broadbandform')}}"><span>Get Started</span></a></li>
								<li class="btn-cta1"><a href="https://orders.linkbroadbands.com/login"><span>My Account</span></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</nav>

		<div class="container-fluid shapecon3" id="lap" style="background-image: url('assets/images/indexmain1.jpg');width:100%;height: 354px;background-position: top;">
			<div class="container">
				<div class="row" style="text-align:left;">
					<div class="col-lg-12  shapecon3" style="background-image: url('assets/images/headermain.png');width:100%;height: 354px;background-position: top;">


						<div style="border: none;background-color: transparent;padding-top:160px;text-align:left;margin-left: -12px;padding-bottom: 0px;position: relative;display:inline-block !important;margin-bottom:0px;font-size: 18px;font-weight: 300;color:white;"><br><span style="font-size: 20px;">Check Your Broadband Availability</span>

							<form action="{{route('form')}}" method="GET" class="form-inline" id="formp">
							
							<!-- <input type="text" id="1" list="search_result" class="form-control search-box bannercircle-textbox postcode" name="postcodes" autocomplete="off" placeholder="Search postcode" style="position:relative;display:inline-block !important;background-color:white;padding-top:0px;text-align:left;margin-left: 0px;height: 40px;margin-bottom:10px;margin-top:0px;" required> -->
								<?php
								$postcodes = \DB::table('pincode')->get();
								?>
								<!-- <datalist id="search_result" style="box-shadow: 0.6em 0.6em 1.2em rgb(0 0 0 / 5%); border: 1px solid #F4F5F7;background-color:white;color:grey;display:none; height: 100px; overflow: auto;">
									@foreach($postcodes as $list)
									<input type="hidden" id="postcodeId" value="{{$list->id}}">
									<option value="{{$list->pincode}}">{{$list->pincode}} </option>
									@endforeach
								</datalist>
								<button type="submit" id="postcodeSubmit" name="check" class="btn btn-primary btn-cta11" style="font-size: 13px;position:relative;display:inline-block !important;">Check</button> -->

								<!-- <div class="form-group row">
									<div class="col-sm-12">
										<select name="postcodes" class="form-control selectpicker postcode" id="1 custKd" data-live-search="true" style="position:relative;display:inline-block !important;background-color:white;padding-top:0px;text-align:left;margin-left: 0px;height: 40px;margin-bottom:10px;margin-top:0px;" required>
										<option data-tokens="" id="" value="">Search Postcode</option>
										@foreach($postcodes as $list)
											<option data-tokens="{{$list->pincode}}" id="{{$list->id}}" value="{{$list->pincode}}">{{$list->pincode}} </option>
										@endforeach
										</select>
									</div>
								</div> -->
                                <div class="form-group row">
									<div class="col-sm-12">
										<input type="text" name="check_postcode" class="form-control" style="border:white solid 1px;"/>
									</div>
								</div>
								<button type="submit" id="postcodeSubmit" name="check" class="btn btn-primary btn-cta11" style="font-size: 13px;position:relative;display:inline-block !important;">Check</button>

							</form>
							<div class="alertw alert-warning" role="alert">
								<span id="postcodeNotFound"></span>
							</div>
							<div class="alertw alert-warning" style="width: 180px !important;" role="alert">
								<span id="postcodeValidation"></span>
							</div>

						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="container" id="mob" style="background-image: url('assets/images/indexmain1mob.jpg');width:100%;height: auto;background-position: center;">
			<div class="container">
				<div class="row" style="text-align:left;">
					<div class="col-lg-12">
						<img src="assets/images/headermainmob.png" style="width:100%;height: AUTO;">
						<div style="border: none;background-color: transparent;margin-top:-20px;text-align:left;margin-left: -12px;padding-bottom: 0px;position:relative;display:inline-block !important;margin-bottom:10px;font-size: 13px;font-weight: 300;color:white;"><br><span style="font-size: 13px;">Check Your Broadband Availability</span>
							<form action="{{route('form')}}" method="GET" class="form-inline" id="formp">
								<!-- <input type="text" id="1" list="search_result" class="form-control search-box bannercircle-textbox postcode" name="postcodes" autocomplete="off" placeholder="Search postcode" style="position:relative;display:inline-block !important;background-color:white;padding-top:0px;text-align:left;margin-left: 0px;height: 40px;margin-bottom:10px;margin-top:0px;" required> -->
								<?php
								$postcodes = \DB::table('pincode')->get();
								?>
								<!-- <datalist id="search_result" style="box-shadow: 0.6em 0.6em 1.2em rgb(0 0 0 / 5%); border: 1px solid #F4F5F7;background-color:white;color:grey;display:none; height: 100px; overflow: auto;">
									@foreach($postcodes as $list)
									<input type="hidden" id="postcodeId" value="{{$list->id}}">
									<option value="{{$list->pincode}}">{{$list->pincode}} </option>
									@endforeach
								</datalist>
								<button type="submit" id="postcodeSubmit" name="check" class="btn btn-primary btn-cta11" style="font-size: 13px;position:relative;display:inline-block !important;">Check</button> -->
								<!-- <div class="form-group row">
									<div class="col-sm-12">
										<select name="postcodes" class="form-control selectpicker postcode" id="1 custKd" data-live-search="true" style="position:relative;display:inline-block !important;background-color:white;padding-top:0px;text-align:left;margin-left: 0px;height: 40px;margin-bottom:10px;margin-top:0px;" required>
										<option data-tokens="" id="" value="">Search Postcode</option>
										@foreach($postcodes as $list)
											<option data-tokens="{{$list->pincode}}" id="{{$list->id}}" value="{{$list->pincode}}">{{$list->pincode}} </option>
										@endforeach
										</select>
									</div>
								</div> -->
								<div class="form-group row">
									<div class="col-sm-12">
										<input type="text" class="form-control" name="check_postcode" style="position:relative;display:inline-block !important;border:solid white 1px;padding-top:0px;text-align:left;"/>
									</div>
								</div>
								<button type="submit" id="postcodeSubmit" name="check" class="btn btn-primary btn-cta11" style="font-size: 13px;position:relative;display:inline-block !important;">Check</button>
							</form>
							<div class="alertw alert-warning" role="alert">
								<span id="postcodeNotFound"></span>
							</div>
							<div class="alertw alert-warning" style="width: 180px !important;" role="alert">
								<span id="postcodeValidation"></span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


		<div class="container-fluid" style="margin-top:40px;margin-bottom:40px;">
			<div class="row animate-box">
				<div class="col-lg-12">
					<p class="webfeatures">Your Personal-Speed & Quality Home Connection
						Starting £24.99 PM</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="flex-container1">
				<div class="flex1 animate-box" style="border-radius: 5px;height:210px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/featuresstopwatch.jpg">
					</span>
					<br>
					<a href="#">Ultra Fast</a>
					<p style="color:#333333;">Internet speed upto 1GB.</p>

				</div>
				<div class="flex2 animate-box" style="border-radius: 5px;height:210px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/featuresinfinity.jpg">
					</span>
					<br>
					<a href="#" style="font-size:16px;">Unlimited Data</a>
					<p style="color:#333333;">Truly Unlimited Internet.</p>
				</div>
				<div class="flex3 animate-box" style="border-radius: 5px;height:210px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/featuresflexible.jpg">
					</span>
					<br>
					<a href="#" style="font-size:16px;">Flexible</a>
					<p style="color:#333333;">3/6/12 months contracts.</p>
				</div>
				<div class="flex4 animate-box" style="border-radius: 5px;height:210px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/featuresline.jpg">
					</span>
					<br>
					<a href="#" style="font-size:16px;">No Line Rental</a>
					<p style="color:#333333;">No landline required.</p>
				</div>
				<div class="flex5 animate-box " style="border-radius: 5px;height:210px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/featuresfull.jpg">
					</span>
					<br>
					<a href="#" style="font-size:16px;">Future - proof broadband</a>
					<p style="color:#333333;">No infrastructure upgrade.</p>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top:40px;margin-bottom:40px;">
			<div class="row">
				<div class="col-lg-12" style="text-align:center;margin-top:20px;">
					<div class="allbtn"><a href="{{url('residential')}}"><span>Choose your Plan</span></a></div>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top:40px;margin-bottom:40px;">
			<div class="flex-container2 animate-box">
				<div class="flex2-banner-left">

					<p class="webfeatures" style="text-align:left;">Choose your unbeatable Fibre and Phone packages</p>
					<p class="flexp" style="text-align:left;">LinkBroadbands.com is here to make getting online a simpler and more affordable process. Our team is committed to bringing you all the information you could possibly need when making the right purchasing decision for your home or business.</p>

				</div>

				<div class="flex2-banner-right">
					<img src="assets/images/banner1.jpg" style="max-width:100%;width:100%;">
				</div>
			</div>
		</div>



		<div class="container" style="margin-top:40px;margin-bottom:40px;">
			<div class="row">
				<div class="col-lg-12">
					<p class="webfeatures"> 3 reasons to go with full-fibre</p>
				</div>


			</div>
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<img src="assets/images/3reasons.jpg" style="width:100%;text-align:center;">
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>



		<div class="container-fluid" style="margin-top:40px;">
			<div class="row animate-box">
				<div class="col-lg-12">
					<p class="webfeatures">Now easy to connect Link Broadband</p>
					<p class="flexp" style="text-align:center;">Here at LinkBroadbands.com, we know that having great
						value fast internet is something that’s essential both in the home and in the workplace.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid" style="margin-top:10px;margin-bottom:40px;">
			<div class="flex-container1">
				<div class="flex1 animate-box" style="border-radius: 5px;height:190px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/easysettings.jpg">
					</span>
					<br>
					<div class="flexp1"><a href="#">Check Your Availability</a></div>


				</div>
				<div class="flex2 animate-box" style="border-radius: 5px;height:190px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/easypackage.jpg">
					</span>
					<br>
					<div class="flexp1"><a href="#">Choose Your Package</a></div>

				</div>
				<div class="flex3 animate-box" style="border-radius: 5px;height:190px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/easychoose.jpg">
					</span>
					<br>
					<div class="flexp1"><a href="#">Create Your Account</a></div>

				</div>
				<div class="flex4 animate-box" style="border-radius: 5px;height:190px;">
					<br>
					<span class="featuresiconimg">
						<img src="assets/images/easyconnect.jpg">
					</span>
					<br>
					<div class="flexp1"><a href="#">Get You Connected</a></div>

				</div>
			</div>
		</div>




		<div class="container-fluid co" style="margin-top:40px;margin-bottom:40px;">
			<div class="row">
				<div class="col-lg-6 cotext">Check Your Broadband Availability</div>
				<div class="col-lg-6 cobox">
					<form action="{{route('form')}}" method="GET"><!-- <input type="text" class="form-control search-box bannercircle-textbox" name="live_search" id="live_search1" autocomplete="off" placeholder="Search postcode" list="search_result1" required> -->
						<?php $postcodes = \DB::table('pincode')->get(); ?>
						<!-- <datalist id="search_result1" style="box-shadow: 0.6em 0.6em 1.2em rgb(0 0 0 / 5%);
                border: 1px solid #F4F5F7;background-color:white;color:grey;display:none; height: 100px;
                            overflow: auto;">
							@foreach($postcodes as $list)
							<input type="hidden" id="postcodeId" value="{{$list->id}}">
							<option value="{{$list->pincode}}">{{$list->pincode}} </option>
							@endforeach
						</datalist>
						<input type="submit" id="postcodeSubmit" name="check" class="btn" value="Check"> -->
						<!-- <div class="form-group row">
							<div class="col-sm-12">
								<select name="postcodes" class="form-control selectpicker postcode" id="1 custKd" data-live-search="true" style="position:relative;display:inline-block !important;background-color:white;padding-top:0px;text-align:left;margin-left: 0px;height: 40px;margin-bottom:10px;margin-top:0px;" required>
								<option data-tokens="" id="" value="">Search Postcode</option>
								@foreach($postcodes as $list)
									<option data-tokens="{{$list->pincode}}" id="{{$list->id}}" value="{{$list->pincode}}">{{$list->pincode}} </option>
								@endforeach
								</select>
							</div>
						</div> -->
						<div class="form-group row">
									<div class="col-sm-12">
										<input type="text" name="check_postcode" class="form-control" style="border:white solid 1px;"/>
									</div>
								</div>
						<button type="submit" id="postcodeSubmit" name="check" class="btn btn-primary btn-cta11" style="font-size: 13px;position:relative;display:inline-block !important;">Check</button>
					</form>
					<div class="alertw alert-warning" role="alert">
						<span id="postcodeNotFound"></span>
					</div>
					<div class="alertw alert-warning" style="width: 180px !important;" role="alert">
						<span id="postcodeValidation"></span>
					</div>
				</div>
			</div>
		</div>

		<div class="container-fluid" style="margin-top:40px;">
			<div class="row animate-box">
				<div class="col-lg-12">
					<p class="webfeatures">Our Popular Packages</p>
				</div>
			</div>
		</div>

		<div class="container" style="margin-top:10px;margin-bottom:10px;text-align:center;">
			<div class="row">
				<div class="col-lg-12" style="text-align:center;">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link btn btn3" id="3monthsTabHead" data-toggle="tab" href="#3months" role="tab" aria-controls="3months" aria-selected="false">3 months</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link btn btn3" id="6monthsTabHead" data-toggle="tab" href="#6months" role="tab" aria-controls="6months" aria-selected="false">6 months</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link btn btn3 show" id="12monthsTabHead" data-toggle="pill" href="#12months" role="tab" aria-controls="12months" aria-selected="true">12 months</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-content animate-box" id="pills-tabContent" style="margin-top:40px;margin-bottom:40px;">
			<div class="tab-pane fade" id="3months" role="tabpanel" aria-labelledby="3months">
				<div class="container" style="margin-top:20px;margin-bottom:0px;">
					<div class="flex-package">
						<div class="package1">
							<div class="packagehead" style="background-image: url(assets/images/package1head1.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK FAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="--value: 10"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">40 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£26.44<br> pm</p>
									<div class="d2 glow">
										<p><br>£317.28 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>

						</div>
						<div class="package2">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK SUPERFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">160 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">30 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£34.95<br> pm</p>
									<div class="d2 glow1">
										<p><br>£419.40 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>
						</div>
						<div class="package3">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK ULTRAFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="--value: 60"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">25 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£50.45<br> pm</p>
									<div class="d2 glow2">
										<p><br>£605.40 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>

						</div>
						<div class="package4">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK ULTRAFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">180 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£50.20<br> pm</p>
									<div class="d2 glow3">
										<p><br>£602.40 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>
						</div>

					</div>

				</div>
			</div>
			<div class="tab-pane fade" id="6months" role="tabpanel" aria-labelledby="6months">
				<div class="container" style="margin-top:20px;margin-bottom:0px;">
					<div class="flex-package">
						<div class="package1">
							<div class="packagehead" style="background-image: url(assets/images/package1head1.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK FAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="--value: 10"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">40 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£26.19<br> pm</p>
									<div class="d2 glow">
										<p><br>£314.28 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>

						</div>
						<div class="package2">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK SUPERFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">160 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">30 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£34.70<br> pm</p>
									<div class="d2 glow1">
										<p><br>£416.40 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>
						</div>
						<div class="package3">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK ULTRAFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="--value: 60"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">25 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£38.19<br> pm</p>
									<div class="d2 glow2">
										<p><br>£458.28 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>

						</div>
						<div class="package4">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK ULTRAFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">180 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£50.20<br> pm</p>
									<div class="d2 glow3">
										<p><br>£602.40 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router £25.00</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>
						</div>

					</div>

				</div>




			</div>
			<div class="tab-pane fade active in" id="12months" role="tabpanel" aria-labelledby="pills-contact-tab">
				<div class="container" style="margin-top:20px;">
					<div class="flex-package">
						<div class="package1">
							<div class="packagehead" style="background-image: url(assets/images/package1head1.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK FAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="--value: 10"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">40 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£24.99<br> pm</p>
									<div class="d2 glow">
										<p><br>£299.88 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router FREE</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>

						</div>
						<div class="package2">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK SUPERFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">160 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">30 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£33.50<br> pm</p>
									<div class="d2 glow1">
										<p><br>£402.00 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router FREE</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>
						</div>
						<div class="package3">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK ULTRAFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="--value: 60"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">25 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£36.99<br> pm</p>
									<div class="d2 glow2">
										<p><br>£443.88 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router FREE</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>

						</div>
						<div class="package4">
							<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
								<p class="packageheadtext">LINK ULTRAFAST</p>
							</div>
							<div class="packagereinside">

								<div class="pcon">
									<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100"></div>
								</div>
								<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
									<span class="upload"><span style="color:#0D5460;">180 Mbps</span><br>Upload</span>
								</div>

							</div>
							<div class="package1inside">
								<div class="d1">
									<p><br>£49.00<br> pm</p>
									<div class="d2 glow3">
										<p><br>£588.00 Cost per Annum</p>
									</div>
								</div>

							</div>
							<div class="packagemainfooter">

								<p>
									<hr style="width:190px;border:1px solid #30DBCD;">
								<ul style="list-style-image: url('assets/images/checked.png');color:#333333;">
									<li> No line rental</li>
									<li> Unlimited data download</li>
									<li> 100% full fibre broadband </li>
									<li> Gigabit dual band router FREE</li>
									<li> Activation £30.00</li>
									<li> P&P £6.50</li>

								</ul>
								<br>
								<div class="allbtn" style="text-align:center;"><a href="form.html"><span>Seal the Deal</span></a></div>
								</p>

								</p>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

		<div class="container" style="margin-top:10px;margin-bottom:40px;text-align:center;">
			<div class="row">
				<div class="allbtn"><a href="index12.html"><span>More packages</span></a></div>
			</div>
		</div>


		<div class="container" style="margin-top:40px;margin-bottom:40px;">
			<div class="flex-container2 animate-box">
				<div class="flex2-banner-left" style="text-align:left;">
					<div class="titleflex">About Link Broadband</div>
					<p class="flexp" style="text-align:left;"><br>Welcome to LinkBroadbands.com, your first choice for a great value broadband
						package comparison for your home or business. We’re dedicated to taking the hard work out of
						choosing the right provider for you, whatever your needs. So, whether you’re running a business
						and need a reliable high-speed broadband package that will keep your
						company online, or whether you’re part of a busy household with demanding online needs,
						we’recommittedto giving you all the information you need to select a deal that
						gives you the speed and reliability that you need at a price that you can afford.
					<div class="allbtn" style="font-size:14px;"><a href="{{url('about-us')}}"><span>About Us</span></a></div>
					</p>
				</div>


				<div class="flex2-banner-right">
					<img src="assets/images/about.jpg" style="max-width:100%;width:100%;">
				</div>
			</div>
		</div>
		<div class="container-fluid" style="margin-top:40px;margin-bottom:40px;background-color: #2FD9CB;border-radius:10px;padding-top:40px;padding-bottom:40px;">
			<div class="row" style="background-color: #2FD9CB;">
				<div class="container" style="margin-top:0px;background-color: #2FD9CB;border-radius:10px;">
					<div class="flex-container2 animate-box" style="background-color: #2FD9CB;">
						<div class="flex2-banner-left" style="background-color: #2FD9CB;">
							<div class="titleflex" style="background-color: #2FD9CB;">Can’t find what you are looking for or
								need further assistance?</div>
							<div class="titleflex" style="background-color: #2FD9CB;color:white;">Request a callback from our
								team.</div>
							<p class="flexp" style="background-color: #2FD9CB;"><br>
							<div class="allbtn" style="font-size:14px;"><a href="{{url('contact-us')}}"><span style="background-color: white;">Contact
										Us</span></a></div>
							</p>
						</div>


						<div class="flex2-banner-right" style="background-color: #2FD9CB;box-shadow: 0 0 1.5rem rgb(17 17 17 / 70%);">
							<img src="assets/images/family.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="container" style="margin-top:40px;margin-bottom:40px;text-align:center;">
			<div class="row">
				<div class="allbtn"><a href="#"><span>Set Up Your Direct Debit here</span></a></div>
			</div>
		</div>


		<script src="assets/js/jquery-3.1.0.js"></script>



		<!-- TESTIMONIALS -->
		<div class="container rounded">

			<br>
			<br>
			<h3 style="text-align:center;color:#004E5A;">See What <b>Our Customers</b> Say About Us</h3>
			<div class="owl-carousel owl-theme">

				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Nathan Aliphon</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Just signed up a few days ago and after being let down by my previous supplier with the transfer date Link Broadband have connected my services way earlier than originally asked too. They were all too happy to help even out of hours! Thank you so much, already very impressed. </p>


						</div>


					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Sarah Sharman</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								I must say the customer service from link broadband has been incredible - we've had a fault on our line which link detected and they have been able to communicate with the appropriate people from the start to ensure this fault is resolved.

								We've received weekly communication from them even when there is no update to give. I've spoken to them over the phone and via live chat and cannot fault them - there prices are also very reasonable and i am very happy to be using there services. they are professional, responsive and great value - high five to link broadband :)
							</p>
						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Tony Jose</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								I was looking for an easy to follow step by step guide to a few broadband only deals, and link road band came up , language I could understand and a deal which eclipsed my "thoughts" on price.
								Excellent customer service, efficient compassionate and brilliantly dealt with my queries. All information was thoroughly explained and time was taken to compare everything to my needs and budget. Fast broadband and reliable.
								So very happy that I choose link broadband.
								Would recommend to anyone. </p>



						</div>

					</div>
				</div>

				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Abin Baby</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								So far so good. I don't normally leave online reviews but the service that Link Broadband provided was exemplary. Straight forward information, clear and concise communication and a faultless-seamless experience from start to finish.</p>




						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Jinal pandya</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Moved into a new build serviced by OFNL month back and Link seemed to provide what I needed at a good price. Had a few chats with the online customer service before joining and all good since. Quick router delivery and activated on time as promised.
								Quick response team with faced speed issue. Only point of improvement is everytime I call it goes to receptionist which will take your number and team will call you back. I hope to get connected with team asap instead of lag time. Overall good experience so far.</p>


						</div>
					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Jerin Jose</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Customer for 3 months and really happy with service. Very fast and no interruptions. Comparitively best quote and good value for money. Good response and customer care. Will definitely recommend.</p>



						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Li Satitan</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								It is a really good broadband provider.
								Same test speed with which I purchased.
								Fast service, solve my connection issue within 3 working days.
								Highly recommended!</p>


						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Jonno W</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								I’ve been with Link for a few weeks now. The fibre broadband is really fast, I’ve not noticed any drop during work calls, streaming or online gaming. The free router works really well and I’ve not had any problems since I got everything going. I have been invited to the support WhatsApp group should I need any help though. Geo John (the owner) called me to talk me through setting everything up when I ran into difficulty and he was very quick to respond to emails. I can highly recommend Link Broadband!</p>

						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Christopher Koningen</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Outstanding customer service. The migration from my existing OFNL supplier took less than 24 hours with no loss of service, and the value for money is excellent. I would high recommend Link Broadband.</p>


						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Jeremy Claxton</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Moved into a new build serviced by OFNL which came with a list of ISPs. Link seemed to provide what I needed at a good price. Had a few chats with the online customer service before joining and all good since. Quick router delivery and activated on time as promised. One issue with low speed was dealt with very quickly - proper hard reset of router solved it. Very responsive customer service and great speeds at all times.</p>



						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Oliver Head</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Extremely good customer service, very polite and took their time to attempt to diagnose an issue which turned out to be the fault of a cable I was using. Very responsive company and by far the cheapest OFNL packages. I would 100% recommend!</p>



						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">David Groome</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								I just recently changed my broadband and telephone provider over to link broadband. The change over was absolutely seemless. I was kept up to date with the progress. The price is very competitive. And now I am enjoying an excellent and very rapid and reliable connection. I would highly recommend Link broadband.</p>



						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Jacqueline Maloney</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Link Broadband offered the best price for high-speed internet compared to the other providers available in our area, their customer service was friendly, prompt and professional and I recommend them.</p>



						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Rob Brivio (R-Block-Loftus-RD)
							</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Fantastic service to be honest - activated on the morning it was due too go live , easy to setup and get the speeds I pay for. Overall great service.</p>



						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Nicola Beal</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								We have recently moved into our new house and Geo has been very helpful with answering any questions and helping me get set up! He has gone over and above to make sure it’s been a easy process. I would highly recommend this company to anyone! Thank you for making it stress free.</p>


						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">R szcz</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Recommended by my neighbour. Smooth transition, hassle free. Very good support from IT team. Very fast connection, even in the evening, cheapier than other broadbands. Highly recommended.</p>

						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Lucy Keller</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Really grateful for the help I received when I encountered problems today. Link Broadband called me back to save my phone bill (as I am still on roaming from Thailand) and talked me through the steps to find a solution to a stressful problem. Now I am up and running! Thank you.</p>


						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Dane walker</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">
								Great customer service very quick to help .
								And prices are very reasonable.
								Also compared to all other ofnl companies charge a switch fee Link broadband is free !! Would recommend.</p>


						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">M R</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">Very good. Well priced which is why I initially chose them but also excellent customer service via the chat, even on a bank holiday. Well deserving of 5 stars.</p>
						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Joyce w</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">Only just got the internet so not sure about value and quality yet but the quality of service is pretty good and responsive especially for weekend just before Christmas. Managed to have it all set the next day I moved into the flat.</p>
						</div>

					</div>
				</div>
				<div class="owl-item">
					<div class="card testi flex-column">
						<div class="user-image"> <img src="assets/images/usericon.png" class="rounded-circle img-responsive btn-block" width="80" style="width: auto;"> </div>
						<div class="user-content">
							<h3 class="mb-0">Richard Ring</h3>
							<span><img src="assets/images/starrating.jpg" style="text-align:left;"></span>
							<p class="more">Very helpful support team worked through some unexpected hiccups in bandwidth post-migration to their service; all worked out in the end and now I'm up and running faster than ever. Thanks!</p>
						</div>

					</div>
				</div>
			</div>
		</div>


		<!-- END OF TESTIMONIALS -->
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

		<script type="text/javascript">
			$('#3monthsTabHead').on('click', function() {
				//$('#3months').addClass('active in')
				$('#6monthsTabHead').removeClass('show')
				$('#12monthsTabHead').removeClass('show')
			});
			$('#6monthsTabHead').on('click', function() {
				//$('#6months').addClass('active in')
				$('#3monthsTabHead').removeClass('show')
				$('#12monthsTabHead').removeClass('show')
			});
			$('#12monthsTabHead').on('click', function() {
				$('#3monthsTabHead').removeClass('show')
				$('#6monthsTabHead').removeClass('show')
				//$('#12months').addClass('active in')
			});
		</script>

		<div class="container" style="margin-bottom:40px;">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="text-align:center;"><img src="assets/images/logos.jpg" style="width:100%;height:auto;"></div>
				<div class="col-md-3"></div>
			</div>
		</div>




		<div class="container-fluid" style="text-align:center;background-color:#F9FBFE;margin-top:0px;margin-left:0px;margin-right:0px;padding-top:8px;padding-bottom:8px;">
			<div class="row animate-box">
				<div class="col-lg-12">
					<p class="webfeatures">Need help?</p>
				</div>
			</div>


			<div class="row" style="margin-top:5px;font-size:16px;font-weight: 400;">
				<div class="col-lg-4">
					<img src="assets/images/indexicon1.jpg" style="margin-bottom:5px;">
					<h4 style="color: #141928;font-family: 'Roboto',sans-serif !important;margin-bottom:5px;">To purchase our packages</h4>
					<p style="color: #141928;">Call us on: <a href="tel:033 0174 1444" style="color:#34E6DA;">033 0174 1444</a><br>

						Monday - Friday: 8am to 6pm<br>

						Saturday: 10am to 5pm</p>

				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img src="assets/images/indexicon2.jpg" style="margin-bottom:5px;">
					<h4 style="color: #141928;margin-bottom:5px;font-family: 'Roboto',sans-serif !important;">For Customer Service</h4>
					<p style="color: #141928;">Call us on: <a href="tel:033 0174 1444" style="color:#34E6DA;">033 0174 1444</a><br>

						Monday - Friday: 8am to 6pm<br>

						Weekends: 10am to 5pm</p>

				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img src="assets/images/indexicon3.jpg" style="margin-bottom:5px;">
					<h4 style="color: #141928;margin-bottom:5px;font-family: 'Roboto',sans-serif !important;">Out of hours?</h4>
					<p style="color: #141928;"><a href="contact.html" style="color:#34E6DA;">Click here.</a><br>

						Complete the form and our<br> team will be in touch. </p>

				</div><!-- /.col-lg-4 -->
			</div>
		</div>


		<footer id="fh5co-footer" style="background-color: #34AFAC;margin-bottom:0px !important;padding-bottom:0px !important;">

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
							<li><a href="{{url('termsandconditions')}}">Terms And Condition</a></li>
							<li><a href="{{url('privacy-policy')}}}}">Privacy Policy</a></li>
							<li><a href="{{url('tc-for-digital-phone-and-fibre-broadband')}}">T&C For Digital Phone And
									Fibre Broadband</a></li>
							<li><a href="{{url('code-of-complaints')}}">Code Of Complaints</a></li>
							<li><a href="https://www.royalmail.com/track-your-item#/">Track Your Router</a></li>
							<li><a href="https://pay-sandbox.gocardless.com/AL00006HRFDJD2">Set Up Your Direct Debit</a></li>
						</ul>

					</div>

					<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
						<h3>ALL SERVICES</h3>
						<ul class="fh5co-footer-links">
							<li><a href="{{url('home')}}">Home</a></li>
							<li><a href="{{url('residential')}}">Home Broadband</a></li>
							<li><a href="{{url('business')}}">Business Broadband</a></li>
							<li><a href="{{url('hardware')}}">Hardwares</a></li>
							<li><a href="{{url('news')}}">News</a></li>
							<li><a href="{{url('about-us')}}">About Us</a></li>
							<li><a href="{{url('contact-us')}}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="container">
					<div class="copy">
						<div class="copy1">
							<p>Copyright © 2022 Link Broadbands. All Rights Reserved.</p>
						</div>
						<div class="copy2" style="color:white;">

							<a href="https://www.facebook.com/uklinkbroadband/"><i class="fa fa-facebook" style="background-color:transparent;color:white;"></i></a><a href="https://www.instagram.com/uklinkbroadband/"><i class="fa fa-instagram" style="background-color:transparent;color:white;"></i></a><a href="https://twitter.com/linkbroadband"><i class="fa fa-twitter" style="background-color:transparent;color:white;"></i></a><a href="https://www.linkedin.com/company/link-broadbands/"><i class="fa fa-linkedin" style="background-color:transparent;color:white;"></i></a>


						</div>
					</div>
				</div>

			</div>
		</footer>




	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fa fa-arrow-up" style="background:transparent;color:white;"></i></a>
	</div>


	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
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

	<script type="text/javascript">
		$(document).ready(function() {
			$('.selectpicker').selectpicker(
				{
					addClass: 'postcode',
				}
			);
			$("#postcodeNotFound").empty();
			$("#postcodeValidation").empty();

			function validatePostCode(val) {
				var p = new RegExp('^(([gG][iI][rR] {0,}0[aA]{2})|((([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y]?[0-9][0-9]?)|(([a-pr-uwyzA-PR-UWYZ][0-9][a-hjkstuwA-HJKSTUW])|([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y][0-9][abehmnprv-yABEHMNPRV-Y]))) {0,}[0-9][abd-hjlnp-uw-zABD-HJLNP-UW-Z]{2}))$', ["i"]);
				var m = p.exec(val);
				if (m !== null) {
					//console.log("Post code is valid");
					return true;
				} else {
					return false;
				}
			}

			$('body').on('click', '#postcodeSubmitKd', function(e) {
				e.preventDefault();
				if (validatePostCode($('.selectpicker').val())) {
					var postcodeId = $('.selectpicker :selected').attr('id');
					var postcode = $(".selectpicker").val();

					$.ajax({
						type: "POST",
						url: "/form",
						data: {
							"_token": "{{ csrf_token() }}",
							postcodeId: postcodeId,
							postcode: postcode
						},
						success: function(data) {
							if (data.data) {
								console.log(1);
								window.location.href = '/form/' + data.data.id;
							} else {
								console.log(data);
								$("#postcodeValidation").empty();
								$('#postcodeNotFound').html('Sorry, we can’t provide ultrafast broadband to your Postcode Area');
							}
						}
					});
				} else {
					$("#postcodeNotFound").empty();
					$('#postcodeValidation').html('Please enter valid postcode!');
				}
			});

			$('body').on('click', '#postcodeSubmitMEENU', function(e) {
				e.preventDefault();
				if (validatePostCode($('.postcode').val())) {
					var postcodeId = $("#postcodeId").val();
					var postcode = $(".postcode").val();

					$.ajax({
						type: "POST",
						url: "/form",
						data: {
							"_token": "{{ csrf_token() }}",
							postcodeId: postcodeId,
							postcode: postcode
						},
						success: function(data) {
							if (data.data) {
								console.log(1);
								window.location.href = '/form/' + data.data.id;
							} else {
								console.log(data);
								$("#postcodeValidation").empty();
								$('#postcodeNotFound').html('Sorry, we can’t provide ultrafast broadband to your Postcode Area');
							}
						}
					});
				} else {
					$("#postcodeNotFound").empty();
					$('#postcodeValidation').html('Please enter valid postcode!');
				}
			});

			$("#live_search").keyup(function() {
				var query = $(this).val();
				if (query != "") {
					$.ajax({
						url: 'getdata1.html',
						method: 'GET',
						dataType: 'json',
						data: {
							query: query
						},
						success: function(data) {



							var len = data.length;

							$("#search_result").empty();
							if (len > 0) {

								for (var i = 0; i < len; i++) {

									var name = data[i].postcode;

									$("#search_result").append("<option value='" + name + "'>" + name + "</option>");

								}


							}


						},
						error: function(error) {
							console.log(`Error ${error}`);
						}

					});
				} else {
					$('#search_result').css('display', 'none');
				}

			});


		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

			$("#live_search1").keyup(function() {
				var query = $(this).val();
				if (query != "") {
					$.ajax({
						url: 'getdata3.html',
						method: 'GET',
						dataType: 'json',
						data: {
							query: query
						},
						success: function(data) {



							var len = data.length;

							$("#search_result1").empty();
							if (len > 0) {

								for (var i = 0; i < len; i++) {

									var name = data[i].postcode;

									$("#search_result1").append("<option value='" + name + "'>" + name + "</option>");

								}


							}


						},
						error: function(error) {
							console.log(`Error ${error}`);
						}

					});
				} else {
					$('#search_result1').css('display', 'none');
				}

			});


		});
	</script>
	<script>
		$(document).ready(function() {
			// Configure/customize these variables.
			var showChar = 180; // How many characters are shown by default
			var ellipsestext = "...";
			var moretext = "Read more >";
			var lesstext = "Show less";


			$('.more').each(function() {
				var content = $(this).html();

				if (content.length > showChar) {

					var c = content.substr(0, showChar);
					var h = content.substr(showChar, content.length - showChar);

					var html = c + '<span class="moreellipses" >' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

					$(this).html(html);
				}

			});

			$(".morelink").click(function() {
				if ($(this).hasClass("less")) {
					$(this).removeClass("less");
					$(this).html(moretext);
				} else {
					$(this).addClass("less");
					$(this).html(lesstext);
				}
				$(this).parent().prev().toggle();
				$(this).prev().toggle();
				return false;
			});
		});
		
	</script>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f9720f7aca01a168835e999/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>