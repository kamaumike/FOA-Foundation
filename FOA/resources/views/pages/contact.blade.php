@extends('layouts.app')

@section('title', 'Contact')

@section('navbar')
    @parent

    <p>This is appended to the master navigation bar.</p>
@endsection

@section('contact-us')    
    <div class="row">
        <div class="col-lg-12">
            <div class="section-title text-center">
                <h3>Contact With Us</h3>
                <p>Duis aute irure dolor in reprehenderit in voluptate</p>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-lg-12"> --}}
        <div class="col-md-9">
        	<p>Please fill in the form below.</p>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div> 
	                    <div class="col-lg-12 text-center">
	                        <div id="success"></div>
	                        <button type="submit" class="btn btn-primary">Send Message</button>
	                    </div>                                
                    </div>
                    <div class="clearfix"></div>              
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="footer-contact-info">
                <h4>Contact info</h4>
                <ul>
                    <li><strong>E-mail :</strong> your-email@mail.com</li>
                    <li><strong>Phone :</strong> +8801-6778776</li>
                    <li><strong>Mobile :</strong> +8801-45565378</li>
                    <li><strong>Web :</strong> yourdomain.com</li>
                </ul>
            </div>
        </div>  
		<div class="col-md-3">
            <div class="footer-contact-info">
                <h4>Working Hours</h4>
                <ul>
                    <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                    <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                    <li><strong>Sat :</strong> 9 am to 3 pm</li>
                    <li><strong>Sunday :</strong> Closed</li>
                </ul>
            </div>
        </div>
    </div>
    <br><br><br>           
@endsection