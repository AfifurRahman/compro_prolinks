@extends('layouts.app_frontend')

@section('content')
    <div>
        <link href="{{ url('frontend/css/insight.css') }}" rel="stylesheet" type="text/css" />

        <div class="home-container-1">
            <p class="hcontainer-1">AI Insights</p>
            <p class="hcontainer-2">Leverage the power of AI for predictive analytics and automated document indexing.</p>
            <div class="get-started">
                <a href="" class="get-started-btn">Get started</a>
                <a href="" class="contact-btn">Contact sales</a>
            </div>
        </div>

        <div class="home-container-2">
            <p class="hcontainer-3">Predictive Analytics for Informed Decisions</span></p>
            <p class="hcontainer-4">Our AI-driven predictive analytics provide valuable insights, helping you make<br>
            informed decisions and stay ahead of the competition.</p>
            <div class="feature-container">
                <div class="feature-list">
                    <div class="feature">
                        <p class="feature-title">Predictive Analytics Engine</p>
                        <p class="feature-description">Gain foresight into market trends and business<br>
                        outcomes with our AI-driven predictive analytics<br>
                        engine, enabling more strategic decision-making.</p>
                    </div>
                    <div class="feature">
                        <p class="feature-title">Smart Document Indexing</p>
                        <p class="feature-description">Effortlessly organize and manage your documents<br>
                        with our AI-powered smart indexing, which<br>
                        automatically categorizes files for optimal efficiency.</p>
                    </div>
                    <div class="feature">
                        <p class="feature-title">AI-Enhanced Reporting</p>
                        <p class="feature-description">Transform raw data into actionable insights with our<br>
                        AI-enhanced reporting, offering detailed analysis to<br>
                        support intelligent business strategies.</p>
                    </div>
                </div>
                <div class="feature-illustration">
                    <img src="{{ url('frontend/images/advance-feature-document.png') }}" class="feature-img">
                </div>
            </div>
        </div>

        <div class="home-container-3">
            <p class="hcontainer-5">Intelligent Insights and Reporting</p>
            <p class="hcontainer-6">Our solutions offer comprehensive data analysis, giving you a clear understanding of<br>
            your business operations and facilitating smarter strategic planning.</p>
            <div class="real-time-feature">
                <div>
                    <div class="feature-row">
                        <img src="{{ url('frontend/images/feature-img-1.png') }}" class="real-time-img1">
                        <p class="feature-title">Advanced Data Visualization</p>
                        <p class="feature-description">Utilize dynamic charts and graphs to visually interpret complex data, making it<br>
                        easier to identify patterns and trends.</p>
                    </div>
                </div>
                <div>
                    <div class="feature-row-left">
                        <img src="{{ url('frontend/images/feature-img-2.png') }}" class="real-time-img2">
                        <p class="feature-title">Automated Data Summarization</p>
                        <p class="feature-description">Receive concise summaries of large datasets,<br>
                        highlighting key insights and critical information for<br>
                        quick comprehension and decision-making.</p>
                    </div>
                    <div class="feature-row-left">
                        <img src="{{ url('frontend/images/feature-img-3.png') }}" class="real-time-img3">
                        <p class="feature-title">Customizable Dashboards</p>
                        <p class="feature-description">Create tailored dashboards that display relevant<br>
                        metrics and KPIs in real-time, providing an at-a-<br>
                        glance overview of your business performance.</p>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="home-container-4">
			<p class="hcontainer-7">Trusted Security and Compliance Certifications</p>
			<p class="hcontainer-8">Reliable and trusted for privacy security</p>
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

        <div class="home-container-5">
			<p class="hcontainer-9">Get Started with Prolinks Today</p>
			<p class="hcontainer-10">Secure document sharing with smart tech at your fingertips</p>
			<div class="get-started-container">
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
