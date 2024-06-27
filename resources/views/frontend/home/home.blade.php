@extends('layouts.app_frontend')

@section('content')
	<div class="container-xxl">
		<link href="{{ url('frontend/css/home.css') }}" rel="stylesheet" type="text/css" />

		<div class="home-container-1">
			<p class="hcontainer-1">Secure data with smart tech</p>
			<p class="hcontainer-2">Your Comprehensive M&A Technology Solution</p>
			<p class="hcontainer-3">Southeast Asia’s leading provider of integrated M&A technology solutions. We facilitates secure, efficient, and<br>
			comprehensive data management for M&A activities, tailored specifically to the unique needs of the Indonesian and<br>
			Southeast Asian markets.</p>
			<div class="get-started">
				<a href="" class="get-started-btn">Get Started</a>
			</div>
			<div class="activities-image">
				<img src="{{ url('frontend/images/activities.png') }}" class="activities-img">
			</div>
		</div>

		<div class="home-container-2">
			<p class="hcontainer-4">Key features</p>
			<p class="hcontainer-5">Empower Your Workflows with <span style="color:#4E9EC9">Pro</span><span style="color:#7DB928">links</span></p>

			<div class="key-feature">
				<div class="key-feature-detail">
					<img src="{{ url('frontend/images/feature-icon-1.png') }}" class="key-feature-ico">
					<p class="key-feature-title">Advanced VDR Services</p>
					<p class="key-feature-description">
						Streamline your due diligence process with our advanced<br>
						Virtual Data Room (VDR) services.
					</p>
					<a class="key-feature-btn" href="{{ route('home-advance') }}">Learn more</a>
				</div>
				<img src="{{ url('frontend/images/key-feature-1.png') }}" class="key-feature-img">
			</div>

			<div class="key-feature">
				<img src="{{ url('frontend/images/key-feature-2.png') }}" class="key-feature-img">
				<div class="key-feature-detail-1">
				<img src="{{ url('frontend/images/feature-icon-2.png') }}" class="key-feature-ico">
					<p class="key-feature-title">AI Insights</p>
					<p class="key-feature-description">
						Leverage the power of AI for predictive analytics and automated<br>
						document indexing.
					</p>
					<a class="key-feature-btn" href="{{ route('home-insight') }}">Learn more</a>
				</div>
			</div>

			<div class="key-feature">
				<div class="key-feature-detail-2">
				<img src="{{ url('frontend/images/feature-icon-3.png') }}" class="key-feature-ico">
					<p class="key-feature-title">Customizable Workflows</p>
					<p class="key-feature-description">
						Tailor workflows to fit your specific needs, ensuring a seamless<br> 
						M&A process.
					</p>
					<a class="key-feature-btn" href="">Learn more</a>
				</div>
				<img src="{{ url('frontend/images/key-feature-3.png') }}" class="key-feature-img">
			</div>
		</div>

		<div class="home-container-3">
			<p class="hcontainer-6">Trusted Security and Compliance Certifications</p>
			<p class="hcontainer-7">Reliable and trusted for privacy security</p>
			<div class="certification">
				<div class="certificate">
					<img src="{{ url('frontend/images/iso.png') }}" class="ceritification-logo">
					<p class="certificate-title">ISO IEC 27001:2013</p>
					<p class="certificate-description">Audited annually on information security management</p>
					<p class="certificate-number">Certificate NO: IS 123456</p>
				</div>
				<div class="certificate">
					<img src="{{ url('frontend/images/psre.png') }}" class="ceritification-logo">
					<p class="certificate-title">Certified PSrE</p>
					<p class="certificate-description">Penyelenggara Sertifikasi Elektronik</p>
					<p class="certificate-number">Certificate NO: IS 123456</p>
				</div>	
				<div class="certificate-1">
					<img src="{{ url('frontend/images/pse.png') }}" class="ceritification-logo">
					<p class="certificate-title">Ministry of ICT</p>
					<p class="certificate-description">Registered as a Domestic Electronic System Operator (PSE)</p>
					<p class="certificate-number">Reg. NO: IS 123456</p>
				</div>	
			</div>
		</div>

		<div class="home-container-4">
			<div class="post-container">
				<div>
					<p class="hcontainer-8">Resources</p>
					<p class="hcontainer-9">More Virtual Data Room Resources</p>
					<p class="hcontainer-10">Gain valuable insights into your data like never before</p>
				</div>
				<div>
					<a href="" class="view-post-btn">View all posts</a>
				</div>
			</div>
			<div class="post-items">
				<div class="post">
					<img src="{{ url('frontend/images/post-1.png') }}" class="post-img">
					<p class="post-category">M&A</p>
					<p class="post-title">How AI is Revolutionizing M&A <br> Processes</p>
					<p class="post-date">24 May 2024 • 5 min</p>
				</div>
				<div class="post">
					<img src="{{ url('frontend/images/post-2.png') }}" class="post-img">
					<p class="post-category">Due Diligence</p>
					<p class="post-title">Best Practices for Secure Data <br> Management in M&A</p>
					<p class="post-date">24 May 2024 • 5 min</p>
				</div>
				<div class="post">
					<img src="{{ url('frontend/images/post-3.png') }}" class="post-img">
					<p class="post-category">Virtual Data Room</p>
					<p class="post-title">Case Study: Successful M&A with <br> Prolinks</p>
					<p class="post-date">24 May 2024 • 5 min</p>
				</div>
			</div>
		</div>

		<div class="home-container-5">
			<p class="hcontainer-11">Get Started with Prolinks Today</p>
			<p class="hcontainer-12">Secure document sharing with smart tech at your fingertips</p>
			<div class="get-started">
				<a href="" class="get-started-sign-up">Sign up</a>
				<a href="" class="get-started-contact">Contact sales</a>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
<script type="text/javascript">
	
</script>
@endpush