@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-services">
		<div class="bg-opacity-services"></div>
		<div class="text-sticky-services">
			<span>Home /</span>  <span><a href="">All Industries</a></span>
			<h3>Through extensive hands-on experience, <br>we proudly possess profound industry <br>knowledge in Indonesia.</h3>
		</div>
	</div>
	<section id="all-industries">
		<div class="data-text-services">
			<div class="row">
				<div class="col-lg-6">
					<div class="data-text-services-left">
						<hr class="custom-hr-protemus">
						<h3>Our industry-specific solution is designed to address challenges you may encounter in any transaction.</h3>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="data-text-services-right">
						<p>
							Protemus Consulting possesses an unparalleled understanding of Indonesian industries, forged through hands-on experience in guiding clients through M&A activities. Our close ties with industry leaders and regulators enrich our insights, making us invaluable partners in navigating the Indonesian business landscape.
						</p>
						<a href="{{ route('contacts') }}" class="btn btn-custom-consult">Consult us</a>
					</div>
				</div>
			</div>
		</div>
		<div class="body-banner-key-values-principles">
			<img src="{{ url('frontend/images/new_banner/all_industries.png') }}" >
		</div>
		<div class="data-explore-industries">
			<hr class="custom-hr-protemus">
			<h3>Explore the industries we serve</h3>
			<p>To provide the most impactful services to our clients, we divide our deep subject matter expertise and innovative solutions into six industries and twenty sectors. Learn more about how we can help you navigate your most pressing business matters with an approach rooted in your specific situation.</p>
		</div>

		<div class="data-widget-services">
			<div class="filter-services">
				<select class="form-control custom-filter-services" onchange="changeIndustries(this)">
					<option value="">All industries</option>
					@if(count($industries) > 0)
						@foreach($industries as $key => $industry)
							<option value="{{ $industry->slug }}">{!! $industry->title !!}</option>
						@endforeach
					@endif
				</select>
			</div>	
			<div class="row list-widget-services">
				@if(count($industries) > 0)
					@foreach($industries as $key => $industry)
						<div class="col-lg-4 widget-services-bottom">
							<div class="widget-services widget-industries gradient-service-green">
								<img src="{{ url('upload/industries/'.$industry->value4) }}">
								<h3>{!! $industry->title !!}</h3>
								<p>{!! $industry->value1 !!}</p>
								<a href="{{ route('industries.detail-industries', $industry->slug) }}">Find out more <i class="fa fa-arrow-right"></i></a>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
		<div class="body-testimonials">
			@include('frontend/_card/testimonials')
		</div>
	</section>
@stop

@push('scripts')
	<script type="text/javascript">
		function changeIndustries(element) {
			document.location.href = "{{URL::to('industries')}}/"+element.value;
		}
	</script>
@endpush