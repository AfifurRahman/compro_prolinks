@extends('layouts.app_frontend')

@section('content')
<style type="text/css">
	.box-icon {
		padding: 15px;
		border-radius: 10px;
		height: 80px;
	}

	.purple {
		background-color: rgba(144, 0, 211, 0.12);
	}

	.blue{
		background-color: rgba(110, 202, 201, 0.2);
	}

	.green {
		background-color: rgba(77, 180, 105, 0.12);
	}

	.yellow {
		background-color: rgba(221, 212, 0, 0.12);
	}

	.orange{
		background-color: rgba(255, 150, 85, 0.12);
	}

	.title-box-icon {
		line-height: 20px; 
		margin-top: 10px;
		color: #3C404F;
		font-style: normal;
		font-weight: 350;
		line-height: 24px;
	}

	.card-radius {
		border-radius: 16px;
		box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.32), 0px 4px 18px rgba(0, 0, 0, 0.12);
	}

	.title-why-choose-us {
		font-style: normal;
		font-weight: 350;
		font-size: 20px;
		line-height: 32px;
	}

	.header-why-choose-us { 
		color: #0F1014;
		font-style: normal;
		font-weight: 500;
		font-size: 16px;
		line-height: 28px;
	}

	.desc-why-choose-us{
		font-size: 13px;
		font-style: normal;
		font-weight: 325;
		/*font-size: 16px;*/
		line-height: 24px;
		color: #4A5063;
	}

	.header-testimonal{
		font-style: normal;
		font-weight: 350;
		font-size: 26px;
		line-height: 40px;
		color: #0F1014;
	}

	.subheader-testimonal{
		font-style: normal;
		font-weight: 325;
		font-size: 16px;
		line-height: 28px;
		color: #4A5063;
	}

	.team-members-shadow{
		box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.32), 0px 4px 18px rgba(0, 0, 0, 0.12);
		border-radius: 16px;
	}

	.display-team-member{
		border-radius: 16px;
	}

	.custom-image {
		padding-left: 30px;
	}

	.teams-desc {
		margin-top: 20px;
	}

	.teams-desc h3 {
		color: #0F1014;
		font-style: normal;
		font-weight: 350;
		font-size: 20px;
		line-height: 28px;
	}

	.teams-desc span {
		font-style: normal;
		font-weight: 350;
		font-size: 12px;
		line-height: 20px;
		position: relative;
		top: -10px;
	}

	.teams-desc p {
		font-style: normal;
		font-weight: 325;
		font-size: 13px;
		line-height: 24px;
		color: #4A5063;
		margin-top: -10px;
	}

	.btn-light:hover i{
		color: #FFFFFF;
	}

	.button-custom{
		background-color: #FB6E16 !important;
		border-radius: 8px;
		color: #FFFFFF !important;
		border: solid 0px !important;
	}

	.arrow-position {
		text-align: right;
	}

	@media (min-width:1281px) {
		.custom-max-widthx{
			max-width: 19.666667%;
		}
	}

	@media only screen and (max-device-width: 480px) {
		.bottom-mobile-service{
			margin-bottom: 20px;
		}
		.teams-desc{
			padding: 20px;
		}

		.teams-desc h3{
			text-align: center;
		}

		.teams-desc span {
			display: flex;
  			justify-content: center;
		}

		.teams-desc p {
			text-align: center;
		}

		.custom-image{
			display: block;
			margin-left: auto;
			margin-right: auto;
			width: 70%;
		}

		.arrow-position {
			text-align: center;
			margin-top: 10px;
		}
	}

</style>

<div id="slider" class="inspiro-slider dots-creative" data-fade="true" style="margin-top: -20px;">
	@if($slider != NULL)
		@foreach( $slider as $key => $value ) :
			@php
				$classActive = "";
		        if ( $key == 0 ) {
		          $classActive = "active";
		        }
			@endphp
			<div class="slide kenburns" data-bg-image="{{ url('upload/slider/'.$value->image) }}">
				<div class="container">
					@if($value->description != NULL)
					<div class="slide-captions text-center text-light">
						<div class="text-left">
							{!! html_entity_decode( $value->description ) !!}
							@if($value->link != null)
		                    <div class="btn btn-light button-custom">
								<a href="{{ $value->link }}" target="_blank">
									Read More&nbsp; <i class="fa fa-arrow-right"></i>
								</a>
							</div>
							@endif
						</div>
					</div>
					@endif
				</div>
			</div>
		@endforeach
	@else
	<div class="slide kenburns" data-bg-image=""></div>
	@endif
</div>
<section id="page-content">
	<div class="container-fluid">
		<div class="card card-radius">
            <div class="card-body">
				<div class="row">
					<div class="col-md-5">
						<h3>Our Services</h3>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
					</div>
					<div class="col-md-7">
						<div class="pull-left" style="float: right;">
							<div class="row">
								<div class="col-md-2 col-6 col-sm-6 custom-max-widthx">
									<a href="{{ route('pendirian-badan-usaha') }}">
										<div class="text-center bottom-mobile-service">
											<img src="{{ url('frontend/images/services/1.png') }}" width="100" height="100">
											<h6 class="title-box-icon">Pendirian Usaha</h6>
										</div>
									</a>
								</div>
								<div class="col-md-2 col-6 col-sm-6 custom-max-widthx">
									<a href="{{ route('accounting-service') }}">
										<div class="text-center bottom-mobile-service">
											<img src="{{ url('frontend/images/services/2.png') }}" width="100" height="100">
											<h6 class="title-box-icon">Accounting Services</h6>
										</div>
									</a>
								</div>
								<div class="col-md-2 col-6 col-sm-6 custom-max-widthx">
									<a href="{{ route('tax-service') }}">
										<div class="text-center bottom-mobile-service">
											<img src="{{ url('frontend/images/services/3.png') }}" width="100" height="100">
											<h6 class="title-box-icon">Tax<br> Services</h6>
										</div>
									</a>
								</div>
								<div class="col-md-2 col-6 col-sm-6 custom-max-widthx">
									<div class="text-center bottom-mobile-service">
										<img src="{{ url('frontend/images/services/4.png') }}" width="100" height="100">
										<h6 class="title-box-icon">Audit<br> Services</h6>
									</div>
								</div>
								<div class="col-md-2 col-6 col-sm-6 custom-max-widthx">
									<a href="{{ route('finance-service') }}">
										<div class="text-center bottom-mobile-service">
											<img src="{{ url('frontend/images/services/5.png') }}" width="100" height="100">
											<h6 class="title-box-icon">Finance Services</h6>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6" style="margin-bottom: 20px;">
				<img src="{{ url('frontend/images/why_choose_us.png') }}" width="100%">
			</div>
			<div class="col-md-6">
				<h4 class="title-why-choose-us">Why Choose Us?</h4>
				<ul class="list-icon list-icon-circle list-icon-colored red text-justify">
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
					</li>
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy</div>
					</li>
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's</div>
					</li>
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<br><br>
<section id="page-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<h4>What Makes Us Uniq</h4>
				<ul class="list-icon list-icon-circle list-icon-colored red text-justify">
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
					</li>
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's standard dummy</div>
					</li>
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industryLorem Ipsum has been the industry's</div>
					</li>
					<li>
						<div class="header-why-choose-us">Lorem Ipsum</div>
						<div class="desc-why-choose-us">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<img src="{{ url('frontend/images/what_makes_use_uniq.png') }}" width="100%">
			</div>
		</div>
	</div>
</section>
<br><br>
<section id="page-content" style="margin-bottom: 100px;">
	<div class="container-fluid">
		<h3 class="text-center header-testimonal">
			Valuable feedback<br>
			from our client
		</h3>
		<h5 class="text-center subheader-testimonal">
			The people who work at Distruptive share the vision and value of our community
		</h5>
		<br>
		<div class="row">
			<div class="col-md-9">
				<div class="carousel team-members team-members-shadow" data-dots="false" data-items="1">
		            @if(count($testimonial) > 0)
		            	@foreach($testimonial as $testimonials)
				            <div class="display-team-member">
				            	<div class="row">
				            		<div class="col-md-2" style="padding: 10px;">
				            			<div class="custom-image">
				            				@if($testimonials->image != NULL)
				            				<img src="{{ url('upload/testimonial/'.$testimonials->image) }}" class="img-fluid rounded-circle" style="width: 120px; height: 120px;" />
				            				@else
				            				<img src="{{ url('frontend/images/image_default.png') }}" class="img-fluid rounded-circle" style="width: 120px; height: 120px;" />
				            				@endif
				            			</div>
				            		</div>
				            		<div class="col-md-9" style="padding: 0px;">
				            			<div class="teams-desc">
						                    <h3>{{ $testimonials->nama }}</h3>
						                    <span>{{ $testimonials->jabatan }}</span>
						                    <p>
						                    	{!! html_entity_decode($testimonials->deskripsi) !!}
						                    </p>
						                </div>
				            		</div>
				            	</div>
				            </div>
				        @endforeach
		            @endif
		        </div>
			</div>
			<div class="col-md-3">
				<div class="pull-right">
					<div class="arrow-position">
						<button class="btn btn-light previous" aria-label="Previous">
							<i class="fa fa-arrow-left"></i>
						</button>&nbsp;
						<button class="btn btn-light btn-hover next" aria-label="Next">
							<i class="fa fa-arrow-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
