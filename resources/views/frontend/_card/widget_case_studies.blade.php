@if(\device::is_mobile())
	<div class="row">
		@if(count($case_study) > 0)
			@foreach($case_study as $keyx => $valuex)
				<div class="col-lg-12 nopadding">
					<img src="{{ url('upload/artikel/'.$valuex->image) }}" width="100%" height="480" style="object-fit: cover;">
					<div class="custom-gradient-case-studies">
						<div class="data-title-case-studies">
							<span>{{ date('F d', strtotime($valuex->created_at))}}, {{ date('Y', strtotime($valuex->created_at)) }}</span>
							<h3><a href="{{ route('detail-insights', $valuex->slug) }}">{{ $valuex->judul }}</a></h3>
						</div>
					</div>
				</div>
			@endforeach
		@endif
	</div>
@else
	<div class="row">
		@if(count($case_study) > 0)
			@foreach($case_study as $keyx => $valuex)
				@if($keyx == 0)
					<div class="col-lg-6 nopadding">
						<img src="{{ url('upload/artikel/'.$valuex->image) }}" width="100%" height="650" style="object-fit: cover;">
						<div class="custom-gradient-case-studies">
							<div class="data-title-case-studies">
								<span>{{ date('F d', strtotime($valuex->created_at))}}, {{ date('Y', strtotime($valuex->created_at)) }}</span>
								<h3><a href="{{ route('detail-insights', $valuex->slug) }}">{{ $valuex->judul }}</a></h3>
							</div>
						</div>
					</div>
				@endif
			@endforeach
		@endif
				
		<div class="col-lg-6 nopadding">
			@if(count($case_study) > 0)
				@foreach($case_study as $keyx => $valuex)
					@if($keyx == 1)
						<div class="box-case-studies">
							<div class="row">
								<div class="col-lg-6">
									<img src="{{ url('upload/artikel/'.$valuex->image) }}" height="352" width="100%" style="object-fit: cover;">
								</div>
								<div class="col-lg-6">
									<div class="title-case-studies">
										<span>{{ date('F d', strtotime($valuex->created_at))}}, {{ date('Y', strtotime($valuex->created_at)) }}</span>
										<h3><a href="{{ route('detail-insights', $valuex->slug) }}">{{ $valuex->judul }}</a></h3>
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
			@endif

			@if(count($case_study) > 0)
				@foreach($case_study as $keyx => $valuex)
					@if($keyx == 2)
						<div class="box-case-studies gradient-green">
							<div class="text-gradient-green">
								<span>{{ date('F d', strtotime($valuex->created_at))}}, {{ date('Y', strtotime($valuex->created_at)) }}</span>
								<h3><a href="{{ route('detail-insights', $valuex->slug) }}">{{ $valuex->judul }}</a></h3>
							</div>
						</div>
					@endif
				@endforeach
			@endif
		</div>

		@if(count($case_study) > 0)
			@foreach($case_study as $keyx => $valuex)
				@if($keyx == 3)
					<div class="col-lg-6 nopadding">
						<div class="row">
							<div class="col-lg-6">
								<div class="title-case-studies-bottom-left">
									<span>{{ date('F d', strtotime($valuex->created_at))}}, {{ date('Y', strtotime($valuex->created_at)) }}</span>
									<h3><a href="{{ route('detail-insights', $valuex->slug) }}">{{ $valuex->judul }}</a></h3>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="{{ url('upload/artikel/'.$valuex->image) }}" width="100%" height="455" style="object-fit: cover;">
							</div>
						</div>
					</div>
				@endif
			@endforeach
		@endif

		@if(count($case_study) > 0)
			@foreach($case_study as $keyx => $valuex)
				@if($keyx == 4)
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6">
								<div class="title-case-studies-bottom-right">
									<span>{{ date('F d', strtotime($valuex->created_at))}}, {{ date('Y', strtotime($valuex->created_at)) }}</span>
									<h3><a href="{{ route('detail-insights', $valuex->slug) }}">{{ $valuex->judul }}</a></h3>
								</div>
								<div class="read-more-blog">
									<a href="{{ route('detail-insights', $valuex->slug) }}">Read more on our blog <i class="fa fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-lg-6 nopadding">
								<img src="{{ url('upload/artikel/'.$valuex->image) }}" width="100%" height="455" style="object-fit: cover;">
							</div>
						</div>
					</div>
				@endif
			@endforeach
		@endif
	</div>
@endif