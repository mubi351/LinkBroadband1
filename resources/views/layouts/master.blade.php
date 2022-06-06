<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Link Broadbands</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
	  	<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
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
		<link rel="stylesheet" type="text/css" href="{{ asset('wizard/css/muli-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('wizard/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('wizard/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/wizard-form-style.css')}}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('wizard/css/menu.css') }}" />
   

		<!-- Modernizr JS -->
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			.btn-cta11 a  {
				background: white;
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
				background: transparent;
				color:black;
			}
		</style>
		@yield('css')
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
		@yield('menu')
		
		@yield('content')

			@if (Cookie::get('laravel_cookie_consent') == false){
        	<div id="cookie-law-info-again" style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); position: fixed; font-family: inherit; width: auto; right: 100px; bottom: 0px;" data-nosnippet="true">
				<span id="cookie_hdr_showagain"><a data-endpoint="" data-target="modal-default" data-cache="false" data-toggle='modal' href='#' data-async="true">Privacy &amp; Cookies Policy</span>
			</div>
			@endif

		@yield('footer')

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="myLargeModalLabel" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
	
	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
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
	<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
	<script src="{{ asset('wizard/js/jquery.steps.js') }}"></script>
<script src="{{ asset('wizard/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('wizard/js/main.js') }}"></script>

	@yield('js')
	<script type="text/javascript">
		$(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
      
            $(document).on('click', 'a[data-async="true"]', function (e) {
                e.preventDefault();
                var self    = $(this),
                    url     = self.data('endpoint'),
                    target  = self.data('target'),
                    cache   = self.data('cache'),
                    act_type = self.data('act_type');
                
                $.ajax({
                    url     : url,
                    cache   : cache,
                    success : function(result){
                        // console.log(result);
                        if (target !== 'undefined'){
                            $('#'+target+' .modal-content').html(result);
                            $('#'+target).modal();
                        }
                    },
                    error : function(error){
                        console.log(error);
                    },
                }); 
            });
        });
                 
	</script>
	</body>
</html>

