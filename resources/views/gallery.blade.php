@extends('layouts.app')

@section('content')
<section class="banner-inner-sec" style="background-image:url({{asset('assets/images/our-project/banner.jpg')}})">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Products Gallery</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Home  / </a> <a href="index.html">Pages /</a>  Products Gallery</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->

<!-- header team section -->
<section class="gallery-sec recent-work-sec our-project-sec section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recent-folio-menu xs-mb-50">
                    <ul class="work-folio-menu">
                        <li class="active filter"  data-filter=".all">All</li>
                        <li class="filter" data-filter=".category1">Green Beans Coffee</li>
                        <li class="filter" data-filter=".category2">Coconut Sugar</li>
                        <!-- <li class="filter" data-filter=".category3">Watering</li>
                        <li class="filter" data-filter=".category4">Video</li> -->
                    </ul>

                </div>
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
                <a href="#popup_2" class="xs-single-portfolio-item xs-image-popup"  data-effect="mfp-zoom-in">
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
  
                <a href="#popup_3" class="xs-single-portfolio-item xs-image-popup"  data-effect="mfp-zoom-in">
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
    
        <div class="row">
            <div class="col-lg-12">
                <div class="load-more-btn">
                    <a href="" class="xs-btn">More View</a>
                </div>
            </div>
        </div><!-- row end-->
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