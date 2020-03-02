<?php
include('session.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Pelh is an educational helper tool">
    <meta name="author" content="Ansonika">
    <title>PELH | Personal Helper</title>

    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index.html"><img src="img/pelh.png" width="80" height="60" data-retina="true" alt="Logo-pelh" style="background-color:#FFFFFF"></a>
		</div>
		 
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="#0">Word pool</a></span>
					 
				</li>
				<li><span><a href="#0">My content</a></span>
				 
				</li>
				<li><span><a href="backend/">Account</a></span>
				 
				</li>
				 
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>What are you looking for?</h3>
					<!--<p>Increase your expertise in business, technology and personal development</p>-->
					<form>
						<div id="custom-search-input">
							<div class="input-group">
								<input type="text" class=" search-query" placeholder="Ex. Architecture, Specialization...">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

	<!--	<div class="features clearfix">
			<div class="container">
				<ul>
					<li><i class="pe-7s-study"></i>
						<h4>+200 courses</h4><span>Explore a variety of fresh topics</span>
					</li>
					<li><i class="pe-7s-cup"></i>
						<h4>Expert teachers</h4><span>Find the right instructor for you</span>
					</li>
					<li><i class="pe-7s-target"></i>
						<h4>Focus on target</h4><span>Increase your personal expertise</span>
					</li>
				</ul>
			</div>
		</div>-->
		<!-- /features -->

 		<!-- /container -->

		<div class="container margin_30_95">
			<div class="main_title_2">
				<span><em></em></span> 
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_1.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>15 Programmes</small>
								<h3>Arts and Humanities</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_2.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Engineering</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_3.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Architecture</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_4.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Science and Biology</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_5.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Law and Criminology</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
				<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
					<a href="#0" class="grid_item">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="http://via.placeholder.com/800x533/ccc/fff/course_6.jpg" class="img-fluid" alt="">
							<div class="info">
								<small><i class="ti-layers"></i>23 Programmes</small>
								<h3>Medical</h3>
							</div>
						</figure>
					</a>
				</div>
				<!-- /grid_item -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	 
		<!-- /bg_color_1 -->

		 
		<!--/call_section-->
	</main>
	<!-- /main -->

	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/pelh.png" width="90" height="70" data-retina="true" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
					 
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links"> 
						<li><a href="#0">About</a></li>
						<li><a href="#0">Login</a></li>
						<li><a href="#0">Register</a></li> 
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://+250785304693"><i class="ti-mobile"></i> +250 786 321 456</a></li>
						<li><a href="mailto:info@pelh.com"><i class="ti-email"></i> info@pelh.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
							<input type="submit" value="Submit" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2020 euwimana - lkazenga - mmugisha - sylviaa</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
</body>
</html>