@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-services">
		<div class="bg-opacity-services"></div>
		<div class="text-sticky-services">
			<span>Home /</span>  <span><a href="">Insights</a></span>
			<h3>Protemus Insights: <br>Navigating the M&A Buyside Ecosystem</h3>
		</div>
	</div>
	<section id="insights">
		<div class="header-our-thinking">
			<hr class="custom-hr-protemus">
			<h3>Our thinking</h3>
		</div>
		<div class="body-trending-insights">
			<div class="data-case-studies">
				@include('frontend/_card/widget_case_studies', ['case_study' => $case_study]);
			</div>
		</div>
		<div class="body-insights">
			@if(count($insights) > 0)
				<div class="row">
					@foreach($insights as $key => $values)
						@php
							$route_link = route('detail-insights', $values->slug);
							$route_target = "_self";
							if($values->from == 2){
								$route_link = $values->link;
								$route_target = "_blank";
							}
						@endphp
						<div class="col-lg-4" style="margin-top: 34px;">
							<a href="{{ $route_link }}" target="{{ $route_target }}">
								<div class="widget-insights">
									<img src="{{ url('upload/artikel/'.$values->image) }}">
									@if(\device::is_mobile())
									<h3 data-toggle="tooltip">{!! $values->judul !!}</h3>
									@else
									<h3 data-toggle="tooltip" title="{{ $values->judul }}">{!! Str::limit(strip_tags($values->judul), 70) !!}</h3>
									@endif
									<p>{!! substr(strip_tags($values->deskripsi), 0, 150) !!}..</p>
									<div class="text-bottom-insight">
										<span>{{ date('F d', strtotime($values->created_at))}}, {{ date('Y', strtotime($values->created_at)) }}</span>
									</div>
									
								</div>
							</a>
						</div>
					@endforeach
				</div>
			@endif
			<div align="center" style="margin-top: 60px;">
	        	{!! $insights->withQueryString()->links() !!}
	        </div>
		</div>
	</section>
@stop