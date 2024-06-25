@extends('layouts.app_frontend')

@section('content')
	<div class="container">
		<div class="search-result" style="margin-top: 50px;">
			<p style="font-style: italic;">Hasil penelusuran untuk : <b><?= isset($_GET['q']) ? $_GET['q'] : ""; ?></b></p>
				@if(count($result) > 0)
					@foreach ($result as $key => $value)
						<div style="margin-bottom: 50px;">
					        <h3 style="color: #213F7F;">{{ $value->category_content }}</h3>
					        <hr style="border: dashed 1px #CCC;">
					        <a href="">
						        <h4>{{ $value->title; }}</h4>
						        <p>
						        	@php
						        		$txt_length = strlen($value->description);
						        		if ($txt_length > 400) {
						        			echo substr(strip_tags($value->description), 0,400)."..";
						        		}else{
						        			echo strip_tags($value->description);
						        		}
						        	@endphp		
						        </p>
						    </a>
						</div>
					@endforeach
				@else
					<div class="alert alert-success">
			        	<h3>Not found</h3>
			        </div>
				@endif
		</div>
	</div>
@stop