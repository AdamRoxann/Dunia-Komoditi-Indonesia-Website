@extends('layouts.app')

@section('content')
<section class="banner-inner-sec" style="background-image:url({{asset('assets/images/coconut_sugar_block.PNG')}})">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Coconut Sugar Block</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Home  / </a> Coconut Sugar Block</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->
<!--  service inner section -->
<section class="service-inner-sec single-service-sec section-padding">
    <div class="container">
        <div class="row">
             
            <div class="col-lg-12 col-md-8">
                <div class="main-single-service-content">
                    <div class="single-service-post-content">
                        <h2 class="column-title column-title2"><span>Coconut</span> Sugar Block</h2>
                        
                        <div class="row" style="position: relative;" >
                            <div class="col-6">
                                <img src="{{asset('assets/images/coconut_sugar_choice.PNG')}}"style="float: left;"  alt="">
                            </div>
                            <div class="col-6">
                                <img src="{{asset('assets/images/coconut_sugar_block.PNG')}}" alt="">
                            </div>
                        <p>
                                Upon seas which, gathering fifth over own dry deep abundantly it second fifth fifth bearing brought days second dry, every also land fowl, after living face life he. Given. Second second unto tree, abundantly whose open midst good whose Male replenish face one, the can't all one.
                        </p>
                        <p>
                            athering under stars moving was there Darkness, have morning you're. To saw great seed, divide that fifth created, fourth whales said brought seas. Which spirit light kind and, fowl evening give moving over.
                        </p>
                    </div>

                    <div class="row key-benifits-item xs-mb-60">
                        <div class="col-lg-6">
                            <div class="key-benifits-content">
                                <h3 class="xs-post-title"><span class="light-text">Kye</span> Benifits of the service</h3>
                                <ul>
                                    <li><i class="fa fa-caret-right"></i>Firmament you'll their you given night.</li>
                                    <li><i class="fa fa-caret-right"></i>Their days hath made grass kind fourth.</li>
                                    <li><i class="fa fa-caret-right"></i>Deep it may first bring fowl brought..</li>
                                    <li><i class="fa fa-caret-right"></i>Male which bearing In called them subdue moved. </li>
                                    <li><i class="fa fa-caret-right"></i>Life and signs don't yielding days saying. </li>
                                </ul>
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="key-benifits-img">
                                <img src="{{asset('assets/images/services/single-post-img-2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- col end-->
           
        </div><!-- row end-->
    </div><!-- .container end -->
</section>
@endsection