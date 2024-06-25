@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-about-us">
		<div class="bg-opacity-about-us"></div>
		<div class="text-sticky-about-us">
			<span>Home /</span>  <span><a href="">Why choose us</a></span>
			<h3>Where Success Meets Strategy</h3>
		</div>
	</div>
	<section id="why-choose-us">
		<div class="header-why-choose-us">
			<hr class="custom-hr-protemus">
			<h3>Why Choose Us?</h3>
		</div>
		<div class="widget-key-values-principles">
			<div class="row">
				<div class="col-lg-6 nopadding">
					<div class="list-widget-key-values-principles widget-green" style="height: 100%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/why_choose_us/set-up.png') }}">
						</div>
						<h3>Personalized Approach</h3>
						<p>We take the time to understand your unique needs, challenges, and aspirations. Our tailored solutions are designed to address your specific requirements and drive tangible results.</p>
					</div>
				</div>
				<div class="col-lg-6 nopadding">
					<div class="list-widget-key-values-principles widget-green" style="height: 100%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/why_choose_us/education.png') }}">
						</div>
						<h3>Expertise and Experience</h3>
						<p>Our professionals bring a wealth of experience from renowned big 4 accounting and consulting firms. This deep industry knowledge allows us to provide you with top-tier services typically associated with larger firms but at more competitive fees.</p>
					</div>
				</div>
				<div class="col-lg-6 nopadding">
					<div class="list-widget-key-values-principles widget-green" style="height: 100%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/why_choose_us/network-connection.png') }}">
						</div>
						<h3>Commitment to Execution</h3>
						<p>From initial planning to final implementation, we are with you every step of the way. Our unwavering commitment to execution ensures that your M&A transactions are completed seamlessly and efficiently.</p>
					</div>
				</div>
				<div class="col-lg-6 nopadding">
					<div class="list-widget-key-values-principles widget-green" style="height: 100%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/why_choose_us/quality.png') }}">
						</div>
						<h3>Quality Assurance and Reliability</h3>
						<p>We maintain the highest standards of professionalism, ethics, and quality assurance. You can rely on us to deliver accurate, timely, and reliable insights that guide your decision-making process.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="body-testimonials">
			@include('frontend/_card/testimonials', ['testimonials' => $testimonials])
			@include('frontend/_card/key_values')
		</div>
	</section>
@stop