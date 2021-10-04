@extends('layouts.app')

@section('content')
<section class="banner-inner-sec" style="background-image:url({{asset('assets/images/contact-banner.jpg')}})">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Contact us</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Home  / </a> <a href="index.html">Pages /</a>  contact</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!--  get in touch section -->
<section class="xs-get-in-touch">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="get-in-touch-cont text-center">
                    <h3><span class="light-text">Get</span> in touch</h3>
                    <p>Pharetra auctor libero suscipit rhoncus vivamus tempor nascetur Nisi platea euismod,<br/> aliquam ac
                        feugiat donec commodo aenean volutpat</p>
                </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End get in touch section -->

<!--  contact section -->
<section class="xs-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="xs-form-group">
                    <form action="#" method="POST" id="xs-contact-form" class="xs-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="name" placeholder="Your name"
                                       id="xs_contact_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder="Your email"
                                       id="xs_contact_email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="number" class="form-control" name="phone-number"
                                       placeholder="Your phone number" id="xs_contact_phone">

                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="Subject" placeholder="Subject"
                                       id="xs_contact_subject">
                            </div>
                        </div>

                        <textarea name="massage" placeholder="Message" id="x_contact_massage"
                                  class="form-control message-box" cols="30" rows="10"></textarea>

                        <div class="xs-btn-wraper">
                            <input type="submit" class="xs-btn" id="xs_contact_submit" value="SEND MESSAGE">
                        </div>
                    </form>
                </div>
            </div><!-- col end -->
            <div class="col-lg-5">
                <div class="contact-map">
                    <div style="width: 100%">
                        
                        <iframe src="https://maps.google.com/maps?width=100&amp;height=600&amp;hl=en&amp;q=New%20York%2C%20USA+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>

                    </div>
               </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End contact section -->
<!--  contact section -->
<section class="xs-contact-infomation xs-contact-info-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-address"></i>
                    <h4>Visit our office</h4>
                    <span>36/A, Lake cercus, Monali</span>
                    <span class="text-color">Newyork, NY, US</span>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-mail"></i>
                    <h4>Mail us</h4>
                    <a href="mailto:contact@example.com">example@gmail.com</a>
                    <a href="mailto:info@example.com">bdexample@gmail.com</a>
                </div><!-- .contact-info-group END -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-group">
                    <i class="icon-call"></i>
                    <h4>Call us</h4>
                    <span>000 3872 3627</span>
                    <span class="text-color">(Mon- tue) at 9.am to 6pm</span>
                </div><!-- .contact-info-group END -->
            </div>
        </div>
    </div><!-- .container end -->
</section>
@endsection