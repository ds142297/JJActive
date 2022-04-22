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
		th,td{
			padding: 10px 5px;
			text-align: center;
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
					<div class="marathon-register" style="max-width: 100%;width:100%">
						<img src="{{ asset('assets/img/our-mission-2.svg') }}" alt="img" class="register-img-effect-1">
						<h2 class="title"><span>Download Your E-certificate !!</span></h2>
						<form action="{{route('result')}}" method="post" id="registerForm" style="display: flex;flex-wrap:wrap;justify-content:space-between;align-items:flex-start;">
							@csrf
                            <ul class="form-cover" style="flex:1;padding-right:10px">
								<li class="inp-cover inp-name" style="margin-bottom: 0">
                                    <input style="height: 45px;margin-top:0;" id="name" type="text" name="name" placeholder="Enter your registered email or E-BIB number" >
									@error('name') 
										<div class="invalid-message">{{ $message }}</div>
									@enderror
                                </li>
							</ul>
							<div class="btn-form-cover">
								<button id="#submit" type="submit" class="btn"><span>Generate</span></button>
							</div>
						</form>
						@if (session('success_data'))
						<div style="padding-top: 20px;background: #fff;" id="result_div">
							<table class="table" style="width: 100%">
								<thead class="thead-dark" style="background: #222;color: #fff;">
								  <tr>
									  <th scope="col">Name</th>
									  <th scope="col">E-BIB</th>
									  <th scope="col">Action</th>
								  </tr>
								</thead>
								<tbody>
								  <tr style="border-bottom: 1px solid #eee;" id="resultrow">
									<th scope="row" id="nameval">{{session('success_data')->name}}</th>
									<td id="bibval">{{session('success_data')->bib}}</td>
									<td>
										<a href="{{route('download', session('success_data')->id)}}" download class="btn"><span>Download</span></a>
										<a href="{{route('certificate', session('success_data')->id)}}" class="btn"><span>Receive Via Mail</span></a>
									</td>
								  </tr>
								</tbody>
							  </table>
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
    <script>

        @if (session('success'))

            tata.success('Success', '{{ session('success') }}', {
                duration: 10000,
                animate: 'slide',
            })

        @endif
        @if (session('error'))

            tata.error('Error', '{{ session('error') }}', {
                duration: 10000,
                animate: 'slide',
            })

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
			errorMessage: 'Field is required',
			},
		])
		.onSuccess(async(event) => {
			event.target.submit();
			// document.getElementById('result_div').style.display = 'block'
			// async function postData(url = '', data) {
			// 	// Default options are marked with *
			// 	const response = await fetch(url, {
			// 	method: 'POST', // *GET, POST, PUT, DELETE, etc.
			// 	mode: 'cors', // no-cors, *cors, same-origin
			// 	cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
			// 	credentials: 'same-origin', // include, *same-origin, omit
			// 	// headers: {
			// 	//   'Content-Type': 'application/json'
			// 	// //   'Content-Type': 'application/x-www-form-urlencoded',
			// 	// },
			// 	redirect: 'follow', // manual, *follow, error
			// 	referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
			// 	body: data // body data type must match "Content-Type" header
			// 	});
			// 	return response.json(); // parses JSON response into native JavaScript objects
			// }
			// let formData = new FormData()
            // formData.append('name',document.getElementById("name").value)
            // formData.append('_token',document.getElementsByName('_token')[0].value)
			// await postData("{{route('generate-result')}}", formData)
            //   .then(async (data) => {
            //       console.log(data.data.name); // JSON data parsed by `data.json()` call
			// 	  if(data.data){
			// 		document.getElementById('resultrow').style.display = 'block'
			// 		document.getElementById('nameVal').innerHTML = data.data.name
			// 		// document.getElementById('emailVal').innerText = d.data.email
			// 		// document.getElementById('bibVal').innerText = d.data.bib
			// 	  }


            //   })
		});
    </script>
</body>
{{-- completed --}}
<!-- Mirrored from html.rovadex.com/html-giner/conference-team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Apr 2022 13:38:22 GMT -->
</html>
