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
	<div class="page-preloader-cover">
		<div class="cssload-loader">
			<div class="cssload-inner cssload-one"></div>
			<div class="cssload-inner cssload-two"></div>
			<div class="cssload-inner cssload-three"></div>
		</div>
	</div>
	<!-- ============== PRELOADER END ============== -->

<!--=================== PAGE-TITLE ===================-->
<div class="page-title page-title-conference" style="background-image: url({{ asset('assets/img/bnr.jpg') }});">
		<div class="container">
			<div class="breadcrumbs"></div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->


<!-- ============= MAP-WITH-ROUTE END ============= -->
<section id="register" class="s-marathon-register">
		<img src="{{ asset('assets/img/tringle-gray-little.svg') }}" alt="img" class="register-img-effect-2">
		<div class="container">
			<div class="marathon-register-row">
					<div class="col-lg-5 conference-map-info">
						<div style="background: #f5f7f9;width:100%;text-align:left">
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
					<div class="marathon-register">
						<img src="{{ asset('assets/img/our-mission-2.svg') }}" alt="img" class="register-img-effect-1">
						<h2 class="title"><span>Register Here !!</span></h2>
						<form action="{{route('home')}}" method="post" id="registerForm">
							@csrf
                            <ul class="form-cover">
								<li class="inp-cover inp-name">
                                    <label for="name" class="mb-30"><strong>Name <span style="color:red;">*</span></strong></label>
                                    <input id="name" type="text" name="name" value="{{old('name')}}" >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </li>
								<li class="inp-cover inp-email">
                                <label for="email" class="mb-30"><strong>Email <span style="color:red;">*</span></strong></label>
                                    <input id="email" type="email" name="email" value="{{old('email')}}" >
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </li>
								<li class="inp-cover inp-email">
                                <label for="phone" class="mb-30"><strong>Phone <span style="color:red;">*</span></strong></label>
                                    <input id="phone" type="text" name="phone" value="{{empty(old('phone')) ? '+91' : old('phone')}}" >
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </li>
								<li class="inp-cover inp-email">
                                <label for="cname" class="mb-30"><strong>Emergency Contact Name <span style="color:red;">*</span></strong></label>
                                    <input id="cname" type="text" name="cname" value="{{old('cname')}}" >
                                    @error('cname')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
								</li>
								<li class="inp-cover inp-email">
                                <label for="cnumber" class="mb-30"><strong>Emergency Contact Number <span style="color:red;">*</span></strong></label>
                                    <input id="cnumber" type="text" name="cnumber" value="{{empty(old('cnumber')) ? '+91' : old('cnumber')}}" >
                                    @error('cnumber')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
								</li>
								
								<li class="inp-text">
                                <label for="address" class="mb-30"><strong>Address <span style="color:red;">*</span></strong></label>
                                    <textarea id="address" name="address" >{{old('address')}}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </li>
							</ul>
							<div class="checkbox-wrap">
								<div class="checkbox-cover">
									<input type="checkbox" id="check" name="check">
									<p>I declare that I am not suffering from any health condition, and I am physically and psychologically well prepared to participate in this practice run, and I have general good health, without suffering from disease, cardiorespiratory, physical defect, or injury, which would discourage my participation.
I participate voluntarily and under my own responsibility. Consequently, I exonerate from any liability to the organizers, collaborators, sponsors, and any other participants for any physical or material damage that occurs in me.</p>
								</div>
                                @error('check')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
							</div>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn"><span>Register</span></button>
							</div>
						</form>
						<div id="message"></div>
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
    <script>

        @if (session('success'))

            tata.success('Success', '{{ session('success') }}', {
                duration: 10000,
                animate: 'slide',
            })

        @endif

        @if ($errors->any())
		tata.error('Error', 'Please fill the required fields!', {
                duration: 10000,
                animate: 'slide',
        })
        const element = document.getElementById("register");
        element.scrollIntoView();
        @endif

		// initialize the validation library
		const validation = new JustValidate('#registerForm', {
			errorFieldCssClass: 'is-invalid',
		});
		// apply rules to form fields
		validation
		.addField('#name', [
			{
			rule: 'required',
			errorMessage: 'Name is required',
			},
			{
				rule: 'customRegexp',
				value: /^[a-zA-Z\s]*$/,
				errorMessage: 'Name is invalid',
			},
		])
		.addField('#email', [
			{
			rule: 'required',
			errorMessage: 'Field is required',
			},
			{
			rule: 'email',
			errorMessage: 'Email is invalid!',
			},
		])
		.addField('#phone', [
			{
			rule: 'required',
			errorMessage: 'Phone number is required',
			},
			{
				rule: 'customRegexp',
				value: /^(\+91)[6-9]\d{9}$/,
				errorMessage: 'Phone number is invalid',
			},
		])
		.addField('#cname', [
			{
			rule: 'required',
			errorMessage: 'Emergency contact name is required',
			},
			{
				rule: 'customRegexp',
				value: /^[a-zA-Z\s]*$/,
				errorMessage: 'Emergency contact name is invalid',
			},
		])
		.addField('#cnumber', [
			{
			rule: 'required',
			errorMessage: 'Emergency contact number is required',
			},
			{
				rule: 'customRegexp',
				value: /^(\+91)[6-9]\d{9}$/,
				errorMessage: 'Emergency contact number is invalid',
			},
			{
				validator: (value, fields) => {
				if (fields['#phone'] && fields['#phone'].elem) {
					const repeatPasswordValue = fields['#phone'].elem.value;

					return value !== repeatPasswordValue;
				}

				return true;
				},
				errorMessage: 'Both contact details cannot be the same',
			},
		])
		.addField('#address', [
			{
			rule: 'required',
			errorMessage: 'Address is required',
			},
			{
				rule: 'customRegexp',
				value: /^[a-z 0-9~%.:_\@\-\/\(\)\\\#\;\[\]\{\}\$\!\&\<\>\'\r\n+=,]+$/i,
				errorMessage: 'Address is invalid',
			},
		])
		.addField('#check', [
			{
			rule: 'required',
			errorMessage: 'Please accept the terms and condition.',
			},
		])
		.onSuccess((event) => {
			event.target.submit();
		});
    </script>
</body>
{{-- completed --}}
<!-- Mirrored from html.rovadex.com/html-giner/conference-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:38:22 GMT -->
</html>
