@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-services">
		<div class="bg-opacity-services"></div>
		<div class="text-sticky-services">
			<span>Home / Industries /</span>  <span><a href="">{{ $industries->title }}</a></span>
			<h3>{!! $industries->value1 !!}</h3>
		</div>
	</div>
	<section id="detail-industries">
		@if(!empty($industries->value5))
			<embed src="{{ url('upload/industries/'.$industries->value5) }}#toolbar=0&navpanes=0&scrollbar=0" width="100%" height="800" />
		@else
			<div class="alert alert-success">
				<h3 align="center">Document not found</h3>
			</div>
		@endif
	</section>
@stop

@push('scripts')
<script type="text/javascript">
	$("#iframe").load(function(){
		$("#iframe").contents().find("#toolbarViewerRight").hide();
	});
</script>
@endpush