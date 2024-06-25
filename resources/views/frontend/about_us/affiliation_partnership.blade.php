@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-about-us">
		<div class="bg-opacity-about-us"></div>
		<div class="text-sticky-about-us">
			<span>Home /</span>  <span><a href="">Affiliation and Partnership</a></span>
			<h3>Elevating M&A Excellence Globally</h3>
		</div>
	</div>
	<section id="affiliaton-partnership">
		<div class="body-affiliaton">
			<hr class="custom-hr-protemus">
			<h3>Our Strength through Global Connections</h3>
			<div class="text-affiliaton">
				<div class="row">
					<div class="col-lg-12">
						We stand at the forefront of financial consulting, bolstered by a distinguished team of M&A specialists. Protemus Consulting, a respected subsidiary of Protemus Capital Advisory, is closely aligned with the Geneva Capital Group (GCG). With a presence in 61 global locations, GCG is celebrated for its prowess in Investment Banking and M&A. Its impressive track record boasts over 4,450 deals, culminating in transactions exceeding USD 63.7 billion, underscoring its unparalleled stature in the industry. Further enriching this lineage, GCG is an integral part of Geneva Group International (GGI), a global leader in audit, tax, legal, and consulting domains. Marking its footprint across 126 countries, GGI has been recognized as the 2nd Worldwide Top 20 International Alliances & Associations by AccountancyAge, testament to its global eminence.
					</div>
				</div>
			</div>
		</div>
		<div class="body-banner-key-values-principles">
			<img src="{{ url('frontend/images/new_banner/affiliation_partnership.png') }}" >
		</div>
		<div class="middle-header-affiliation">
			<div align="center">
				<hr class="custom-hr-protemus">
			</div>
			<h3>Community Involvement and Corporate Social Responsibility</h3>
		</div>
		@if(\device::is_mobile())
			<div class="body-affiliation-1">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-affiliation-1">
							<h3>Social Impact Initiatives and Partnerships</h3>
							<p>
								At Protemus Consulting, we're committed to social responsibility. We engage in initiatives and partnerships aligned with our values, focusing on education, entrepreneurship, and sustainable development. Together with non-profit organizations and community projects, we use our expertise and resources to create lasting change for a better future. Join us in shaping a brighter tomorrow.
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="{{ url('frontend/images/new_banner/affiliation_social_impact.png') }}" width="100%">
					</div>
				</div>
			</div>
			<div class="body-affiliation-2" style="margin-top: 32px;">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-affiliation-2">
							<h3>Environmental Sustainability Efforts</h3>
							<p>
								At Protemus Consulting, we're dedicated to sustainability. From energy efficiency to responsible waste management, we're committed to minimizing our environmental impact. We partner with organizations to promote ecological conservation and environmental awareness, securing a better future for the planet.
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="{{ url('frontend/images/new_banner/affiliation_environment.png') }}" width="100%">
					</div>
				</div>
			</div>
		@else
			<div class="body-affiliation-1">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-affiliation-1">
							<h3>Social Impact Initiatives and Partnerships</h3>
							<p>
								At Protemus Consulting, we're committed to social responsibility. We engage in initiatives and partnerships aligned with our values, focusing on education, entrepreneurship, and sustainable development. Together with non-profit organizations and community projects, we use our expertise and resources to create lasting change for a better future. Join us in shaping a brighter tomorrow.
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="{{ url('frontend/images/new_banner/affiliation_social_impact.png') }}" width="100%">
					</div>
				</div>
			</div>
			<div class="body-affiliation-2">
				<div class="row">
					<div class="col-lg-6">
						<img src="{{ url('frontend/images/new_banner/affiliation_environment.png') }}" width="100%">
					</div>
					<div class="col-lg-6">
						<div class="text-affiliation-2">
							<h3>Environmental Sustainability Efforts</h3>
							<p>
								At Protemus Consulting, we're dedicated to sustainability. From energy efficiency to responsible waste management, we're committed to minimizing our environmental impact. We partner with organizations to promote ecological conservation and environmental awareness, securing a better future for the planet.
							</p>
						</div>
					</div>
				</div>
			</div>
		@endif
		<div class="body-testimonials">
			@include('frontend/_card/testimonials', ['testimonials' => $testimonials])
			@include('frontend/_card/key_values')
		</div>
	</section>
@stop