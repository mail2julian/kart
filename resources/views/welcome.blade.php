<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Laravel Multi Auth Guard') }}</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Intro</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#team">Team</a></li>
					<li><a href="#pricing">Pricing</a></li>
					<li><a href="/customer/register"  class="btn btn-blue">Customer</a></li>
					<li><a href="/serviceprovider/register"  class="btn btn-blue">Service Provider</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Good service is good business.</h3>
							<h1 class="white typed">Make a customer, not a sale.</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="cut cut-top"></div>
		<div class="container">
			<div class="row intro-tables">
				<div class="col-md-4">
					<div class="intro-table intro-table-first">
						<h5 class="white heading">Today's Special Offers</h5>
						<div class="owl-carousel owl-schedule bottom">
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Computer Repair</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Starting from 1000/-</h5>
									</div>
								</div>
								
								<!--
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>

							-->
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Car Pooling</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">15/- off on the first service!</h5>
									</div>
								</div>
								
								<!--
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							-->
							</div>
							<div class="item">
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Mehendi Artists</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">Flat 20% off on bridal mehendis!</h5>
									</div>
								</div>

								<!--
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Muscle Building</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
								<div class="schedule-row row">
									<div class="col-xs-6">
										<h5 class="regular white">Cardio</h5>
									</div>
									<div class="col-xs-6 text-right">
										<h5 class="white">8:30 - 10:00</h5>
									</div>
								</div>
							-->
							</div>
						</div>
					</div>
				</div>
				
				<!--
				<div class="col-md-4">
					<div class="intro-table intro-table-hover">
						<h5 class="white heading hide-hover">Premium Membership</h5>
						<div class="bottom">
							<h4 class="white heading small-heading no-margin regular">Register Today</h4>
							<h4 class="white heading small-pt">20% Discount</h4>
							<a href="#" class="btn btn-white-fill expand">Register</a>
						</div>
					</div>
				</div>
			-->
				<div class="col-md-4">
					<div class="intro-table intro-table-third">
						<h5 class="white heading">Happy Clients</h5>
						<div class="owl-testimonials bottom">
							<div class="item">
								<h4 class = "white heading content">I couldn't be more happy with the services!</h4>
								<h5 class = "white heading light author">Sangram Singh</h5>
							</div>
							<div class = "item">
								<h4 class = "white heading content">Excellent work!</h4>
								<h5 class = "white heading light author">Anant Roy</h5>
							</div>
							<div class = "item">
								<h4 class = "white heading content">Very dedicated and Prompt work!</h4>
								<h5 class = "white heading light author">Christina Alex</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Services</h2>
				<h4 class = "light muted">Achieve the best results with our wide variety of service options!</h4>
			</div>
			<div class = "row services">
				<div class = "col-md-4">
					<div class = "service">
						<div class = "icon-holder">
							<img src = "img/icons/heart-blue.png" alt = "" class = "icon">
						</div>
						<h4 class = "heading">Office services</h4>
						<p class = "description">Wide range of services to choose from. Electrical maintainence, car pooling, day care services and much more.</p>
					</div>
				</div>
				<div class = "col-md-4">
					<div class = "service">
						<div class = "icon-holder">
							<img src = "img/icons/guru-blue.png" alt = "" class = "icon">
						</div>
						<h4 class = "heading">Beauty services</h4>
						<p class = "description">Life isn't perfect but your hair and makeup can be. Aiming at providing best salon services at your doorstep.</p>
					</div>
				</div>
				<div class = "col-md-4">
					<div class = "service">
						<div class = "icon-holder">
							<img src = "img/icons/weight-blue.png" alt = "" class = "icon">
						</div>
						<h4 class = "heading">Tutoring Services</h4>
						<p class = "description">Find the tutor that suits best for your child. Various options to find the right one that can brighten your child's future.</p>
					</div>
				</div>
			</div>
		</div>
		<div class = "cut cut-bottom"></div>
	</section>
	<section id = "team" class = "section gray-bg">
		<div class = "container">
			<div class = "row title text-center">
				<h2 class = "margin-top">Team</h2>
				<h4 class = "light muted">We're a dream team!</h4>
			</div>
			<div class = "row">
				<div class = "col-md-4">
					<div class = "team text-center">
						<div class = "cover" style = "background:url('img/team/team-cover1.jpg'); background-size:cover;">
							<div class = "overlay text-center">
								<h3 class = "white">One of the most popular artist</h3>
								<h5 class = "light light-white">Package Starting from 2500/-</h5>
							</div>
						</div>
						<img src = "img/team/team1.jpg" alt = "Team Image" class = "avatar">
						<div class = "title">
							<h4>Alisha Garg</h4>
							<h5 class = "muted regular">Bridal Makeup Artist</h5>
						</div>
						<button data-toggle = "modal" data-target = "#modal1" class = "btn btn-blue-fill">Book Now</button>
					</div>
				</div>
				<div class = "col-md-4">
					<div class = "team text-center">
						<div class = "cover" style = "background:url('img/team/team-cover2.jpg'); background-size:cover;">
							<div class = "overlay text-center">
								<h3 class = "white">Computer Science Tutor</h3>
								<h5 class = "light light-white">10 - 15 sessions / month</h5>
							</div>
						</div>
						<img src = "img/team/team2.jpg" alt = "Team Image" class = "avatar">
						<div class = "title">
							<h4>John Fernandiz</h4>
							<h5 class = "muted regular">Tutor</h5>
						</div>
						<a href = "#" data-toggle = "modal" data-target = "#modal1" class = "btn btn-blue-fill ripple">Book Now</a>
					</div>
				</div>
				<div class = "col-md-4">
					<div class = "team text-center">
						<div class = "cover" style = "background:url('img/team/team-cover3.jpg'); background-size:cover;">
							<div class = "overlay text-center">
								<h3 class = "white">Go car-pooling at any time of the day with Raja!</h3>
								<h5 class = "light light-white">Available 24/7</h5>
							</div>
						</div>
						<img src = "img/team/team3.jpg" alt = "Team Image" class = "avatar">
						<div class = "title">
							<h4>Raja Gowda</h4>
							<h5 class = "muted regular">Car pooling service</h5>
						</div>
						<a href = "#" data-toggle = "modal" data-target = "#modal1" class = "btn btn-blue-fill ripple">Book Now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id = "pricing" class = "section">
		<div class = "container">
			<div class = "row title text-center">
				<h2 color = "black">Pricing</h2>
				<h4 color = "gray">Signup with us today for the better quality of services!</h4>
			</div>
			<div class = "row no-margin">
				<div class = "col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class = "pricing">
						<div class = "box-main active" data-img = "img/pricing1.jpg">
							<h4 class = "white">Office Services</h4>
							<h4 class = "white regular light">Available for any small or big service <!--<span class = "small-font">/ year</span> --></h4>
							<a href = "#" data-toggle = "modal" data-target = "#modal1" class = "btn btn-white-fill">Sign Up Now</a>
							<i class = "info-icon icon_question"></i>
						</div>
						<div class = "box-second active">
							<ul class = "white-list text-left">
								<li>Authenticated Service providers</li>
								<li>Booking the service with one click</li>
								<li>Verified contact details</li>
								<li>One-to-one communication between the customer and the service provider</li>
								<li>Experienced Workers, known not to create a mess.</li>
							</ul>
						</div>
					</div>
					<div class = "pricing">
						<div class = "box-main" data-img = "img/pricing2.jpg">
							<h4 class = "white">Beauty services</h4>
							<h4 class = "white regular light">Starting from 800/- <!-- <span class = "small-font">/ year</span> --></h4>
							<a href = "#" data-toggle = "modal" data-target = "#modal1" class = "btn btn-white-fill">Sign Up Now</a>
							<i class = "info-icon icon_question"></i>
						</div>
						<div class = "box-second">
							<ul class = "white-list text-left">
								<li>Experienced artists</li>
								<li>Priority given to the users' likes / dislikes</li>
								<li>Aiming at maintaining the cleanliness of the work place</li>
								<li>Branded products at use</li>
								<li>Disposable bags and towels</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class = "section section-padded blue-bg">
		<div class = "container">
			<div class = "row">
				<div class = "col-md-8 col-md-offset-2">
					<div class = "owl-twitter owl-carousel">
						<div class = "item text-center">
							<i class = "icon fa fa-twitter"></i>
							<h4 class = "white light">To keep a customer demands as much skill as to win one.</h4>
							<h4 class = "light-white light">#service</h4>
						</div>
						<div class = "item text-center">
							<i class = "icon fa fa-twitter"></i>
							<h4 class = "white light">Life is for service.</h4>
							<h4 class = "light-white light">#exellence</h4>
						</div>
						<div class = "item text-center">
							<i class = "icon fa fa-twitter"></i>
							<h4 class = "white light">Whatever you are, be a good one.</h4>
							<h4 class = "light-white light">#happycustomers</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class = "modal fade" id = "modal1" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true">
		<div class = "modal-dialog">
			<div class = "modal-content modal-popup">
				<a href = "#" class = "close-link"><i class = "icon_close_alt2"></i></a>
				<h3 class = "white">Sign Up</h3>
				<form action = "" class = "popup-form">
					<input type = "text" class = "form-control form-white" placeholder = "Full Name">
					<input type = "text" class = "form-control form-white" placeholder = "Email Address">
					<div class = "dropdown">
						<button id = "dLabel" class = "form-control form-white dropdown" type = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
							Pricing Plan
						</button>
						<ul class = "dropdown-menu animated fadeIn" role = "menu" aria-labelledby = "dLabel">
							<li class = "animated lightSpeedIn"><a href = "#">1 month membership ($150)</a></li>
							<li class = "animated lightSpeedIn"><a href = "#">3 month membership ($350)</a></li>
							<li class = "animated lightSpeedIn"><a href = "#">1 year membership ($1000)</a></li>
							<li class = "animated lightSpeedIn"><a href = "#">Free trial class</a></li>
						</ul>
					</div>
					<div class = "checkbox-holder text-left">
						<div class = "checkbox">
							<input type = "checkbox" value = "None" id = "squaredOne" name = "check" />
							<label for = "squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type = "submit" class = "btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class = "container">
			<div class = "row">
				<div class = "col-sm-6 text-center-mobile">
					<h3 class = "white">Book your first service!</h3>
					<h5 class = "light regular light-white">Help us find you and serve you.</h5>
					<a href = "#" class = "btn btn-blue ripple trial-button">Start your journey</a>
				</div>
				<div class = "col-sm-6 text-center-mobile">
					<h3 class = "white">Opening Hours <span class = "open-blink"></span></h3>
					<div class = "row opening-hours">
						<div class = "col-sm-6 text-center-mobile">
							<h5 class = "light-white light">Anyday</h5>
							<h3 class = "regular white">24 / 7</h3>
						</div>
						<!--
						<div class = "col-sm-6 text-center-mobile">
							<h5 class = "light-white light">Sat - Sun</h5>
							<h3 class = "regular white">10:00 - 18:00</h3>
						</div>
						-->
					</div>
				</div>
			</div>
			<div class = "row bottom-footer text-center-mobile">
				<div class = "col-sm-8">
					<p>&copy; 2018 All Rights Reserved. <!-- Powered by <a href = "http://www.phir.co/">PHIr</a> exclusively for <a href = "http://tympanus.net/codrops/">Codrops</a> --></p>
				</div>
				<div class = "col-sm-4 text-right text-center-mobile">
					<ul class = "social-footer">
						<li><a href = "http://www.facebook.com/pages/Codrops/159107397912"><i class = "fa fa-facebook"></i></a></li>
						<li><a href = "http://www.twitter.com/codrops"><i class = "fa fa-twitter"></i></a></li>
						<li><a href = "https://plus.google.com/101095823814290637419"><i class = "fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
