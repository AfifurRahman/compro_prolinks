@extends('layouts.app_frontend')

@section('content')
<link href="{{ url('frontend/css/company.css') }}" rel="stylesheet" type="text/css" /> 
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
    
    <div class="company-container-7">
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