@extends('layouts.app')

@section('content')
<section class="banner-inner-sec" style="background-image:url({{asset('assets/images/banner/about-banner.jpg')}})">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">About Us</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Home  / </a> About</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!-- header about inner section -->
<section class="about-inner section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                <div class="about-inner-img">
                    <img src="{{asset('assets/images/about/about_2.jpg')}}" alt="">
                </div>
            </div><!-- col end -->
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="about-inner-content">
                    <h2 class="column-title2 column-title">About our Company</h2>
                   <div class="single-about-content">
                        <h3>You will morning man open green fruitful</h3>
                        <p>And face of forth days for his lesser earth thing sea fourth. Brought. Fifth of form. Together.
                            Female whose said lights greater open gathered gathering.
                        </p>
                   </div>
                   <div class="single-about-content">
                        <h3>That had air creature us</h3>
                        <p>Multiply made after, herb man Won't a good open darkness 
                            our deep heaven seasons they're day.
                        </p>
                   </div>
                   <div class="row about-funfact">
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_1"></i>
                                <h4 class="funfact-title" data-counter="25">25 +</h4>
                                <p>year of experience</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_2"></i>
                                <h4 class="funfact-title" data-counter="502">502 +</h4>
                                <p>happy customers</p>
                            </div>
                       </div>
                       <div class="col-sm-4">
                            <div class="single-about-funfact">
                                <i class="icon-fun_fact_4"></i>
                                <h4 class="funfact-title" data-counter="100">100</h4>
                                <p>professional awards</p>
                            </div>
                       </div>
                   </div>
                </div>
            </div><!-- col end -->
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End about inner section -->

<!-- header company timeline section -->

<!-- End company timeline section -->


<!-- header why choose us section -->
<section class="why-choose-us-sec why-choose-inner section-padding section-bg-v2">
    <div class="container">
        <div class="row">
        <div class="col-lg-9 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                <div class="why-choose-content">
                    <h2 class="column-title2 column-title">Why Choose Us</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                <i class="icon-why-choose-1"></i> 
                                <h3>We are ISO certifide</h3>
                                <p>Be, brought first whales he signs thing our give were all fowl sea upon make called face together.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                <i class="icon-why-choose-2"></i> 
                                <h3>Best support</h3>
                                <p>Be, brought first whales he signs thing our give were all fowl sea upon make  called face together.</p>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-3"></i> 
                                <h3>Expert team members</h3>
                                <p>Be, brought first whales he signs thing our give were all fowl sea upon make  called face together.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-why-choose-list">
                                 <i class="icon-why-choose-4"></i>
                                <h3>No hidden cost</h3>
                                <p>Be, brought first whales he signs thing our give were all fowl sea upon make  called face together.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                <div class="why-choose-inner-img">
                    <img src="{{asset('assets/images/about/why-choose-us-inner.png')}}" alt="">
                </div>
            </div>
            
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End why choose us section -->

<!-- header team section -->
<section class="team-sec section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-item section-title-v2-item">
                    
                  
                    <h2 class="section-title">
                        <span class="xs-title">Our experts </span>
                        Meet with our Team
                    </h2>
                    <h3 class="hidden-title">experts</h3>
                </div>
            </div>
        </div><!-- .row end -->
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="team-img">
                        <img src="{{asset('assets/images/team/team_1.jpg')}}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <h3>Mr. Jon miller</h3>
                    <p>Gardener</p>
                </div>
            </div><!-- .col end -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="team-img">
                        <img src="{{asset('assets/images/team/team_2.jpg')}}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <h3>Mr. Kibria mou</h3>
                    <p>Gardener</p>
                </div>
            </div><!-- .col end -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="team-img">
                        <img src="{{asset('assets/images/team/team_3.jpg')}}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <h3>Mis. Jaqulin</h3>
                    <p>Gardener</p>
                </div>
            </div><!-- .col end -->
            <div class="col-lg-3 col-sm-6">
                <div class="single-team">
                    <div class="team-img">
                        <img src="{{asset('assets/images/team/team_4.jpg')}}" alt="">
                        <div class="team-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <h3>Mr. Pongvan</h3>
                    <p>Gardener</p>
                </div>
            </div><!-- .col end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End team section -->

<!-- header ready to contact section -->
<section class="ready-to-contact section-padding" style="background: url({{asset('assets/images/about/ready-to-contact.jpg')}}) no-repeat center center /cover">
    <div class="container">
       <div class="col-lg-8 offset-lg-2">
           <div class="ready-to-contact-content">
               <h2>Are you ready to take our service?</h2>
               <p>Be brought first whales he signs thing our give were all fowl sea upon make firmament called face, together. 
                   I third deep days fifth spirit you're is you're saw bearing 
                </p>
                <a href="#" class="xs-btn fill">CONTACT US</a>
           </div>
       </div>
    </div><!-- .container end -->
</section>
@endsection