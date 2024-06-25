@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-about-us">
		<div class="bg-opacity-about-us"></div>
		<div class="text-sticky-about-us">
			<span>Home /</span>  <span><a href="">About</a></span>
			<h3>Unveiling Protemus Consulting: <br>Masterminds of M&A Buyside Services</h3>
		</div>
	</div>
	<section id="about-us-overview">
		<div class="body-about-us">
			<div class="row">
				<div class="col-lg-6">
					@if(!empty($about_us->image))
						<img src="{{ url('upload/about-us/'.$about_us->image) }}" width="100%" style="position: sticky; top: 80px; position: -webkit-sticky;">
					@endif
				</div>
				<div class="col-lg-6">
					<div class="text-about-us">
						{!! !empty($about_us->description) ? $about_us->description : '-' !!}
					</div>
				</div>
			</div>
		</div>
		<div class="body-our-vision">
			<div class="row">
				<div class="col-lg-6">
					<div class="text-our-vision">
						{!! !empty($vision->description) ? $vision->description : '' !!}
						<hr class="custom-hr-protemus">
						<h4>Our vision</h4>
					</div>
				</div>
				<div class="col-lg-6">
					<img src="{{ url('upload/vision/'.$vision->image) }}" width="100%">
				</div>
			</div>
		</div>

		@if(\device::is_mobile())
			<div class="body-our-mission">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-our-mission">
							{!! !empty($mission->description) ? $mission->description : '' !!}
							<hr class="custom-hr-protemus">
							<h4>Our mission</h4>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="{{ url('upload/mission/'.$mission->image) }}" width="100%">
					</div>
				</div>
			</div>
		@else
			<div class="body-our-mission">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{ url('upload/mission/'.$mission->image) }}" width="100%">
					</div>
					<div class="col-lg-6">
						<div class="text-our-mission">
							{!! !empty($mission->description) ? $mission->description : '' !!}
							<hr class="custom-hr-protemus">
							<h4>Our mission</h4>
						</div>
					</div>
				</div>
			</div>
		@endif
		<div class="body-testimonials">
			@include('frontend/_card/testimonials', ['testimonials' => $testimonials])
			@include('frontend/_card/key_values')
		</div>
	</section>
@stop