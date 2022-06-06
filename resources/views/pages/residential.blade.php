

<!DOCTYPE HTML>
<html>
<!-- 
	Vandan's changes (LB Project)
    Date:02/05/2022:- Line: 218 add index route 
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
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ asset('assets/css/pricing.css') }}">

	<link href="{{ asset('assets/css/carousel.css') }}" rel="stylesheet">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{ asset('assets/js/respond.min.js') }}"></script>
	<![endif]-->

	<style>
		.owl-next{    display: none;
		}
.owl-prev {
    display: none;

}
.owl-dots{
	display:none;
}
.carousel .carousel-item {
	color: #999;
	overflow: hidden;
	min-height: 120px;
	font-size: 13px;
}
.carousel .media {
	position: relative;
	padding: 0 0 0 20px;
}
.carousel .media img {
	width: 75px;
	height: 75px;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial-wrapper {
	padding: 0 10px;
}
.carousel .testimonial {
	color: #808080;
	position: relative;
	padding: 15px;
	background: #f1f1f1;
	border: 1px solid #efefef;
	border-radius: 3px;
	margin-bottom: 15px;
}
.carousel .testimonial::after {
	content: "";
	width: 15px;
	height: 15px;
	display: block;
	background: #f1f1f1;
	border: 1px solid #efefef;
	border-width: 0 0 1px 1px;
	position: absolute;
	bottom: -8px;
	left: 46px;
	transform: rotateZ(-46deg);
}
.carousel .star-rating li {
	padding: 0 2px;
}
.carousel .star-rating i {
	font-size: 16px;
	color: #ffdc12;
}
.carousel .overview {
	padding: 3px 0 0 15px;
}
.carousel .overview .details {
	padding: 5px 0 8px;
}
.carousel .overview b {
	text-transform: uppercase;
	color: #1abc9c;
}
.carousel .carousel-indicators {
	bottom: -70px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 20px;
	height: 20px;
	border-radius: 50%;
	margin: 1px 2px;
	box-sizing: border-box;
}
.carousel-indicators li {
	background: #e2e2e2;
	border: 4px solid #fff;
}
.carousel-indicators li.active {
	color: #fff;
	background: #1abc9c;
	border: 5px double;
}
.owl-carousel .owl-item .card {
    opacity: 1;
}
.btn-cta11 a  {
  background: transparent;
  padding: 2px 5px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  border:1px solid white;
  width:160px;
  border-top-left-radius:25px;
    border-top-right-radius:0px;
    border-bottom-right-radius:25px;
     border-bottom-left-radius:25px;
	 color:white;
	 text-align: center;
}

.btn-cta11 a:hover {
  background: white;
  color:black;
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
								<li class="r"><a  href="mailto:info@linkbroadbands.com"  target="_blank" rel="noopener noreferrer">info@linkbroadbands.com</a></li>
								<li class="r"><a href="tel:033 0174 1444">033 0174 1444</a></li>
								<li class="r"><a href="#">Help</a></li>
								<li class="r"><a href="{{url('faq')}}">FAQ</a></li>
								<li ><a href="{{url('news')}}">News</a></li>
							</ul>
						</div>

					</div>

				</div>
			</div>
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="fh5co-logo"><a href="{{route('home')}}"><img src="assets/images/logo1.png"  style="width:120px;height:68px;"></a></div>
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
								<li class="has-dropdown"><a href="mobileresidential.html">Mobile</a>
									<ul class="dropdown">
										<li><a href="voiceresidential.html">O2</a></li>
										<li><a href="businessvoice.html">Vodafone</a></li>

									</ul>
								</li>


								<li >
									<a href="{{url('hardware')}}">Deals</a>

								</li>

								<li class="btn-cta"><a href="{{url('broadbandform')}}"><span>Get Started</span></a></li>
								<li class="btn-cta1"><a href="https://orders.linkbroadbands.com/login"><span>My Account</span></a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</nav>


		<div class="container-fluid shapecon3"  id="lap"  style="background-image: url('assets/images/indexmain1.jpg');width:100%;height: 354px;background-position: top;">
			<div class="container">
            <div class="row" style="text-align:left;">
            <div class="col-lg-12  shapecon3" >


						<img src="assets/images/headermain.png" style="width:100%;height: AUTO;">
				</div>
            </div>
		</div>

        </div>

			<div class="container" id="mob" >

            <div class="row" >
            <div class="col-lg-12 " >

					<img  src="assets/images/headermainmob copy.png" style="width: 100%;height: 100%;object-fit: contain;" >

				</div>
            </div>


        </div>






		<div class="container"style="margin-top:20px;margin-bottom:40px;text-align:center;" >
			<div class="row" >
				<div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" >
						<div class="col-md-4 col-sm-4 col-xs-12">
							<li class="nav-item"  role="presentation" >
			  					<a class="nav-link btn btn3" id="3monthsTabHead" data-toggle="tab" href="#3months" 
								  role="tab" aria-controls="3months" aria-selected="false">3 months
								</a>
							</li>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<li class="nav-item"   role="presentation" >
			  					<a class="nav-link btn btn3" id="6monthsTabHead" data-toggle="tab" href="#6months" 
									 role="tab" aria-controls="6months" aria-selected="false">6 months
								</a>
							</li>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<li class="nav-item"  role="presentation" >
			  					<a class="nav-link btn btn3" style="background-color: #004E5B; color: white;" id="12monthsTabHead" data-toggle="pill" 
									 href="#12months" role="tab" aria-controls="12months" aria-selected="true">12 months
								</a>
							</li>
						</div>
		  			</ul>
		</div></div></div>
		  <div class="tab-content animate-box" id="pills-tabContent" style="margin-top:40px;margin-bottom:90px;">
			<div class="tab-pane fade" id="3months" role="tabpanel" aria-labelledby="3months">
				<div class="container"  style="margin-top:20px;">	<div class="flex-package">
					<div class="package1">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 40</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="--value: 10" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">40 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£26.44<br> pm</p><div class="d2 glow"><p><br>£317.28 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>

					</div>
					<div class="package2">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 50</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="--value: 15" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">50 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£28.25<br> pm</p><div class="d2 glow1"><p><br>£339.00 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>
					</div>
					<div class="package3">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 50</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="--value: 15" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">50 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">50 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£29.70<br> pm</p><div class="d2 glow2"><p><br>£356.40 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>

					</div>
					<div class="package4">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 60</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="--value: 20" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">60 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">12 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£30.45<br> pm</p><div class="d2 glow3"><p><br>£365.40 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>
						</div>

					</div>

				</div>
				<div class="row"><div class="col-lg-12"><br></div></div>


				<div class="container"  style="margin-top:20px;">
					<div class="flex-package">
				<div class="package1">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK FAST FIBRE 60</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="--value: 20" ></div></div>
						<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">60 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">60 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£33.65<br> pm</p><div class="d2 glow"><p><br>£403.80 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>

				</div>
				<div class="package2">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 80</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="--value: 30" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">80 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">20 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£32.65<br> pm</p><div class="d2 glow1"><p><br>£391.80 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>
				</div>
				<div class="package3">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 100</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">100 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">20 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£32.85<br> pm</p><div class="d2 glow2"><p><br>£394.20 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>

				</div>
				<div class="package4">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 100</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">100 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">100 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£36.45<br> pm</p><div class="d2 glow3"><p><br>£437.40 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>
					</div>

				</div>

			</div>

		<div class="row"><div class="col-lg-12"><br></div></div>

			<div class="container"  style="margin-top:20px;">
				<div class="flex-package">
			<div class="package1">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 110</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="--value: 45" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">110 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">15 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£32.95<br> pm</p><div class="d2 glow"><p><br>£395.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>

			</div>
			<div class="package2">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 120</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value: 50" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">120 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">24 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£33.20<br> pm</p><div class="d2 glow1"><p><br>£398.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>
			</div>
			<div class="package3">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 120</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value: 50" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">120 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">120 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£38.70<br> pm</p><div class="d2 glow2"><p><br>£464.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>

			</div>
			<div class="package4">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK ULTRA FAST FIBRE 160</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value: 65" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">160 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">30 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£34.95<br> pm</p><div class="d2 glow3"><p><br>£419.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>
				</div>

			</div>

		</div>

		<div class="row"><div class="col-lg-12"><br></div></div>
		<div class="container"  style="margin-top:20px;">
			<div class="flex-package">
		<div class="package1">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 200</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value: 75" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">25 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£38.44<br> pm</p><div class="d2 glow"><p><br>£461.28 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}
				"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package2">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 200</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value: 75" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">200 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£44.05<br> pm</p><div class="d2 glow1"><p><br>£528.60 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
		</div>
		<div class="package3">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 300</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="--value: 85" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">300 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">300 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£50.45 <br> pm</p><div class="d2 glow2"><p><br>£605.40 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package4">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 330</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="--value: 95" ></div></div>
				<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">330 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">50 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£46.10<br> pm</p><div class="d2 glow3"><p><br>£553.20 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
			</div>

		</div>

		</div>

		<div class="row"><div class="col-lg-12"><br></div></div>
		<div class="container"  style="margin-top:20px;">
			<div class="flex-package">
		<div class="package1">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 360</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100" ></div></div>
				<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">72 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£48.44<br> pm</p><div class="d2 glow"><p><br>£581.28 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package2">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 360</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">180 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£49.45<br> pm</p><div class="d2 glow1"><p><br>£593.40 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
		</div>



		</div>

		</div>




				</div>
				<div class="tab-pane fade" id="6months" role="tabpanel" aria-labelledby="6months">
				<div class="container"  style="margin-top:20px;margin-bottom:0px;">	<div class="flex-package">
					<div class="package1">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 40</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="--value: 10" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">40 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£26.19<br> pm</p><div class="d2 glow"><p><br>£314.28 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>

					</div>
					<div class="package2">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 50</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="--value: 15" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">50 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£28.00<br> pm</p><div class="d2 glow1"><p><br>£336.00 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>
					</div>
					<div class="package3">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 50</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="--value: 15" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">50 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">50 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£29.45<br> pm</p><div class="d2 glow2"><p><br>£353.40 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>

					</div>
					<div class="package4">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 60</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="--value: 20" ></div></div>
							<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">60 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">12 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£30.20<br> pm</p><div class="d2 glow3"><p><br>£362.40 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>
						</div>

					</div></div>


				<div class="row"><div class="col-lg-12"><br></div></div>


				<div class="container"  style="margin-top:20px;">
					<div class="flex-package">
				<div class="package1">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK FAST FIBRE 60</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="--value: 20" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">60 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">60 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£32.20<br> pm</p><div class="d2 glow"><p><br>£386.40 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>

				</div>
				<div class="package2">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 80</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="--value: 30" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">80 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">20 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£32.40<br> pm</p><div class="d2 glow1"><p><br>£388.80 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>
				</div>
				<div class="package3">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 100</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="--value: 30" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">100 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">20 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£32.60<br> pm</p><div class="d2 glow2"><p><br>£391.20 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>

				</div>
				<div class="package4">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 100</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">100 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">100 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£36.20<br> pm</p><div class="d2 glow3"><p><br>£434.40 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>
					</div>

				</div>

			</div>

		<div class="row"><div class="col-lg-12"><br></div></div>

			<div class="container"  style="margin-top:20px;">
				<div class="flex-package">
			<div class="package1">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 110</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="--value: 45" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">110 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">15 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£32.70<br> pm</p><div class="d2 glow"><p><br>£392.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>

			</div>
			<div class="package2">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 120</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value: 50" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">120 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">24 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£32.95<br> pm</p><div class="d2 glow1"><p><br>£395.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>
			</div>
			<div class="package3">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 120</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value: 50" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">120 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">120 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£38.45<br> pm</p><div class="d2 glow2"><p><br>£461.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>

			</div>
			<div class="package4">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK ULTRA FAST FIBRE 160</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value: 65" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">160 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">30 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£34.70<br> pm</p><div class="d2 glow3"><p><br>£416.40 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}
					"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>
				</div>

			</div>

		</div>

		<div class="row"><div class="col-lg-12"><br></div></div>
		<div class="container"  style="margin-top:20px;">
			<div class="flex-package">
		<div class="package1">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 200</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value: 75" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">25 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£38.19<br> pm</p><div class="d2 glow"><p><br>£458.28 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package2">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 200</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value: 75" ></div></div>
				<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">200 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£43.80<br> pm</p><div class="d2 glow1"><p><br>£525.60 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
		</div>
		<div class="package3">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 300</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="--value: 85" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">300 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">300 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£50.20 <br> pm</p><div class="d2 glow2"><p><br>£602.40 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package4">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 330</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="--value: 95" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">330 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">50 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£45.85<br> pm</p><div class="d2 glow3"><p><br>£550.20 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
			</div>

		</div>

		</div>

		<div class="row"><div class="col-lg-12"><br></div></div>
		<div class="container"  style="margin-top:20px;">
			<div class="flex-package">
		<div class="package1">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 360</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100" ></div></div>
				<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">72 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£48.19<br> pm</p><div class="d2 glow"><p><br>£578.28 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package2">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 360</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">180 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£49.20<br> pm</p><div class="d2 glow1"><p><br>£590.40 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
		</div>



		</div>

		</div>

			</div>








			<div class="tab-pane fade active in" id="12months" role="tabpanel" aria-labelledby="pills-contact-tab"><div class="container"  style="margin-top:20px;">
				<div class="flex-package">
					<div class="package1">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 40</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="--value: 10" ></div></div>
							<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">40 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£24.99<br> pm</p><div class="d2 glow"><p><br>£299.88 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>

					</div>
					<div class="package2">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 50</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="--value: 15" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">50 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">10 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£26.80<br> pm</p><div class="d2 glow1"><p><br>£321.60 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>
					</div>
					<div class="package3">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 50</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="--value: 15" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">50 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">50 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£28.25<br> pm</p><div class="d2 glow2"><p><br>£339.00 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>

					</div>
					<div class="package4">
						<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
							<p class="packageheadtext">LINK FAST FIBRE 60</p>
						</div>
						<div class="packagereinside">

							<div class="pcon" ><div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="--value: 20" ></div></div>
							<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">60 Mbps</span><br>Download</span>
								<span  class="upload"><span style="color:#0D5460;">12 Mbps</span><br>Upload</span></div>

							</div>
						<div class="package1inside">
							<div class="d1"><p><br>£29.00<br> pm</p><div class="d2 glow3"><p><br>£348.00 Cost per Annum</p></div></div>

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
							<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
							</p>

							</p>
						</div>
						</div>

					</div>

				</div>
				<div class="row"><div class="col-lg-12"><br></div></div>


				<div class="container"  style="margin-top:20px;">
					<div class="flex-package">
				<div class="package1">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK FAST FIBRE 60</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="--value: 20" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">60 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">60 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£31.00<br> pm</p><div class="d2 glow"><p><br>£372.00 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>

				</div>
				<div class="package2">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 80</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="--value: 30" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">80 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">20 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£31.20<br> pm</p><div class="d2 glow1"><p><br>£374.40 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>
				</div>
				<div class="package3">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 100</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">100 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">20 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£31.40<br> pm</p><div class="d2 glow2"><p><br>£376.80 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>

				</div>
				<div class="package4">
					<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
						<p class="packageheadtext">LINK SUPER FAST FIBRE 100</p>
					</div>
					<div class="packagereinside">

						<div class="pcon" ><div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="--value: 40" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">100 Mbps</span><br>Download</span>
							<span  class="upload"><span style="color:#0D5460;">100 Mbps</span><br>Upload</span></div>

						</div>
					<div class="package1inside">
						<div class="d1"><p><br>£35.00<br> pm</p><div class="d2 glow3"><p><br>£420.00 Cost per Annum</p></div></div>

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
						<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
						</p>

						</p>
					</div>
					</div>

				</div>

			</div>

		<div class="row"><div class="col-lg-12"><br></div></div>

			<div class="container"  style="margin-top:20px;">
				<div class="flex-package">
			<div class="package1">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 110</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="--value: 45" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">110 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">15 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£31.50<br> pm</p><div class="d2 glow"><p><br>£378.00 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>

			</div>
			<div class="package2">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 120</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value: 50" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">120 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">24 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£31.75<br> pm</p><div class="d2 glow1"><p><br>£381.00 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>
			</div>
			<div class="package3">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK SUPER FAST FIBRE 120</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="--value: 50" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">120 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">120 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£37.25<br> pm</p><div class="d2 glow2"><p><br>£447.00 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>

			</div>
			<div class="package4">
				<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
					<p class="packageheadtext">LINK ULTRA FAST FIBRE 160</p>
				</div>
				<div class="packagereinside">

					<div class="pcon" ><div role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="--value: 65" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">160 Mbps</span><br>Download</span>
						<span  class="upload"><span style="color:#0D5460;">30 Mbps</span><br>Upload</span></div>

					</div>
				<div class="package1inside">
					<div class="d1"><p><br>£33.50<br> pm</p><div class="d2 glow3"><p><br>£402.00 Cost per Annum</p></div></div>

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
					<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
					</p>

					</p>
				</div>
				</div>

			</div>

		</div>

		<div class="row"><div class="col-lg-12"><br></div></div>
		<div class="container"  style="margin-top:20px;">
			<div class="flex-package">
		<div class="package1">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 200</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value: 75" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">25 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£36.99<br> pm</p><div class="d2 glow"><p><br>£443.88 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package2">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 200</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="--value: 75" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">200 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">200 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£42.60<br> pm</p><div class="d2 glow1"><p><br>£511.20 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
		</div>
		<div class="package3">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 300</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="--value: 85" ></div></div>
								  <div style="margin-top:10px;"><span class="download"><span style="color:#0D5460;">300 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">300 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£49.00 <br> pm</p><div class="d2 glow2"><p><br>£588.00 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package4">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 330</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="--value: 95" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">330 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">50 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£44.65<br> pm</p><div class="d2 glow3"><p><br>£535.80 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
			</div>

		</div>

		</div>

		<div class="row"><div class="col-lg-12"><br></div></div>
		<div class="container"  style="margin-top:20px;">
			<div class="flex-package">
		<div class="package1">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 360</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100" ></div></div>
				<div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">72 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£46.99<br> pm</p><div class="d2 glow"><p><br>£563.88 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>

		</div>
		<div class="package2">
			<div class="packagehead" style="background-image: url(assets/images/package1head11.png);background-repeat: no-repeat !important;">
				<p class="packageheadtext">LINK ULTRA FAST FIBRE 360</p>
			</div>
			<div class="packagereinside">

				<div class="pcon" ><div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="--value: 100" ></div></div>
								  <div style="margin-top:10px;"> <span class="download"><span style="color:#0D5460;">360 Mbps</span><br>Download</span>
					<span  class="upload"><span style="color:#0D5460;">180 Mbps</span><br>Upload</span></div>

				</div>
			<div class="package1inside">
				<div class="d1"><p><br>£48.00<br> pm</p><div class="d2 glow1"><p><br>£576.00 Cost per Annum</p></div></div>

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
				<div class="allbtn" style="text-align:center;"><a href="{{url('broadbandform')}}"><span>Seal the Deal</span></a></div>
				</p>

				</p>
			</div>
		</div>



		</div>

		</div>






			</div></div>
			<script src="assets/js/jquery-3.1.0.js"></script>
			<script type="text/javascript">
				$('#3monthsTabHead').on('click',function () {
					//$('#3months').addClass('active in')
					$('#6monthsTabHead').removeClass('show')
					$('#12monthsTabHead').removeClass('show')
				});
				$('#6monthsTabHead').on('click',function () {
					//$('#6months').addClass('active in')
					$('#3monthsTabHead').removeClass('show')
					$('#12monthsTabHead').removeClass('show')
				});
				$('#12monthsTabHead').on('click',function () {
					$('#3monthsTabHead').removeClass('show')
					$('#6monthsTabHead').removeClass('show')
					//$('#12months').addClass('active in')
				});

			</script>
		<div class="container-fluid" style="text-align:center;background-color:#F9FBFE;margin-top:0px;margin-left:0px;margin-right:0px;padding-top:8px;padding-bottom:8px;">
			<div class="row animate-box">
				<div class="col-lg-12">
					<p class="webfeatures">Need help?</p>
				</div>
			</div>


			<div class="row" style="margin-top:5px;font-size:16px;font-weight: 400;">
				<div class="col-lg-4"  >
					<img src="assets/images/indexicon1.jpg" style="margin-bottom:5px;">
				  <h4 style="color: #141928;font-family: 'Roboto',sans-serif !important;margin-bottom:5px;">To purchase our packages</h4>
				  <p style="color: #141928;">Call us on: <a href="tel:033 0174 1444" style="color:#34E6DA;">033 0174 1444</a><br>

					Monday - Friday: 8am to 6pm<br>

					Saturday: 10am to 5pm</p>

				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4"  >
					<img src="assets/images/indexicon2.jpg" style="margin-bottom:5px;">
				  <h4 style="color: #141928;margin-bottom:5px;font-family: 'Roboto',sans-serif !important;">For Customer Service</h4>
				  <p style="color: #141928;">Call us on: <a href="tel:033 0174 1444" style="color:#34E6DA;">033 0174 1444</a><br>

					Monday - Friday: 8am to 6pm<br>

					Weekends: 10am to 5pm</p>

				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img src="assets/images/indexicon3.jpg" style="margin-bottom:5px;">
				  <h4 style="color: #141928;margin-bottom:5px;font-family: 'Roboto',sans-serif !important;">Out of hours?</h4>
				  <p style="color: #141928;"><a href="{{url('contact-us')}}" style="color:#34E6DA;">Click here.</a><br>

					Complete the form and our<br> team will be in touch. </p>

				</div><!-- /.col-lg-4 -->
			  </div>
		</div>


		<footer id="fh5co-footer" style="background-color: #34AFAC;margin-bottom:0px !important;padding-bottom:0px !important;">

			<div class="container-fluid" style="color:white;margin-bottom:0px !important;padding-bottom:0px !important;">
				<div class="row ">

					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 fh5co-widget">
						<img src="assets/images/logofooter.png" style="width:119px;height:76px;">
						<h3 style="margin-top:30px;">OPENING TIME</h3>
						<ul class="fh5co-footer-links">
							<li >Mon - Fri: 8am to 6pm
							</li>
							<li>Sat: 10am to 5pm</li>

						</ul>

					</div>

					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 fh5co-widget">
						<h3 >ADDRESS</h3>
						<ul class="fh5co-footer-links" >
							<li >Kemp House,
								152-160, City Road,
								London, EC1V 2NX.</li>
							<li >Dartford Business Park,
								Victoria Road,
								Dartford, DA1 5FS, UK</li>

						</ul>

					</div>

					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 fh5co-widget" style="color:white;">
						<h3 >QUICK LINKS</h3>
						<ul class="fh5co-footer-links" >
						<li><a href="{{url('terms-and-conditions')}}">Terms And Condition</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{url('tc-for-digital-phone-and-fibre-broadband')}}">T&C For Digital Phone And
                                Fibre Broadband</a></li>
                        <li><a href="{{url('code-of-complaints')}}">Code Of Complaints</a></li>
                        <li><a href="https://www.royalmail.com/track-your-item#/">Track Your Router</a></li>
                        <li><a href="https://pay.gocardless.com/flow/RE001P69K2PYRCX7CFTCV1VQ8VMME257">Set Up Your
                                Direct Debit</a></li>
        		</ul>

					</div>

					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 fh5co-widget">
						<h3 >ALL SERVICES</h3>
						<ul class="fh5co-footer-links" >
						<li><a href="{{route('home')}}">Home</a></li>
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

							<a href="https://www.facebook.com/uklinkbroadband/" ><i class="fa fa-facebook" style="background-color:transparent;color:white;"></i></a><a href="https://www.instagram.com/uklinkbroadband/"><i  class="fa fa-instagram" style="background-color:transparent;color:white;"></i></a><a href="https://twitter.com/linkbroadband" ><i  class="fa fa-twitter" style="background-color:transparent;color:white;"></i></a><a href="https://www.linkedin.com/company/link-broadbands/" ><i class="fa fa-linkedin" style="background-color:transparent;color:white;"></i></a>


						</div>
					</div></div>

				</div>
			</footer>




	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="fa fa-arrow-up" style="background:transparent;color:white;"></i></a>
	</div>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<!-- Carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
<!-- countTo -->
<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
<!-- Count Down -->
<script src="{{ asset('assets/js/simplyCountdown.js') }}"></script>
<!-- Main -->
<script src="{{ asset('assets/js/main.js') }}"></script>



</body>


</body>

</html>
