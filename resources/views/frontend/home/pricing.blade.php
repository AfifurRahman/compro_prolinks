@extends('layouts.app_frontend')

@section('content')
    <div>
        <link href="{{ url('frontend/css/pricing.css') }}" rel="stylesheet" type="text/css" />

        <div class="pricing-container-1">
            <p class="pricing-content-1">Choose the right plan for you</p>
            <p class="pricing-content-2">Select the ideal plan for your project size, security requirements, and desired support level</p>
            
            <div class="duration-box">
                <p class="pricing-content-3">6 months</p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <p class="pricing-content-3">1 year</p>
                <p class="pricing-content-4">Save 25%</p>
            </div>

            <div class="pricing-container-box">
                <div class="pricing-box-1">
                    <div class="pricing-content">
                        <p class="pricing-name">Profesional</p>
                        <p class="pricing-desc">Streamlined secure document sharing for small<br>
                        and mid-size projects.</p>
                        <p class="pricing-price">$3,350</p>
                        <div class="pricing-feature">
                            <p>1 project</p>
                            <p>5 administrators</p>
                            <p>Unlimited users</p>
                        </div>
                        <a href="" class="pricing-btn">Select Package</a>
                        <div class="divider-row"></div>
                        <div class="pricing-support">
                            <p>Pro plan includes</p>
                            <ul>
                                <li>24/7 multilingual support</li>
                                <li>2-step verification</li>
                                <li>Customizable dynamic watermarks</li>
                                <li>Standard Q&A management</li>
                                <li>Bulk files and folder rename</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="pricing-box-2">
                        <div class="pricing-content">
                            <p class="pricing-name">Business</p>
                            <p class="pricing-desc">Confidently manage larger transactions with<br>
                            expert guidance.</p>
                            <p class="pricing-price">Contact sales</p>
                            <div class="pricing-feature">
                                <p>Unlimited project</p>
                                <p>Unlimited administrators</p>
                                <p>Unlimited users</p>
                            </div>
                            <a href="" class="pricing-btn">Get a quote</a>
                            <div class="divider-row"></div>
                            <div class="pricing-support">
                                <p>Everything in Pro, plus</p>
                                <ul>
                                    <li>Extended Premier support</li>
                                    <li>Unlimited live training with an expert</li>
                                    <li>Multi-project management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-container-2">
            <div class="container">
                <div class="add-on-box">
                    <div class="add-on-container">
                        <p class="add-on-title">Add ons</p>
                        <p class="add-on-text">Optimize your workflow and pay as you go</p>

                        <div class="professional-pricing">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-title">Professional</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-duration">6 months</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-duration">1 year</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-left-header">Storage</p>
                                    <p class="add-on-pkg-left-header-sm">Charged monthly</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$90 per 500 MB</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$60 per 500 MB</p>
                                </div>
                            </div>
                            <div class="divider-row"></div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-left-header">Term extension</p>
                                    <p class="add-on-pkg-left-header-sm">Charged monthly</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$540</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$540</p>
                                </div>
                            </div>
                            <div class="divider-row-end"></div>
                        </div>
                        <div class="business-pricing">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-title">Business</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-duration">6 months</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-duration">1 year</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-left-header">Storage</p>
                                    <p class="add-on-pkg-left-header-sm">Charged monthly</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$100 per 500 MB</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$75 per 500 MB</p>
                                </div>
                            </div>
                            <div class="divider-row"></div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="add-on-pkg-left-header">Term extension</p>
                                    <p class="add-on-pkg-left-header-sm">Charged monthly</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$625</p>
                                </div>
                                <div class="col-lg-4">
                                    <p class="add-on-price">$625</p>
                                </div>
                            </div>
                            <div class="divider-row"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-container-3">
            <div class="container">
                <p class="faq-title">FAQs</p>
                <p class="faq-description">Everything you need to know about the product and billing. Can’t find the answer<br>
                you’re looking for? Please chat to our friendly team.</p>
                <div class="faq-list">
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="faq-question">Is there a free trial available?</p>
                            <p class="faq-answer">Yes, you can try us for free for 30 days. If you want,
                            we’ll provide you with a free, personalized 30-
                            minute onboarding call to get you up and running
                            as soon as possible.</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="faq-question">Can I change my plan later?</p>
                            <p class="faq-answer">Of course. Our pricing scales with your company.
                            Chat to our friendly team to find a solution that
                            works for you.</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="faq-question">What is your cancellation policy?</p>
                            <p class="faq-answer">We understand that things change. You can cancel
                            your plan at any time and we’ll refund you the
                            difference already paid.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <p class="faq-question">Can other info be added to an invoice?</p>
                            <p class="faq-answer">Yes, you can try us for free for 14 days. If you want,
                            we’ll provide you with a free, personalized 30-
                            minute onboarding call to get you up and running
                            as soon as possible.</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="faq-question">How does billing work?</p>
                            <p class="faq-answer">Plans are per workspace, not per account. You can
                            upgrade one workspace, and still have any number
                            of free workspaces.</p>
                        </div>
                        <div class="col-lg-4">
                            <p class="faq-question">How do I change my account email?</p>
                            <p class="faq-answer">You can change the email address associated with
                            your account by editing to </p>
                        </div>
                    </div>
                </div>
            
            
                <div class="contact-sales-box">
                    <div class="contact-sales-container">
                        <div>
                            <p class="contact-sales-ask">Still have questions?</p>
                            <p class="contact-sales-desc">Can’t find the answer you’re looking for? Please chat to our friendly team.</p>
                        </div>
                        <a href="" class="contact-sales-btn">Contact sales</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-container-4">
            <div class="container">
                <p class="pricing-content-5">Get Started with Prolinks Today</p>
                <p class="pricing-content-6">Secure document sharing with smart tech at your fingertips</p>
                <div class="get-started-container">
                    <a href="" class="get-started-sign-up">Sign up</a>
                </div>
            </div>
		</div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
	
</script>
@endpush
