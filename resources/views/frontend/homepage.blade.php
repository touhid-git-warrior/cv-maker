<!DOCTYPE html>
<html>
	
<!-- molla/index.html  22 Nov 2019 09:54:33 GMT -->
<head>
		

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Cv Maker</title>

		<meta name="author" content="p-Themes">

		<!-- Favicon -->
		<link rel="shortcut icon" href="https://www.portotheme.com/html/molla/assets/images/demos-img/favicon.ico" type="image/x-icon" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontend')}}/lib/bootstrap/bootstrap.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/main.min.css">

	</head>
	<body>
		<div class="page-wrapper">
			<header id="header">
				<div class="container-lg">
					<div class="header-left">
						<div class="logo">
							<a href="#"><img src="{{asset('frontend')}}/assets/images/demos-img/logo.png" alt="Molla Logo"></a>
						</div>
					</div>
					<div class="header-main">
						<ul class="menu">
							<li>
								<a href="#" class="goto-demos">Demos</a>
							</li>
							<li>
								<a href="#" class="goto-features">Features</a>
							</li>
							<li>
								<a href="#" class="goto-elements">Elements</a>
							</li>
							<li>
								<a href="#" class="goto-support">Support</a>
							</li>
						</ul>
					</div>
					<div class="header-right">
						<a class="mobile-menu-toggler mr-0 mr-sm-5"><i class="icon-bars"></i></a>
						<a href="{{ route('login') }}" class="btn btn-primary btn-outline"><i class="icon-shopping-cart"></i>Find Cv</a>
					</div>
				</div>
			</header>
			<div id="main">
				<section class="banner section-dark" style="background: #222;">
					<img src="{{asset('frontend')}}/assets/images/demos-img/header_splash.jpg" alt="" width="1920" height="1120">
					<div class="banner-text text-center">
						<h1>Create Your CV</h1>
						<h5 class="mb-5">Cutting out any personal information can make a CV ready for use on the web, but keep the subject line short as this can be seen by your reader. The subject line is the first thing that.</h5>
						<form method="get" action="{{ route('login') }}">
							@csrf

							 <a style="border: 1px solid #fff;" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" href="route('login')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Create Cv') }}

						</form>
						
					</div>
				</section>
				

				
				<section class="section section-support section-dark">
					<div class="container molla-lz text-center" data-oi="assets/images/demos-img/support_bg.jpg">
						<h2>Outstaning Support Center<span class="fw-400">+</span>Extensive Documentation</h2>
						<p>Support is one of our priorities, our dedicatated support<br>will be waiting for you if you have any questions.</p>
					</div>
				</section>
				<section class="section section-light section-ready container text-center">
					<h2 class="mb-3">Molla Is Ready To Use. Get It Now!</h2>
					<p>DON'T FORGET TO APPRECIATE OUR WORK. RATE US NOW!</p>
					<div class="star-rating mb-4 pb-3">
						<i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i>
					</div>
					<p><a class="btn btn-primary btn-outline" href="#"><i class="icon-shopping-cart"></i>Buy Molla</a></p>
				</section>
			</div>
			<footer id="footer" class="container-lg">
				<div class="row">
					<div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
						<p class="copyright mb-0"><a href="templateshub.net">Templateshub</a></p>
					</div>
					<div class="col-md-6 text-center text-md-right social-icons">
						<label class="mr-3">Social Media</label>
						<a href="#" title="Facebook"><i class="icon-facebook-f"></i></a>
						<a href="#" title="Twitter"><i class="icon-twitter"></i></a>
						<a href="#" title="Instagram"><i class="icon-instagram"></i></a>
						<a href="#" title="Youtube"><i class="icon-youtube"></i></a>
						<a href="#" title="Pinterest"><i class="icon-pinterest"></i></a>
					</div>
				</div>
			</footer>
		</div>

		<!-- Mobile Menu -->
		<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

		<div class="mobile-menu-container">
			<div class="mobile-menu-wrapper">
				<span class="mobile-menu-close"><i class="icon-close"></i></span>

				<nav class="mobile-nav">
					<ul class="mobile-menu">
						<li>
							<a href="#" class="goto-demos">Demos</a>
						</li>
						<li>
							<a href="#">Features</a>
						</li>
						<li>
							<a href="#">Elements</a>
						</li>
						<li>
							<a href="#">Support</a>
						</li>
					</ul>
				</nav><!-- End .mobile-nav -->

				<div class="d-flex justify-content-center social-icons">
					<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
					<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
					<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
					<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
				</div><!-- End .social-icons -->
			</div><!-- End .mobile-menu-wrapper -->
		</div><!-- End .mobile-menu-container -->

		<!-- Vendor -->
		<script src="{{asset('frontend')}}/lib/jquery/jquery.min.js"></script>
		<script src="{{asset('frontend')}}/lib/jquery.appear/jquery.appear.min.js"></script>
		<script src="{{asset('frontend')}}/lib/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="{{asset('frontend')}}/lib/isotope/jquery.isotope.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontend')}}/assets/main.js"></script>
	</body>

<!-- molla/index.html  22 Nov 2019 09:54:50 GMT -->
</html>