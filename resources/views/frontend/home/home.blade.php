@extends('layouts.app_frontend')

@section('content')
<!-- slider-fullscreen -->
<div id="slider" class="inspiro-slider {{ \device::is_mobile() ? 'slider-fullscreen':'' }} dots-creative" data-fade="true" style="{{ \device::is_mobile() ? '':'min-height: 590px;'; }}">
	@if(count($slider) > 0)
		@foreach($slider as $sliders)
			<div class="slide kenburns" data-bg-image="{{ url('upload/slider/'.$sliders->image) }}">
		        <div class="bg-overlay custom-gradient-slider"></div>
		        <div class="container">
		            <div class="{{ \device::is_mobile() ? 'custom-slide-caption-mobile':'custom-slide-caption' }} slide-captions text-center">
		                <!-- Captions -->
		                {!! $sliders->description !!}
		                <!-- <h1>From Due Diligence to Integration with Protemus Consulting.</h1> -->
		                <!-- <p>Addressing challenges, leveraging opportunities, leading M&A to lasting success with Protemus Consulting.</p> -->
		                <!-- <a href="#welcome" style="color: #5BA052 !important;">Double down on growth <i class="fa fa-arrow-right" style="color: #5BA052 !important;"></i></a> -->
		                <!-- end: Captions -->
		            </div>
		        </div>
		    </div>
		@endforeach
	@endif
</div>

<section id="trending-insights">
	<div class="trending-insights">
		<div class="row">
			<div class="col-lg-3">
				@if(\device::is_mobile())
					<h3 align="left">Trending Insights</h3>
				@else
					<h3 align="center">Trending <br>Insights</h3>
				@endif
			</div>
			@if(count($insights) > 0)
				@foreach($insights as $key => $values)
					@if(!\device::is_mobile())
						<h2>{{ $loop->iteration }}</h2>&nbsp;&nbsp;
					@endif
					<div class="col-lg-2 boder-left-trending {{ \device::is_mobile() ? '':'nopadding' }}">
						<div class="box-trending">
							<a href="{{ route('detail-insights', $values->slug) }}">
								{{ $values->judul }}
							</a>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
</section>

<section id="body-empowering">
	<div class="body-empowering">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="background-empoweringx">
					@if(!empty($banner1->image))
						<img src="{{ url('upload/homepage/'.$banner1->image) }}" width="100%">
					@endif
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12">
				<div class="text-empowering">
					<hr>
					{!! !empty($banner1->description) ? $banner1->description : '' !!}
					<a href="{{ route('about-us.overview') }}">Look inside <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="case-studies">
	<div class="text-case-studies">
		<div class="left">
			<hr>
			<h3>Case studies</h3>
		</div>
		<div class="right">
			<a href="{{ route('insights') }}">View all <i class="fa fa-arrow-right"></i></a>
		</div>
	</div><div style="clear: both;"></div>
	<div class="data-case-studies">
		@include('frontend/_card/widget_case_studies', ['case_study' => $case_study]);
	</div>
	@if(\device::is_mobile())
		<div class="data-info-protemus">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<div class="text-info-protemus">
						<hr class="custom-hr-protemus">
						{!! !empty($banner2->description) ? $banner2->description : '' !!}
						<a href="{{ route('about-us.overview') }}">Learn more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					@if(!empty($banner2->image))
						<img src="{{ url('upload/homepage/'.$banner2->image) }}" width="100%">
					@endif
				</div>
			</div>
		</div>
		<div class="data-info-what-see-next">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<div class="text-info-what-see-next">
						<hr class="custom-hr-protemus">
						{!! !empty($banner3->description) ? $banner3->description : '' !!}
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					@if(!empty($banner3->image))
						<img src="{{ url('upload/homepage/'.$banner3->image) }}" width="100%">
					@endif
				</div>
				
			</div>
		</div>
	@else
		<div class="data-info-protemus">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					<div class="text-info-protemus">
						<hr class="custom-hr-protemus">
						{!! !empty($banner2->description) ? $banner2->description : '' !!}
						<a href="{{ route('about-us.overview') }}">Learn more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					@if(!empty($banner2->image))
						<img src="{{ url('upload/homepage/'.$banner2->image) }}" width="100%">
					@endif
				</div>
			</div>
		</div>
		<div class="data-info-what-see-next">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-12">
					@if(!empty($banner3->image))
						<img src="{{ url('upload/homepage/'.$banner3->image) }}" width="100%">
					@endif
				</div>
				<div class="col-lg-6 col-md-12 col-12">
					<div class="text-info-what-see-next">
						<hr class="custom-hr-protemus">
						{!! !empty($banner3->description) ? $banner3->description : '' !!}
					</div>
				</div>
			</div>
		</div>
	@endif
</section>
@stop

@push('scripts')
<script type="text/javascript">
	
</script>
@endpush
