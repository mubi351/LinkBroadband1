@section('footer')
	<div class="container-fluid" style="text-align:center;background-color:#F9FBFE;margin-top:0px;margin-left:0px;margin-right:0px;">
		<div class="row animate-box">
			<div class="col-lg-12">
				<p class="webfeatures">Need help?</p>
			</div>
		</div>
		
		<div class="row" style="margin-top:5px;font-size:16px;font-weight: 400;">
			<div class="col-lg-4"  >
				<img src="{{ asset('assets/images/indexicon1.jpg') }}" style="margin-bottom:5px;">
			  	<h4 style="color: #141928;font-family: 'Roboto',sans-serif !important;margin-bottom:5px;">To purchase our packages</h4>
			  	<p style="color: #141928;">Call us on: <a href="tel:033 0174 1444" style="color:#34E6DA;">033 0174 1444</a><br>
				Monday - Friday: 8am to 6pm<br>
				Saturday: 10am to 5pm</p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4"  >
				<img src="{{ asset('assets/images/indexicon2.jpg') }}" style="margin-bottom:5px;">
			  	<h4 style="color: #141928;margin-bottom:5px;font-family: 'Roboto',sans-serif !important;">For Customer Service</h4>
			  	<p style="color: #141928;">Call us on: <a href="tel:033 0174 1444" style="color:#34E6DA;">033 0174 1444</a><br>
				Monday - Friday: 8am to 6pm<br>
				Weekends: 10am to 5pm</p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img src="{{ asset('assets/images/indexicon3.jpg') }}" style="margin-bottom:5px;">
			  	<h4 style="color: #141928;margin-bottom:5px;font-family: 'Roboto',sans-serif !important;">Out of hours?</h4>
			  	<p style="color: #141928;"><a href="contact.php" style="color:#34E6DA;">Click here.</a><br>
				Complete the form and our<br> team will be in touch. </p>
			</div><!-- /.col-lg-4 -->
		</div>
	</div>
	<footer id="fh5co-footer" role="contentinfo" style="background-color: #34AFAC;">
		<div class="container-fluid" style="color:white;">
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<img src="{{ asset('assets/images/logofooter.png') }}" style="width:119px;height:76px;">
					<h3 style="margin-top:30px;">OPENING TIME</h3>
					<ul class="fh5co-footer-links">
						<li ><a href="#">Mon - Fri: 8am to 6pm
						</a></li>
						<li><a href="#">Sat: 10am to 5pm</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3 >ADDRESS</h3>
					<ul class="fh5co-footer-links" >
						<li ><a href="#">Kemp House,
							152-160, City Road,
							London, EC1V 2NX.</a></li>
						<li ><a href="#">Dartford Business Park, 
							Victoria Road,
							Dartford, DA1 5FS, UK</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget" style="color:white;">
					<h3 >QUICK LINKS</h3>
					<ul class="fh5co-footer-links" >
						<li><a href="">Terms And Condition</a></li>
						<li ><a href="">Privacy Policy</a></li>
						<li ><a href="">T&C For Digital Phone And 
							Fibre Broadband</a></li>
						<li ><a href="">Code Of Complaints</a></li>
						<li ><a href="https://www.royalmail.com/track-your-item#/" target="_blank">Track Your Router</a></li>
						<li ><a href="https://pay.gocardless.com/flow/RE001P69K2PYRCX7CFTCV1VQ8VMME257" target="_blank">Set Up Your Direct Debit</a></li>
					</ul>
					
				</div>

				<div class="col-md-3 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3 >ALL SERVICES</h3>
					<ul class="fh5co-footer-links" >
						<li ><a href="">Home</a></li>
						<li ><a href="">Home Broadband</a></li>
						<li ><a href="">Business Broadband</a></li>
						<li><a href="">Hardwares</a></li>
						<li ><a href="">News</a></li>
						<li ><a href="">About Us</a></li>
						<li ><a href="">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="container">
				<div class="copy">
					<div class="copy1">
						<p>Copyright © {{ date('Y') }} Link Broadbands. All Rights Reserved.</p>
					</div>
					<div class="copy2" style="color:white;">
						<a href="#" ><i class="fa fa-facebook-f" style="background-color:transparent;color:white;"></i></a>
						<a href="#" ><i  class="fa fa-twitter" style="background-color:transparent;color:white;"></i></a>
						<a href="#" ><i class="fa fa-linkedin" style="background-color:transparent;color:white;"></i></a>
						<a href="#"><i class="fa fa-youtube" style="background-color:transparent;color:white;"></i></i></a>
					</div>
				</div>
			</div>
	
		</div>
	</footer>
@endsection