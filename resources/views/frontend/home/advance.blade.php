@extends('layouts.app_frontend')

@section('content')
    <div>
        <link href="{{ url('frontend/css/advance.css') }}" rel="stylesheet" type="text/css" />

        <div class="home-container-1">
            <p class="hcontainer-1">Advanced VDR Services</p>
            <p class="hcontainer-2">Unlock tomorrow's potential with our cutting-edge VDR solutions. Enhance security, streamline processes, and gain<br>
            unmatched efficiency. Trust in our expertise for your advanced VDR needs.</p>
            <div class="get-started">
                <a href="" class="get-started-btn">Get started</a>
                <a href="" class="contact-btn">Contact sales</a>
            </div>
        </div>

        <div class="home-container-2">
            <p class="hcontainer-3">Secure and Efficient <span style="color:#4E9EC9;">Document Management</span></p>
            <p class="hcontainer-4">Our platform provides robust security features and user-friendly interfaces, making it<br>
            easier than ever to manage sensitive information during due diligence.</p>
            <div class="feature-container">
                <div class="feature-list">
                    <div class="feature">
                        <p class="feature-title">Drag & drop file upload</p>
                        <p class="feature-description">Start your brand new data room with one-click data<br>
                        population. Drag & Drop files and folders from your<br>
                        computer into the upload window</p>
                    </div>
                    <div class="feature">
                        <p class="feature-title">Save time with bulk upload</p>
                        <p class="feature-description">Instantly upload documents to the data room. No<br>
                        limits for size or number of uploaded files. It takes a<br>
                        moment for the data room to finish uploading.</p>
                    </div>
                    <div class="feature">
                        <p class="feature-title">Automatic index numbering</p>
                        <p class="feature-description">Thousands of documents and folders are<br>
                        automatically numbered as you upload or move them.<br>
                        No need to create or update the data room index<br>
                        manually</p>
                    </div>
                </div>
                <div class="feature-illustration">
                    <img src="{{ url('frontend/images/advance-feature-document.png') }}" class="feature-img">
                </div>
            </div>
        </div>

        <div class="home-container-3">
            <p class="hcontainer-5"><span style="color:#7DB928">Real-Time</span> Collaboration and Access</p>
            <p class="hcontainer-6">Facilitate seamless collaboration among your team and stakeholders with our VDR solutions. Enjoy real-<br>
            time document access and editing, ensuring everyone stays on the same page and accelerates the due<br>
            diligence process.</p>
            <div class="real-time-feature">
                <div>
                    <div class="feature-row">
                        <img src="{{ url('frontend/images/feature-img-1.png') }}" class="real-time-img1">
                        <p class="feature-title">Centralize QnA</p>
                        <p class="feature-description">While you can track everything and access insightful reports that ensure<br>
                        compliance, the confidential details of companies and people collaborating<br>
                        are never disclosed unless you need them to be.</p>
                    </div>
                </div>
                <div>
                    <div class="feature-row-left">
                        <img src="{{ url('frontend/images/feature-img-2.png') }}" class="real-time-img2">
                        <p class="feature-title">Import questions and bulk actions</p>
                        <p class="feature-description">Import and export multiple questions in bulk from<br>
                        Excel to and from the virtual data room</p>
                    </div>
                    <div class="feature-row-left">
                        <img src="{{ url('frontend/images/feature-img-3.png') }}" class="real-time-img3">
                        <p class="feature-title">Easy group setup</p>
                        <p class="feature-description">Easily manage hundreds of users by dividing them<br>
                        into groups with different levels of access to projects</p>
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
