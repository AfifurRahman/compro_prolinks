@extends('layouts.app_frontend')

@section('content')
    <link href="{{ url('frontend/css/insight.css') }}" rel="stylesheet" type="text/css" /> 

    <div class="company-container-1">
        <div class="container">
            <div class="about-company-1">
                <p class="about-company-title">Prolinks Virtual Data Room - more than just technology</p>
                <p class="about-company-text">At Prolinks, we are dedicated to revolutionizing the way businesses handle their most sensitive and critical transactions. As a leading provider of Virtual Data Room (VDR) applications, we offer state-of-the-art solutions designed to streamline, secure, and simplify complex processes such as mergers and acquisitions, financial transactions, and due diligence. </p>
            </div>
            <div class="about-company-2">
                <p class="about-company-mission">Our mission</p>
                <p class="about-company-text">Our mission is to empower organizations with the tools they need to manage their data efficiently and securely. We understand the importance of data integrity and confidentiality, and we strive to deliver unparalleled VDR services that exceed our clients' expectations.</p>
            </div>
        </div>
    </div>

    <div class="company-container-2">
        <div class="container">
            <div class="row">
                <div class="award-row">
                    <p>#1</p>
                    <p>Indonesian VDR</p>
                </div>
                <div class="award-row">
                    <p>10+</p>
                    <p>Trusting clients</p>
                </div>
                <div class="award-row">
                    <p>13</p>
                    <p>Completed deals</p>
                </div>
                <div class="award-row">
                    <p>IDR 1.5B</p>
                    <p>Completed transactions</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
	
</script>
@endpush
