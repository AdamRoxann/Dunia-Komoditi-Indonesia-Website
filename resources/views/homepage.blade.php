@extends('layouts.app')

@section('content')
<section class="xs-banner-sec xs-banner-v2-sec owl-carousel banner-slider">
    <div class="banner-slider-item banner-item1" style="background-image: url({{asset('assets/images/banner-slider/banner_slider_3.jpg')}});">
        <div class="slider-table">
            <div class="slider-table-cell">
                <div class="container">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-content text-center">
                            <h2>We are a leading supplier of<br>Coffee & Coconut Sugar</h2>
                            <p>Tasty and healthy are a must, not an option.
                            </p>
                            <div class="xs-btn-wraper">
                                <a href="#" class="xs-btn">
                                    Our Products
                                </a>
                                <a href="#" class="xs-btn fill">
                                    Get Quote
                                </a>
                            </div><!-- .xs-btn-wraper END -->
                        </div><!-- .xs-welcome-wraper END -->
                    </div><!-- .column END -->
                </div><!-- .container end -->
            </div><!-- .slider table cell end -->
        </div><!-- .slider table end -->
    </div><!-- .xs-welcome-content END --><!-- .xs-welcome-content END -->
</section><!-- End banner section -->


<!-- start about section -->
<section class="about-v2-sec section-padding about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-item section-title-v2-item">
                    <h2 class="section-title"> <span class="xs-title">About Us</span><em>Who</em> we are?</h2>
                    <h3 class="hidden-title">About Us</h3>
                </div>
            </div>
        </div><!-- row end-->

        <div class="row">
            <div class="col-lg-2 col-md-12">
                <div class="nav flex-column about-tabs-menu" id="v-pills-tab" role="tablist"
                     aria-orientation="vertical">
                    <!-- <a class="active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                       aria-controls="v-pills-home" aria-selected="true">
                        <i class="icon-planting-and-growth"></i>
                        Planting & Growth
                    </a>
                    <a class="" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                       aria-controls="v-pills-profile" aria-selected="false">
                        <i class="icon-caring"></i>
                        Caring
                    </a>
                    <a class="" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                       aria-controls="v-pills-messages" aria-selected="false">
                        <i class="icon-grass"></i>
                        Grass Trimming
                    </a> -->
                </div>
            </div>
            <div class="col-lg-12 col-md-10">
                <div class="about-tabs-item">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane show active" id="v-pills-home" role="tabpanel"
                             aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="about-tabs-img">
                                        <img src="{{asset('assets/images/about/about_1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="about-tabs-content">
                                        <!-- <h3>Planting & Growth</h3> -->
                                        <p>
                                            We are supplier from Indonesia whose focusing on <b>Coffee Bean & Coconut Sugar</b>.<br>
                                            We are not only concern about tasty products, but the most important thing that we concerned is healthy products.<br>
                                            Depends on people's needs nowadays, healthy becomes a priority, not just a side option.
                                            We guarantee that we are not just providing tasty products, but also healthy at the same time
                                        </p>
                                        <!-- <ul>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Green whales years waters whose spirit.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Bibendum adipiscing pellentesque sollicitudin.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Green whales years waters.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Subdue unto wherein dry man heaven.
                                            </li>
                                        </ul> -->
                                        <a href="#" class="xs-btn xs-v2-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="v-pills-profile" role="tabpanel"
                             aria-labelledby="v-pills-profile-tab">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="about-tabs-img">
                                        <img src="{{asset('assets/images/about/about_1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7 align-self-center">
                                    <div class="about-tabs-content">
                                        <h4>Caring</h4>
                                        <p>
                                            Sagittis sem blandit tempor donec ridiculus bibendum adipiscing pellentesque
                                            sollicitudin, interdum aptent arcu rutrum penatibus sociis. Hendrerit
                                            feugiat lobortis hendrerit. Auctor tortor.
                                        </p>
                                        <ul>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Green whales years waters whose spirit.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Bibendum adipiscing pellentesque sollicitudin.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Green whales years waters.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Subdue unto wherein dry man heaven.
                                            </li>
                                        </ul>
                                        <a href="#" class="xs-btn xs-v2-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="v-pills-messages" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="about-tabs-img">
                                        <img src="{{asset('assets/images/about/about_1.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7 align-self-center">
                                    <div class="about-tabs-content">
                                        <h4>Grass trimming</h4>
                                        <p>
                                            Sagittis sem blandit tempor donec ridiculus bibendum adipiscing pellentesque
                                            sollicitudin, interdum aptent arcu rutrum penatibus sociis. Hendrerit
                                            feugiat lobortis hendrerit. Auctor tortor.
                                        </p>
                                        <ul>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Green whales years waters whose spirit.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Bibendum adipiscing pellentesque sollicitudin.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Green whales years waters.
                                            </li>
                                            <li>
                                                <i class="icon icon-checked2"></i>
                                                Subdue unto wherein dry man heaven.
                                            </li>
                                        </ul>
                                        <a href="#" class="xs-btn xs-v2-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div><!-- .container end -->
</section><!-- End  about section -->

<!-- start video section -->
<section class="video-sec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 xs-padding-0 align-self-center">
                <div class="video-item">
                    <img src="{{asset('assets/images/video-img.jpg')}}" alt="">
                    <a href="https://www.youtube.com/watch?v=pYwBDEV5vnA" class="video-play-btn"><i
                                class="icon icon-play-button2"></i> </a>
                </div>
            </div>
            <div class="col-lg-5 xs-padding-0">
                <div class="call-to-action-v2">
                    <div class="call-back-content">

                        <h3><i class="icon icon-user-1"></i> Get <span>Quote</span></h3>
                        <br>
                        <!-- <p class="call-contact-text">
                            Lesser itself let won't over one signs unto you stars.
                           <span> 25% Discount for your 1st Lawn</span>
                        </p> -->
                        <form class="call-back-form">
                            <div class="form-group">
                                <input type="text" name="name" value="" placeholder="Your Name" class="call-back-inp">
                            </div>
                            <div class="form-group">
                                <input type="number" name="number" value="" placeholder="Phone Number " class="call-back-inp">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email " class="call-back-inp">
                            </div>
                            <div class="form-group call-back-btn">
                                <button type="submit" name="submit" class="xs-btn xs-v2-btn">Submit</button>
                                <label class="call-us-number">Or Call US - <span><a style="color: #489f10" href="tel:081260774365">+6281260774365</a></span></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- row end-->
    </div><!-- .container end -->
</section><!-- End  video section -->

<section class="our-project-sec recent-work-sec" style="padding: 50px 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-item section-title-v2-item">
                  
                    <h2 class="section-title">
                    <!-- <span class="xs-title">Recent project</span> -->
                        <em>Our</em> Products
                    </h2>
                </div>
                <!-- <div class="recent-folio-menu xs-mb-50">
                    <ul class="work-folio-menu">
                        <li class="active filter" data-filter=".all">All</li>
                        <li class="filter" data-filter=".category1">Gardening</li>
                        <li class="filter" data-filter=".category2">Fall cleanup</li>
                        <li class="filter" data-filter=".category3">Watering</li>
                        <li class="filter" data-filter=".category4">Video</li>
                    </ul>

                </div> -->
            </div>
        </div><!-- row end-->

        <div class="xs-portfolio-grid grid">
            <div class="xs-portfolio-grid-item category1 grid-item all">
                <a href="#popup_1" class="xs-single-portfolio-item xs-image-popup" data-effect="mfp-zoom-in">
                    <img src="{{asset('assets/images/our-project/project_1.jpg')}}" alt="">
                    <div class="single-project-content">
                        <div class="xs-image-popup-icon">
                            <i class="icon icon-plus"></i>
                        </div>
                        <h3 class="xs-single-title">Planting</h3>
                        <p>
                            Together also created. Meat winged seas waters herb saw he. Second female void.
                        </p>
                    </div>
                </a><!-- .xs-single-portfolio-item END -->
                <div id="popup_1" class="container xs-gallery-popup-item mfp-hide">
                    <div class="row">
                        <div class="col-lg-5 xs-padding-0">
                            <div class="xs-popup-img">
                                <img src="{{asset('assets/images/our-project/project_1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="xs-popup-content">
                                <h2 class="hidden-title">Project info</h2>
                                <h3>Garden Caring</h3>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="xs-popup-left-content">
                                            <li>
                                                <i class="icon icon-calendar-full"></i>
                                                <label>Project date</label>
                                                <span>22 jan 2018</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-tags"></i>
                                                <label>Category</label>
                                                <span>Garden care, Garden</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-user2"></i>
                                                <label>Client</label>
                                                <span>Mr. Jordan, Newyork</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-invest"></i>
                                                <label>Project value</label>
                                                <span>$ 500</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-map-marker2"></i>
                                                <label>Location</label>
                                                <span>76/A, Green lawn,
                                                    Newyork City
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="xs-popup-right-content">
                                            <p>
                                                Darkness dominion dominion her body creature appear make replenish.
                                                Bring shall him waters saw creepeth creepeth land divided.
                                            </p>
                                            <blockquote>
                                                “Each which life god all living form fruitful their fowl shed a stars he
                                                left”
                                            </blockquote>
                                            <p>
                                                Fowl she'd a stars he let. Creepeth deep sixth you is signs creature.
                                                Earth divide great whales.
                                            </p>
                                            <a href="#" class="xs-btn">PROJECT LINK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .xs-portfolio-grid-item END -->

            <div class="xs-portfolio-grid-item category2 grid-item all">
                <a href="#popup_2" class="xs-single-portfolio-item xs-image-popup" data-effect="mfp-zoom-in">
                    <img src="{{asset('assets/images/our-project/project_3.jpg')}}" alt="">
                    <div class="single-project-content">
                        <div class="xs-image-popup-icon">
                            <i class="icon icon-plus"></i>
                        </div>
                        <h3 class="xs-single-title">Planting</h3>
                        <p>
                            Together also created. Meat winged seas waters herb saw he. Second female void.
                        </p>
                    </div>
                </a><!-- .xs-single-portfolio-item END -->
                <div id="popup_2" class="container xs-gallery-popup-item mfp-hide">
                    <div class="row">
                        <div class="col-lg-5 xs-padding-0">
                            <div class="xs-popup-img">
                                <img src="{{asset('assets/images/our-project/project_1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="xs-popup-content">
                                <h2 class="hidden-title">Project info</h2>
                                <h3>Garden Caring</h3>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="xs-popup-left-content">
                                            <li>
                                                <i class="icon icon-calendar-full"></i>
                                                <label>Project date</label>
                                                <span>22 jan 2018</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-tags"></i>
                                                <label>Category</label>
                                                <span>Garden care, Garden</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-user2"></i>
                                                <label>Client</label>
                                                <span>Mr. Jordan, Newyork</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-invest"></i>
                                                <label>Project value</label>
                                                <span>$ 500</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-map-marker2"></i>
                                                <label>Location</label>
                                                <span>76/A, Green lawn,
                                                    Newyork City
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="xs-popup-right-content">
                                            <p>
                                                Darkness dominion dominion her body creature appear make replenish.
                                                Bring shall him waters saw creepeth creepeth land divided.
                                            </p>
                                            <blockquote>
                                                “Each which life god all living form fruitful their fowl shed a stars he
                                                left”
                                            </blockquote>
                                            <p>
                                                Fowl she'd a stars he let. Creepeth deep sixth you is signs creature.
                                                Earth divide great whales.
                                            </p>
                                            <a href="#" class="xs-btn">PROJECT LINK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .xs-portfolio-grid-item END -->
            <div class="xs-portfolio-grid-item category3 grid-item all">
                <a href="#popup_3" class="xs-single-portfolio-item xs-image-popup" data-effect="mfp-zoom-in">
                    <img src="{{asset('assets/images/our-project/project_2.jpg')}}" alt="">
                    <div class="single-project-content">
                        <div class="xs-image-popup-icon">
                            <i class="icon icon-plus"></i>
                        </div>
                        <h3 class="xs-single-title">Planting</h3>
                        <p>
                            Together also created. Meat winged seas waters herb saw he. Second female void.
                        </p>
                    </div>
                </a><!-- .xs-single-portfolio-item END -->
                <div id="popup_3" class="container xs-gallery-popup-item mfp-hide">
                    <div class="row">
                        <div class="col-lg-5 xs-padding-0">
                            <div class="xs-popup-img">
                                <img src="{{asset('assets/images/our-project/project_2.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="xs-popup-content">
                                <h2 class="hidden-title">Project info</h2>
                                <h3>Garden Caring</h3>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="xs-popup-left-content">
                                            <li>
                                                <i class="icon icon-calendar-full"></i>
                                                <label>Project date</label>
                                                <span>22 jan 2018</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-tags"></i>
                                                <label>Category</label>
                                                <span>Garden care, Garden</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-user2"></i>
                                                <label>Client</label>
                                                <span>Mr. Jordan, Newyork</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-invest"></i>
                                                <label>Project value</label>
                                                <span>$ 500</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-map-marker2"></i>
                                                <label>Location</label>
                                                <span>76/A, Green lawn,
                                                    Newyork City
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="xs-popup-right-content">
                                            <p>
                                                Darkness dominion dominion her body creature appear make replenish.
                                                Bring shall him waters saw creepeth creepeth land divided.
                                            </p>
                                            <blockquote>
                                                “Each which life god all living form fruitful their fowl shed a stars he
                                                left”
                                            </blockquote>
                                            <p>
                                                Fowl she'd a stars he let. Creepeth deep sixth you is signs creature.
                                                Earth divide great whales.
                                            </p>
                                            <a href="#" class="xs-btn">PROJECT LINK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .xs-portfolio-grid-item END -->
            <div class="xs-portfolio-grid-item category4 grid-item all">
                <a href="#popup_4" class="xs-single-portfolio-item xs-image-popup" data-effect="mfp-zoom-in">
                    <img src="{{asset('assets/images/our-project/project_4.jpg')}}" alt="">
                    <div class="single-project-content">
                        <div class="xs-image-popup-icon">
                            <i class="icon icon-plus"></i>
                        </div>
                        <h3 class="xs-single-title">Planting</h3>
                        <p>
                            Together also created. Meat winged seas waters herb saw he. Second female void.
                        </p>
                    </div>
                </a><!-- .xs-single-portfolio-item END -->
                <div id="popup_4" class="container xs-gallery-popup-item mfp-hide">
                    <div class="row">
                        <div class="col-lg-5 xs-padding-0">
                            <div class="xs-popup-img">
                                <img src="{{asset('assets/images/our-project/project_1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="xs-popup-content">
                                <h2 class="hidden-title">Project info</h2>
                                <h3>Garden Caring</h3>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <ul class="xs-popup-left-content">
                                            <li>
                                                <i class="icon icon-calendar-full"></i>
                                                <label>Project date</label>
                                                <span>22 jan 2018</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-tags"></i>
                                                <label>Category</label>
                                                <span>Garden care, Garden</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-user2"></i>
                                                <label>Client</label>
                                                <span>Mr. Jordan, Newyork</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-invest"></i>
                                                <label>Project value</label>
                                                <span>$ 500</span>
                                            </li>
                                            <li>
                                                <i class="icon icon-map-marker2"></i>
                                                <label>Location</label>
                                                <span>76/A, Green lawn,
                                                    Newyork City
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="xs-popup-right-content">
                                            <p>
                                                Darkness dominion dominion her body creature appear make replenish.
                                                Bring shall him waters saw creepeth creepeth land divided.
                                            </p>
                                            <blockquote>
                                                “Each which life god all living form fruitful their fowl shed a stars he
                                                left”
                                            </blockquote>
                                            <p>
                                                Fowl she'd a stars he let. Creepeth deep sixth you is signs creature.
                                                Earth divide great whales.
                                            </p>
                                            <a href="#" class="xs-btn">PROJECT LINK</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .xs-portfolio-grid-item END -->

        </div>


        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="load-more-btn">
                    <a href="" class="xs-btn xs-v2-btn">More View</a>
                </div>
            </div>
        </div> -->
        <!-- row end-->
    </div><!-- .container end -->
</section><!-- End our project section -->

<!-- start faq and client logo section -->
<!-- End faq and client logo section -->


<!-- start testmonial section -->
<!-- End tips and tricks section -->


<!-- header team-1 section -->
<section class="team-v1-sec v2 section-padding section-bg-v2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 align-self-center">
                <div class="single-team-content">
                    <h2 class="column-title column-title2">Meet <br/>our team</h2>
                    <p>
                    Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consec  
                    adipisci velit, sed quia non numquam eius modi 
                    tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </p>
                    <a href="#" class="xs-btn">CONTACT US</a>
                </div>
            </div><!-- .col end -->
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-team-item">
                            <img src="{{asset('assets/images/team/team_5.jpg')}}" alt="">
                            <div class="single-team-cont">
                                <h3>Mr. Jonson</h3>
                                <p>Neque porro quiquam est, qui dolor ipsum.</p>
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-team-item">
                            <img src="{{asset('assets/images/team/team_6.jpg')}}" alt="">
                            <div class="single-team-cont">
                                <h3>Mr. Jonson</h3>
                                <p>Neque porro quiquam est, qui dolor ipsum.</p>
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-team-item">
                            <img src="{{asset('assets/images/team/team_7.jpg')}}" alt="">
                            <div class="single-team-cont">
                                <h3>Mr. Jonson</h3>
                                <p>Neque porro quiquam est, qui dolor ipsum.</p>
                                <div class="team-social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- End team-1 section -->


<!-- start pricing plan section -->


<!-- End pricing plan section -->

<!-- start map section -->
<div class="map-sec">
    <div class="xs-maps-wraper">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0840806781634!2d106.77074681409859!3d-6.2526519954741495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f102508fe5ab%3A0x85fe0c1d0a91f664!2sJl.%20Bendi%20Besar%20No.186%2C%20RT.2%2FRW.10%2C%20Kby.%20Lama%20Utara%2C%20Kec.%20Kby.%20Lama%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012240!5e0!3m2!1sid!2sid!4v1633178575007!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection