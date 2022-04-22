<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.rovadex.com/html-giner/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:38:05 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Giner</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
	<!-- =================== STYLE =================== -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('head')
</head>

<body id="home">
	<!-- =============== PRELOADER =============== -->
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner cssload-one"></div>
			<div class="cssload-inner cssload-two"></div>
			<div class="cssload-inner cssload-three"></div>
		</div>
	</div>
	<!-- ============== PRELOADER END ============== -->
	<span class="bg-effect" style="background-image: url({{ asset('assets/img/main-bg.svg') }});"></span>
	<!-- ================= HEADER ================= -->
	<header class="marathon-header-fixed header-fixed">
		<a href="#" class="nav-btn">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<div class="top-panel">
			<div class="container">
				<a href="index-2.html" class="logo"><img src="{{ asset('assets/img/logo-white.svg') }}" alt="logo"></a>
				<ul class="social-list">
					<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fab fa-facebook-f"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/RovadexStudio"><i class="fab fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://www.instagram.com/rovadex"><i class="fab fa-instagram"></i></a></li>
					<li><a target="_blank" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="header-nav">
			<div class="container">
				<div class="header-nav-cover">
					<nav class="nav-menu menu">
						<ul class="nav-list">
							<li class="active-page"><a href="{{route('home')}}">home</a></li>
							<li><a href="#about">about us</a></li>
							<li><a href="#schedule">schedule</a></li>
							<li><a href="#location">location</a></li>
						</ul>
					</nav>
					<a href="{{route('register')}}" class="btn btn-white"><span>registration</span></a>
				</div>
			</div>
		</div>
	</header>
	<!-- =============== HEADER END =============== -->
    @yield('content')
    <!--==================== FOOTER ====================-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-cont col-12 col-sm-6 col-lg-4">
					<a href="index-2.html" class="logo"><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"></a>
					<p>7100 Athens Place Washington, DC 20521</p>
					<ul class="footer-contacts">
						<li class="footer-phone">
							<i aria-hidden="true" class="fas fa-phone"></i>
							<a href="tel:+18001234567">1-800-1234-567</a>
						</li>
						<li class="footer-email">
							<a href="mailto:rovadex@gmail.com">rovadex@gmail.com</a>
						</li>
					</ul>
					<div class="footer-copyright"><a target="_blank" href="https://rovadex.com/">Rovadex</a> © 2019. All Rights Reserved.</div>
				</div>
				<div class="footer-item-link col-12 col-sm-6 col-lg-4">
					<div class="footer-link">
						<h5>Event</h5>
						<ul class="footer-list">
							<li><a href="#about">About</a></li>
							<li><a href="#news">News</a></li>
							<li><a href="#schedule">Key figures</a></li>
							<li><a href="#schedule">Runners' Photos</a></li>
							<li><a href="#schedule">Results</a></li>
							<li><a href="#schedule">Partners</a></li>
						</ul>
					</div>
					<div class="footer-link">
						<h5>Social</h5>
						<ul class="footer-list">
							<li><a target="_blank" href="https://www.facebook.com/rovadex">Facebook</a></li>
							<li><a target="_blank" href="https://twitter.com/RovadexStudio">Twitter</a></li>
							<li><a target="_blank" href="https://www.instagram.com/rovadex">Instagram</a></li>
							<li><a target="_blank" href="https://www.youtube.com/">Youtube</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-subscribe col-12 col-sm-6 col-lg-4">
					<h5>Subscribe to our newsletter. Stay up to date with our latest news and updates.</h5>
					<form class="subscribe-form">
						<input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
						<button class="btn-form" type="submit"><i class="fas fa-paper-plane"></i></button>
					</form>
					<p>By clicking the button you agree to the <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms and Conditions</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!--================== FOOTER END ==================-->

	<!--=================== TO TOP ===================-->
	<a class="to-top" href="#home">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</a>
	<!--================= TO TOP END =================-->

	<!--=================== SCRIPT	===================-->
	<script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('assets/js/slick.min.js') }}"></script>
	<script src="{{ asset('assets/js/rx-lazy.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
	<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
    @yield('javascript')
</body>

<!-- Mirrored from html.rovadex.com/html-giner/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:38:05 GMT -->
</html>