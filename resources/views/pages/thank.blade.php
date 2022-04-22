<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.rovadex.com/html-giner/conference-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:38:20 GMT -->
<head>
	<meta charset="UTF-8">
	<title>JJ ACTIVE</title>
	<!-- =================== META =================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}"> -->
	<!-- =================== STYLE =================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .invalid-feedback{
            color:red;
            margin:15px 0;
        }
        input[type="text"], input[type="tel"], input[type="email"], input[type="password"], input[type="search"], textarea {
            margin: 5px 0 0 0;
        }
    </style>
</head>

<body id="conference-page" style="background-image: url({{ asset('assets/img/conference_bg.svg') }});">
	<!-- =============== PRELOADER =============== -->
	{{-- <div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner cssload-one"></div>
			<div class="cssload-inner cssload-two"></div>
			<div class="cssload-inner cssload-three"></div>
		</div>
	</div> --}}
	<!-- ============== PRELOADER END ============== -->


<!-- ============= MAP-WITH-ROUTE END ============= -->
<section id="register" class="s-marathon-register">
		<img src="{{ asset('assets/img/tringle-gray-little.svg') }}" alt="img" class="register-img-effect-2">
		<div class="container">
			<div class="marathon-register-row">
				<!-- <img src="{{ asset('assets/img/register-img.png') }}" data-src="{{ asset('assets/img/register-img.png') }}" alt="img" class="register-img rx-lazy"> -->
					<!-- <div class="marathon-details"></div> -->
					<div class="col-lg-5 conference-map-info">
						<div style="background: #f5f7f9;">
                            <h2 class="title pt-1 mt-1 pb-1 mb-3 text-left" style="background: #f5f7f9;"><span>Venue :</span></h2>
							<div id="map" class="cont-map google-map mb-5">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.0425872531464!2d77.66035901482061!3d12.840524590942007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6c85d5ff1f61%3A0xb2459a99a5ff0c3f!2sBDA%20complex%2C%202nd%20Cross%20Road%2C%20Electronics%20City%20Phase%201%2C%20Electronic%20City%2C%20Bengaluru%2C%20Karnataka%20560100!5e0!3m2!1sen!2sin!4v1649943571914!5m2!1sen!2sin" height="450" style="border:0;width:100%;box-shadow:3px 3px 8px 0px #818181;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>
							<ul class="mission-meta">
								<li><i aria-hidden="true" class="fas fa-calendar-alt"></i>23.04.2022</li>
								<li><i class="far fa-clock"></i>6:00 AM</li>
							</ul>
							<h3>BDA Complex, <span>2nd Cross</span> Electronic City, Phase 1</h3>
							<ul class="mission-meta">
								<li><i aria-hidden="true" class="fas fa-phone-alt"></i><a href="tel:9844093666">9844093666</a></li>
								<li><i aria-hidden="true" class="fas fa-envelope"></i><a href="mailto:admin@jjactive.in">admin@jjactive.in</a></li>
							</ul>
						</div>
					</div>
                    <div class="col-lg-5 congratulation-info">
                        <img src="{{ asset('assets/img/our-mission-2.svg') }}" alt="img" class="register-img-effect-1">
                        @if (session('Registered'))
                        <div class="alert alert-success" data-aos="fade-up" role="alert">
                            <h4 class="alert-heading mb-2">Oops!</h4>
                            <p class="my-3">You have already registered {{$user->name}}.</p>
                            <hr>
                            <p class="mt-3 mb-0">Your Registered E-BIB Number is <strong>{{$user->bib}}</strong></p>
                        </div>
                        @else
                        <div class="alert alert-success" data-aos="fade-up" role="alert">
                            <h4 class="alert-heading mb-2">Congratulations {{$user->name}}!</h4>
                            <p class="my-3">You have registered successfully. We have shared you the registration details via email.</p>
                            <hr>
                            <p class="mt-3 mb-0">Your Registered E-BIB Number is <strong>{{$user->bib}}</strong></p>
                        </div>
                        @endif
                    </div>
			</div>
		</div>
	</section>
	<!-- ============= MAP-WITH-ROUTE END ============= -->


	<!--==================== FOOTER ====================-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-cont col-12 col-sm-6 col-lg-4">
					<!-- <a href="index-2.html" class="logo"><img src="{{ asset('assets/img/logo.svg') }}" alt="logo"></a> -->
					
					<ul class="footer-contacts">
						<li class="footer-phone">
						<i class="fas fa-phone-alt"></i>
							<a href="tel:9844093666">9844093666</a>
						</li>
						<li class="footer-email">
							<i class="fas fa-envelope"></i>
							<a href="mailto:admin@jjactive.in">admin@jjactive.in</a>
						</li>
					</ul>
					
					<div class="footer-copyright"><a target="_blank" href="{{route('home')}}">JJ Active</a> © 2022. All Rights Reserved.</div>
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
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
	<script src="{{ asset('assets/js/tata.js') }}"></script>
	<script src="{{ asset('assets/js/just-validate.production.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true,
        });
        @if (session('success'))

            tata.success('Success', '{{ session('success') }}', {
                duration: 10000,
                animate: 'slide',
            })

        @endif

        
    </script>
</body>

<!-- Mirrored from html.rovadex.com/html-giner/conference-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:38:22 GMT -->
</html>
