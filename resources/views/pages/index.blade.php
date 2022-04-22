@extends('layouts.master')



@section('content')
    
    <!-- ============= MARATHON-SLIDER ============= -->
	<section class="s-marathon-slider">
		<div class="marathon-slider">
			<div class="marathon-slide marathon-slide-1">
				<div data-hover-only="true" data-pointer-events="true" data-scalar-y="0" class="scene">
					<div class="scene-item" data-depth="0.2">
						<span class="marathon-effect" style="background-image: url({{ asset('assets/img/effect-slider-marathon.svg') }});"></span>
					</div>
					<div class="scene-item" data-depth="0.2">
						<img class="marathon-img" src="{{ asset('assets/img/slider-1.png') }}" alt="img">
					</div>
					<div class="scene-item" data-depth="0.5">
						<div class="slider-location">San Francisco <br>marathon <span class="date">27 dec 2019</span></div>
					</div>
					<div class="scene-item" data-depth="0.35">
						<div class="marathon-text-left">find<br>your</div>
					</div>
					<div class="scene-item" data-depth="0.35">
						<div class="marathon-text-right">Fast</div>
					</div>
				</div>
			</div>
			<div class="marathon-slide marathon-slide-2">
				<div data-hover-only="true" data-pointer-events="true" data-scalar-y="0" class="scene">
					<div class="scene-item" data-depth="0.2">
						<span class="marathon-effect" style="background-image: url({{ asset('assets/img/effect-slider-marathon.svg') }});"></span>
					</div>
					<div class="scene-item" data-depth="0.2">
						<img class="marathon-img" src="{{ asset('assets/img/slider-2.png') }}" alt="img">
					</div>
					<div class="scene-item" data-depth="0.5">
						<div class="slider-location">San Francisco <br>marathon <span class="date">27 dec 2019</span></div>
					</div>
					<div class="scene-item" data-depth="0.35">
						<div class="marathon-text-left">live<br>your</div>
					</div>
					<div class="scene-item" data-depth="0.35">
						<div class="marathon-text-right">Life</div>
					</div>
				</div>
			</div>
			<div class="marathon-slide marathon-slide-3">
				<div data-hover-only="true" data-pointer-events="true" data-scalar-y="0" class="scene">
					<div class="scene-item" data-depth="0.2">
						<span class="marathon-effect" style="background-image: url({{ asset('assets/img/effect-slider-marathon.svg') }});"></span>
					</div>
					<div class="scene-item" data-depth="0.2">
						<img class="marathon-img" src="{{ asset('assets/img/slider-3.png') }}" alt="img">
					</div>
					<div class="scene-item" data-depth="0.5">
						<div class="slider-location">San Francisco <br>marathon <span class="date">27 dec 2019</span></div>
					</div>
					<div class="scene-item" data-depth="0.35">
						<div class="marathon-text-left">Feel<br>your</div>
					</div>
					<div class="scene-item" data-depth="0.35">
						<div class="marathon-text-right">burn!</div>
					</div>
				</div>
			</div>
		</div>
		<img class="marathon-slider-shape" src="{{ asset('assets/img/slider-home1-shape.svg') }}" alt="shape">
		<div id="clockdiv" class="clock-timer clock-timer-marathon">
			<div class="days-item">
				<img src="{{ asset('assets/img/counter-1.svg') }}" alt="img">
				<span class="days"></span>
				<div class="smalltext">Days</div>
			</div>
			<div class="hours-item">
				<img src="{{ asset('assets/img/counter-2.svg') }}" alt="img">
				<span class="hours"></span>
				<div class="smalltext">Hours</div>
			</div>
			<div class="minutes-item">
				<img src="{{ asset('assets/img/counter-3.svg') }}" alt="img">
				<span class="minutes"></span>
				<div class="smalltext">Minutes</div>
			</div>
			<div class="seconds-item">
				<img src="{{ asset('assets/img/counter-4.svg') }}" alt="img">
				<span class="seconds"></span>
				<div class="smalltext">Seconds</div>
			</div>
		</div>
	</section>
	<!-- =========== MARATHON-SLIDER END =========== -->

	<!-- ============== S-OUR-MISSION ============== -->
	<section id="about" class="s-our-mission">
		<div class="container">
			<img class="mission-effect" src="{{ asset('assets/img/our-mission-5.svg') }}" alt="img">
			<h2 class="title">Our mission</h2>
			<div class="row">
				<div class="col-lg-6 our-mission-img">
					<span>
						<img class="mission-img-effect-1" src="{{ asset('assets/img/our-mission-2.svg') }}" alt="img">
						<img class="mission-img rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/our-mission.jpeg') }}" alt="img">
						<img class="mission-img-effect-4" src="{{ asset('assets/img/tringle-gray-little.svg') }}" alt="img">
					</span>
				</div>
				<div class="col-lg-6 our-mission-info">
					<ul class="mission-meta">
						<li><i aria-hidden="true" class="fas fa-map-marker-alt"></i>London</li>
						<li><i aria-hidden="true" class="fas fa-calendar-alt"></i>31.10.2019</li>
					</ul>
					<h4>Od tempor incididunt ut labore aliqua. ullamco laboris nisi ut aliquip</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
					<div class="mission-number-cover">
						<div class="mission-number-item">
							<div class="number">2000+</div>
							<span>Participant</span>
						</div>
						<div class="mission-number-item">
							<div class="number">42.4km</div>
							<span>run distance</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-OUR-MISSION END ============ -->

	<!-- ================ S-CHOOSE-US ================ -->
	<section class="s-choose-us" style="background-image: url({{ asset('assets/img/bg-1.svg') }});">
		<div class="container">
			<h2 class="title"><span>Reasons to run with us!</span></h2>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/icon-1.svg') }}" alt="img">
					<h4>Quick registration</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/icon-2.svg') }}" alt="img">
					<h4>Delivery to the venue</h4>
					<p>Voluptatibus molestiae aperiam ducimus, architecto</p>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/icon-3.svg') }}" alt="img">
					<h4>Water for participants</h4>
					<p>cumque odio dolorum expedita ea illo sit laboriosam</p>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 choose-us-item">
					<img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/icon-4.svg') }}" alt="img">
					<h4>Medical staff</h4>
					<p>Consectetur adipiscing elit, sed eiusmod tempor</p>
				</div>
			</div>
		</div>
	</section>
	<!-- ============== S-CHOOSE-US END ============== -->

	<!-- ============== S-EVENT-SCHEDULE ============== -->
	<section id="schedule" class="s-event-schedule">
		<div class="container">
			<h2 class="title"><span>Event schedule</span></h2>
			<img class="schedule-effect-white"src="{{ asset('assets/img/tringle-white.svg') }}" alt="img">
			<img class="schedule-effect-yellow"src="{{ asset('assets/img/tringle-yellow-little.svg') }}" alt="img">
			<div class="row">
				<div class="col-xl-6">
					<div class="event-schedule-tabs">
						<div class="event-schedule-item">
							<div class="schedule-item-img">
								<img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/event-icon-1.svg') }}" alt="img">
							</div>
							<div class="schedule-item-info">
								<div class="date">9:00 - 11:00</div>
								<h4>Excepteur sint occaecat cupidatat</h4>
								<div class="schedule-info-content" style="display: block;">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium volup</p>
								</div>
							</div>
						</div>
						<div class="event-schedule-item">
							<div class="schedule-item-img"><img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/event-icon-2.svg') }}" alt="img"></div>
							<div class="schedule-item-info">
								<div class="date">11:00 - 13:00</div>
								<h4>Sed ut perspiciatis unde omnis</h4>
								<div class="schedule-info-content">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium volup</p>
								</div>
							</div>
						</div>
						<div class="event-schedule-item">
							<div class="schedule-item-img"><img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/event-icon-3.svg') }}" alt="img"></div>
							<div class="schedule-item-info">
								<div class="date">13:00 - 14:00</div>
								<h4>Ut enim ad minima veniam, quis</h4>
								<div class="schedule-info-content">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium volup</p>
								</div>
							</div>
						</div>
						<div class="event-schedule-item">
							<div class="schedule-item-img"><img class="rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/event-icon-4.svg') }}" alt="img"></div>
							<div class="schedule-item-info">
								<div class="date">14:00 - 15:00</div>
								<h4>Quis autem vel eum iure reprehend</h4>
								<div class="schedule-info-content">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium volup</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 event-schedule-img">
					<div class="schedule-img-wrap">
						<img class="schedule-effect-tringle" src="{{ asset('assets/img/tringle-gray-little.svg') }}" alt="img">
						<img class="schedule-img-effect" src="{{ asset('assets/img/our-mission-2.svg') }}" alt="img">
						<img class="schedule-img rx-lazy" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/event-schedule.jpeg') }}" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============ S-EVENT-SCHEDULE END ============ -->

	<!-- =============== MAP-WITH-ROUTE =============== -->
	<section id="location" class="map-with-route">
		<div class="container">
			<h2 class="title"><span>Map with route</span></h2>
			<div class="row">
				<div class="col-lg-6 map-route-img">
					<span>
						<img src="{{ asset('assets/img/our-mission-2.svg') }}" alt="img" class="map-img-effect-1">
						<img src="{{ asset('assets/img/tringle-gray-little.svg') }}" alt="img" class="map-img-effect-2">
						<img class="rx-lazy map-img" src="{{ asset('assets/img/placeholder-all.png') }}" data-src="{{ asset('assets/img/map.png') }}" alt="img">
					</span>
				</div>
				<div class="col-lg-6 map-route-info">
					<div class="map-route-cover">
						<h4>There are many variations of passages of Lorem Ipsum available</h4>
						<div class="route-info-content">
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas. At vero eos et accusamus et iusto.</p>
						</div>
						<div class="mission-number-cover">
							<div class="mission-number-item">
								<img src="{{ asset('assets/img/map-effect.svg') }}" alt="img" class="map-img-effect">
								<div class="number">42,4km</div>
								<span>Run distance</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ============= MAP-WITH-ROUTE END ============= -->

	
	<!--=================== S-CLIENTS ===================-->
	<section class="s-clients">
		<div class="container">
			<h2 class="title"><span>Sponsors</span></h2>
			<div class="clients-cover">
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('assets/img/client-1.svg') }}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('assets/img/client-2.svg') }}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('assets/img/client-4.svg') }}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('assets/img/client-5.svg') }}" alt="img">
					</div>
				</div>
				<div class="client-slide">
					<div class="client-slide-cover">
						<img src="{{ asset('assets/img/client-6.svg') }}" alt="img">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= S-CLIENTS END =================-->

    @stop