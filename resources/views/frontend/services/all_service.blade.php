@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-services">
		<div class="bg-opacity-services"></div>
		<div class="text-sticky-services">
			<span>Home /</span>  <span><a href="">Services</a></span>
			<h3>Tailored Buyside Services: <br>Making Your M&A Ventures Effortless</h3>
		</div>
	</div>
	<section id="services">
		<div class="data-text-services">
			<div class="row">
				<div class="col-lg-6">
					<div class="data-text-services-left">
						<hr class="custom-hr-protemus">
						<h3>Our Approach: Customized Financial Advisory Expertise for Your Business Objectives</h3>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="data-text-services-right">
						<p>
							Specializing in startups, private equity, and growing enterprises, we tailor expertise to your unique financial needs. Navigate complexity, unlock your potential, and achieve financial success with us.
						</p>
						<a href="{{ route('contacts') }}" class="btn btn-custom-consult">Consult us</a>
					</div>
				</div>
			</div>
		</div>
		<div class="body-banner-key-values-principles">
			<img src="{{ url('frontend/images/new_banner/all_services1.png') }}" >
		</div>
		<div class="data-explore-industries">
			<hr class="custom-hr-protemus">
			<h3>Tailored Buyside Services: Making Your M&A Ventures Effortless</h3>
			<p>From Financial Due Diligence to IT consolidation, our bouquet of services ensures a holistic approach for your M&A needs. Allow us to guide you through each intricate step.</p>
		</div>

		<div class="data-widget-services">
			<div class="row list-widget-services">
				<div class="col-lg-4 widget-services-bottom">
					<div class="widget-services gradient-service-green">
						<img src="{{ url('frontend/images/widget_services/tas.png') }}">
						<h3>Transaction Advisory Services (TAS)</h3>
						<p>Empowering investors with Target Identification, Market Analysis, and Comprehensive Transaction Support for informed and strategic decision-making.</p>
						<a href="{{ route('services.tas') }}">Find out more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 widget-services-bottom">
					<div class="widget-services gradient-service-green">
						<img src="{{ url('frontend/images/widget_services/due_diligence.png') }}">
						<h3>Due Diligence</h3>
						<p>Meticulous buy-side and sell-side processes uncover potential risks, opportunities, and ensure smooth transactions for investors.</p>
						<a href="{{ route('services.due-diligence') }}">Find out more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 widget-services-bottom">
					<div class="widget-services gradient-service-green">
						<img src="{{ url('frontend/images/widget_services/valuation.png') }}">
						<h3>Valuation</h3>
						<p>Analyzing market trends and financial performance to determine fair market value, we provide reliable guidance for informed investment decisions.</p>
						<a href="{{ route('services.valuation') }}">Find out more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 widget-services-bottom">
					<div class="widget-services gradient-service-green">
						<img src="{{ url('frontend/images/widget_services/debt_advisory.png') }}">
						<h3>Debt Advisory</h3>
						<p>Customized evaluation of debt instruments and favorable terms, managing interest rate and currency risks, and ensuring financial viability in M&A.</p>
						<a href="{{ route('services.debt-advisory') }}">Find out more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 widget-services-bottom">
					<div class="widget-services gradient-service-green">
						<img src="{{ url('frontend/images/widget_services/tax_advisory.png') }}">
						<h3>Tax Advisory</h3>
						<p>Advising on deal structuring, cross-border transactions, shareholding changes, and comprehensive post-transaction tax planning, simplifying the complex tax landscape.</p>
						<a href="{{ route('services.tax-advisory') }}">Find out more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="col-lg-4 widget-services-bottom">
					<div class="widget-services gradient-service-green">
						<img src="{{ url('frontend/images/widget_services/tech_digital.png') }}">
						<h3>Technology & Digital Transformation Advisory</h3>
						<p>Navigating digital evolution with tech infrastructure guidance, post-acquisition strategies, and seamless transitions for a competitive digital edge.</p>
						<a href="{{ route('services.technology-digital') }}">Find out more <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="body-testimonials">
			@include('frontend/_card/testimonials')
		</div>
	</section>
@stop