<div class="data-testiominial">
	<div class="owl-carousel owl-theme">
		@if(count($testimonials) > 0)
			@foreach($testimonials as $values)
			    <div class="item value-testimonial">
			    	<div class="row">
			    		<div class="col-lg-8">
			    			<div class="value-txt-testimonial">
				    			<h3>
				    				{!! $values->deskripsi !!}
				    			</h3><br>
				    			<p>{{ $values->nama }}</p>
				    			<span>{{ $values->jabatan }}</span>
				    		</div>
			    		</div>
			    		<div class="col-lg-4">
			    			<img src="{{ url('upload/testimonial/'.$values->image) }}" width="100%">
			    		</div>
			    	</div>
			    </div>
			@endforeach
		@endif
	</div>
</div>

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