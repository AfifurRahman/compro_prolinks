@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-about-us">
		<div class="bg-opacity-about-us"></div>
		<div class="text-sticky-about-us">
			<span>Home /</span>  <span><a href="">Key values & principles</a></span>
			<h3>Dedicated to Nurturing <br>M&A Driven Business Growth</h3>
		</div>
	</div>
	<section id="body-guiding-companies">
		<div class="body-guiding-companies">
			<div class="row">
				<div class="col-lg-6">
					<div class="header-guiding-companies">
						<hr class="custom-hr-protemus">
						<h3>To Provide Exceptional Value to Our Merger & Acquisition Clients</h3>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="text-guiding-companies">
						<p>We distinguish ourselves by tailoring solutions, fostering collaboration, offering innovative approaches, and applying our hands-on experience. With Protemus Consulting at your side, you gain the confidence to navigate M&A complexities, seize opportunities, and achieve unparalleled success.</p>
					</div>
					<a href="{{ route('contacts') }}" class="btn btn-custom-consult">
						Consult us
					</a>
				</div>
			</div>
		</div>
		<div class="body-banner-key-values-principles">
			<img src="{{ url('frontend/images/new_banner/key_values_principles.png') }}" >
		</div>
		<div class="text-banner-key-values-principles">
			<hr class="custom-hr-protemus">
			<h3>Key Values and Principles</h3>
		</div>
		<div class="widget-key-values-principles">
			<div class="row">
				<div class="col-lg-6">
					<div class="list-widget-key-values-principles bottom-24 widget-blue" style="height: 90%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/widget_key_principles/1.png') }}">
						</div>
						<h3>Integrity and Trust</h3>
						<p>Preserve the highest ethical standards through honesty, transparency, and professionalism, while prioritizing trust and confidentiality in every interaction.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="list-widget-key-values-principles bottom-24 widget-blue" style="height: 90%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/widget_key_principles/2.png') }}">
						</div>
						<h3>Client-Centric Approach</h3>
						<p>Tailoring services by understanding their goals, challenges, and needs to exceed expectations.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="list-widget-key-values-principles bottom-24 widget-blue" style="height: 90%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/widget_key_principles/3.png') }}">
						</div>
						<h3>Expertise and Excellence</h3>
						<p>Deliver unparalleled insights, strategic advice, and innovative solutions while ensuring meticulous attention to detail and rigorous analysis for optimal outcomes.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="list-widget-key-values-principles bottom-24 widget-blue" style="height: 90%;">
						<div class="img-widget-key-values-principles">
							<img src="{{ url('frontend/images/widget_key_principles/4.png') }}">
						</div>
						<h3>Results-Driven Collaboration</h3>
						<p>Dedicated to accomplishing strategic objectives, maximizing returns, and creating sustainable value through working collaboratively with clients and partners.</p>
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