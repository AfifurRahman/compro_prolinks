@extends('layouts.app_frontend')

@section('content')
	<div class="sticky-services">
		<div class="bg-opacity-services"></div>
		<div class="text-sticky-services">
			<span>Home /</span>  <span><a href="">Consult Us</a></span>
			<h3>Initiate Your M&A Journey: <br>Begin a Conversation with Protemus Consulting</h3>
		</div>
	</div>
	<section id="contacts">
		<div class="body-contact-us">
			<div class="row">
				<div class="col-md-6">
					<div class="data-contact-us">
						<hr class="custom-hr-protemus">
						<h3>Contact us</h3>
						<p>Ready to elevate your M&A  endeavors? With Protemus Consulting, expertly tailored solutions. Submit your inquiries here, and we'll reach out promptly.</p>
						<br>
						<form action="{{ route('save-contacts') }}" method="POST">
							@csrf
							<div class="form-group">
								<label>Full name*</label>
								<input required type="text" name="fullname" class="form-control">
							</div>
							<div class="form-group">
								<label>Email address*</label>
								<input required type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label>Contact number*</label>
								<input required type="text" name="contact" class="form-control">
							</div>
							<div class="form-group">
								<label>Message*</label>
								<textarea class="form-control" name="message" rows="4" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label style="line-height: 20px;">
									By submitting your email address, you acknowledge that you have read the Privacy Statement and that you consent to our processing data in accordance with the Privacy Statement (including international transfers). If you change your mind at any time about wishing to receive the information from us, you can send us an email message using the Contact Us page.
								</label>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-custom-consult">
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="data-address">
						<h3>Connect with us</h3>
						<p>Start your successful M&A journey with us and unlock your business's full potential.</p>
						<p class="custom-footer-size custom-footer-margin">
	                        Ciputra International, Office Tower 3 <br>
	                        Floor 15 Unit 05 <br>
	                        Jl. Lingkar Luar Barat No. 101 <br>
	                        Jakarta 11740
	                    </p>
	                    <p class="custom-footer-size custom-get-direction"><a href="https://maps.app.goo.gl/RqDHwW4y83JvF1Zw9" class="text-success" target="_blank"><i class="fa fa-map-marker"></i> Get direction</a></p>
						<ul class="list custom-list">
	                        <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<a href="#" class="custom-contact-footer">{{ !empty($contacts->value1) ? $contacts->value1 : '' }}</a></li>
	                        <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="#" class="custom-contact-footer">{{ !empty($contacts->value4) ? $contacts->value4 : '' }}</a></li>
	                    </ul>
					</div>
				</div>
			</div>
		</div>
		<div class="body-contact-map">
			<div class="data-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.68127326598!2d106.72749907488658!3d-6.173410160495085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f73e62a2c0e3%3A0xaa26ced303c5d275!2sProtemus%20Capital!5e0!3m2!1sen!2sid!4v1697012352570!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</section>
@endsection
