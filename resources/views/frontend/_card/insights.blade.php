<div class="body-publication">
	<hr class="custom-hr-protemus">
	<h3>Insights</h3>
	<div class="data-publication">
		<div class="row">
			@if(count($insights) > 0)
				@foreach($insights as $key => $values)
					@php
						$route_link = route('detail-insights', $values->slug);
						$route_target = "_self";
						if($values->from == 2){
							$route_link = $values->link;
							$route_target = "_blank";
						}
					@endphp
						<div class="col-lg-4">
							<a href="{{ $route_link }}" target="{{ $route_target }}">
								<div class="widget-publication">
									<img src="{{ url('upload/artikel/'.$values->image) }}">
									<h3>{{ $values->judul }}</h3>
									<p>{!! substr(strip_tags($values->deskripsi), 0, 150) !!}</p>
									<span>{{ date('F d', strtotime($values->created_at))}}, {{ date('Y', strtotime($values->created_at)) }}</span>
								</div>
							</a>
						</div>
					@endforeach
			@endif
		</div>
		<div class="button-show-more text-center">
			<a href="{{ route('insights') }}" class="btn btn-outline btn-dark">
				Show more
			</a>
		</div>
	</div>		
</div>