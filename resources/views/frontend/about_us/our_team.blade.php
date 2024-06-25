@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-about-us">
		<div class="bg-opacity-about-us"></div>
		<div class="text-sticky-about-us">
			<span>Home /</span>  <span><a href="">Our team</a></span>
			<h3>The Cornerstones of Protemus Consulting: <br>Meet Our Pioneers</h3>
		</div>
	</div>
	<section id="our-team">
		<div class="header-our-team">
			<hr class="custom-hr-protemus">
			<h3>Our People and Leadership</h3>
			<p>Discover the faces and intellects driving Protemus Consulting's success. Our seasoned experts, with their vast experiences, steer the ship, ensuring the right decisions for your venture.</p>
			<a href="" class="btn btn-custom-consult">
				Consult us
			</a>
		</div>
		<div class="body-our-team">
			<div class="row">
				@if(count($team) > 0)
					@foreach($team as $teams)
						@php
							$object_position = "0% 0%";
							if(strtolower($teams->nama) == "mustiantono"){
								$object_position = "0% 10%";
							}else if(strtolower($teams->nama) == "sentot a priyanto"){
								$object_position = "0% 55%";
							}else if(strtolower($teams->nama) == "michael r wemay"){
								$object_position = "0% 25%";
							}else if(strtolower($teams->nama) == "andang nugroho"){
								$object_position = "0% 20%";
							}
						@endphp
						<div class="col-lg-4">
							<div class="box-our-team">
								<img src="{{ url('upload/team/'.$teams->image) }}" style="object-position: {{ $object_position }}">
								<div class="text-our-team">
									<h3>{{ $teams->nama }}</h3>
									<h4>{{ $teams->jabatan }}</h4>
									<p>{!! substr(strip_tags($teams->description), 0, 150) !!}..</p>
									<a href="{{ route('about-us.detail-our-team', $teams->slug) }}">Read more <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
		<div class="body-testimonials">
			@include('frontend/_card/testimonials', ['testimonials' => $testimonials])
			@include('frontend/_card/key_values')
		</div>
	</section>
@stop

@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {
    	$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:false,
		    autoplay:true,
		    autoplayTimeout:2000,
		    items:1,
		})
    });
</script>
@endpush