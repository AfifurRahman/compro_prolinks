@extends('layouts.app_frontend')

@section('content')
    <link href="{{ url('frontend/css/company.css') }}" rel="stylesheet" type="text/css" /> 

    <div class="company-container-1">
        <div class="container">
            <div class="row">
                <p class="about-company-title">Prolinks Virtual Data Room - more than just technology</p>
                <p class="about-company-text">At Prolinks, we are dedicated to revolutionizing the way businesses handle their most sensitive and critical transactions. As a leading provider of Virtual Data Room (VDR) applications, we offer state-of-the-art solutions designed to streamline, secure, and simplify complex processes such as mergers and acquisitions, financial transactions, and due diligence. </p>
            </div>
            <div class="row">
                <p class="about-company-mission">Our mission</p>
                <p class="about-company-text">Our mission is to empower organizations with the tools they need to manage their data efficiently and securely. We understand the importance of data integrity and confidentiality, and we strive to deliver unparalleled VDR services that exceed our clients' expectations.</p>
            </div>
        </div>
    </div>

    <div class="company-container-2">
        <div class="container">
            <div class="awards-row">
                <div class="award-row">
                    <p class="award-row-up">#1</p>
                    <p class="award-row-bottom">Indonesian VDR</p>
                </div>
                <div class="award-row">
                    <p class="award-row-up">10+</p>
                    <p class="award-row-bottom">Trusting clients</p>
                </div>
                <div class="award-row">
                    <p class="award-row-up">13</p>
                    <p class="award-row-bottom">Completed deals</p>
                </div>
                <div class="award-row">
                    <p class="award-row-up">IDR 1.5B</p>
                    <p class="award-row-bottom">Completed transactions</p>
                </div>
            </div>
        </div>
    </div>

    <div class="company-container-3">
        <div class="container">
            <div class="company-profile">
                <div class="about-synergy">
                    <p class="company-name">Synergy Asia</p>
                    <p class="company-mission">Our mission is to empower organizations with the tools they need to manage their data efficiently and securely. We understand the importance of data integrity and confidentiality, and we strive to deliver unparalleled VDR services that exceed our clients' expectations.</p>
                </div> 
                <img src="{{ url('frontend/images/synergy.png') }}" class="synergy-img"/>
            </div>
        </div>
    </div>

    <div class="company-container-4">
        <div class="container">
            <p class="company-list-header">Check out how we can help you further</p>
            <div class="company-list">
                <div class="protemus-consulting">
                    <img src="{{ url('frontend/images/protemus-consulting.png') }}" />
                    <p class="company-desc">Specialize in guiding international startups, mid-sized private equity firms, and growing companies through M&A, ensuring an exceptional journey in Indonesia.</p>
                </div>
                <div class="protemus-capital">
                    <img src="{{ url('frontend/images/protemus-capital.png') }}" />
                    <p class="company-desc">We've carved a unique niche for ourselves as specialists in Mergers & Acquisitions, particularly within the vibrant sectors of Technology, Media, and Telecommunications. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="company-container-5">
        <div class="container">
            <div class="contact-us">
                <div class="contact-details">
                    <div class="contact-description">
                        <p class="contact-us-text">Contact us</p>
                        <p class="contact-us-description">Need to get in touch with a member of the Prolinks sales, marketing or support teams? Please complete the form and your information will get routed to the right team.</p>
                    </div>
                    <div class="contact-detail">
                        <p class="contact-support">Prolinks support</p>
                        <p class="contact-number"><img src="{{ url('frontend/images/phone.png') }}">+6221 3972 6868</p>
                        <p class="contact-email"><img src="{{ url('frontend/images/envelope.png') }}">info@prolinks.id</p>
                    </div>
                </div>
                <div class="contact-form">
                    <div class="form-fill">
                        <p>Full name</p>
                        <input type="text" />
                        <p>Email</p>
                        <input type="text" />
                        <p>Phone number</p>
                        <input type="text" />
                        <p>Company name</p>
                        <input type="text" />
                        <p>Company size</p>
                        <input type="text" />
                        <p>Country</p>
                        <input type="text" />
                        <p>
                        <button href="">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="company-container-6">
    </div>

    <div class="home-container-5">
        <p class="hcontainer-9">Get Started with Prolinks Today</p>
        <p class="hcontainer-10">Secure document sharing with smart tech at your fingertips</p>
        <div class="get-started-container">
            <a href="" class="get-started-sign-up">Sign up</a>
            <a href="" class="get-started-contact">Contact sales</a>
        </div>
    </div>

@endsection

@push('scripts')
<script type="text/javascript">
	
</script>
@endpush