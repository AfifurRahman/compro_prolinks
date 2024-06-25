@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-detail-team">
		<div class="row">
			<div class="col-lg-7">
				<div class="text-detail-team">
					<h4>
						“{!! $team->quotes !!}”
					</h4><br>
					<p>{{ $team->nama }}</p>
					<span>{{ $team->jabatan }}</span>
				</div>
			</div>
			<div class="col-lg-5 nopadding">
				@php
					$object_position = "0% 0%";
					if(strtolower($team->nama) == "mustiantono"){
						$object_position = "0% 10%";
					}else if(strtolower($team->nama) == "sentot a priyanto"){
						$object_position = "0% 65%";
					}else if(strtolower($team->nama) == "michael r wemay"){
						$object_position = "0% 35%";
					}else if(strtolower($team->nama) == "andang nugroho"){
						$object_position = "0% 25%";
					}
				@endphp
				<img src="{{ url('upload/team/'.$team->image) }}" style="object-position: {{ $object_position }}">
			</div>
		</div>
	</div>

	<div class="body-detail-team">
		<div class="row">
			<div class="col-lg-7">
				<div class="data-detail-team">
					<h3>{{ $team->nama }}</h3>
					<h4>{{ $team->jabatan }}</h4>
					<div class="sosmed-team">
						<a href="{{ !empty($team->link_linkedin) ? $team->link_linkedin : '' }}" target="_blank" title="Linkedin"t><i class="fab fa-linkedin fa-2x"></i></a>&nbsp;&nbsp;
						<a href="{{ !empty($team->link_ig) ? $team->link_ig : '' }}" target="_blank" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
					</div>
					{!! !empty($team->description) ? $team->description : '' !!}
				</div>
			</div>
			<div class="col-lg-5">
				<div class="data-detail-spec">
					{!! !empty($team->education) ? $team->education : '' !!}
				</div>
			</div>
		</div>
	</div>
	@if(count($insights) > 0)
		@include('frontend/_card/insights', ['insights' => $insights])
	@endif
	<div class="body-next-team">
		<div class="row">
			<div class="col-lg-5 nopadding">
				<div class="data-next-team-left">
					<h3>Our people & leadership</h3>
					<p>We are defined by our people and are deeply committed to creating a diverse and inclusive culture.</p>
					<a href="{{ route('about-us.our-team') }}">Meet our team <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<div class="col-lg-7 nopadding">
				<div class="data-next-team-right">
					<h3>{{ !empty($next_team->nama) ? $next_team->nama : '' }}</h3>
					<a href="{{ route('about-us.detail-our-team', !empty($next_team->slug) ? $next_team->slug : '') }}">Know more detail <i class="fa fa-arrow-right"></i></a>
					<p>{{ !empty($next_team->quotes) ? "“".$next_team->quotes."”" : '' }}</p>
				</div>
			</div>
		</div>
	</div>
@stop