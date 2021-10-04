@extends('layouts.app')

@section('content')
<section class="banner-inner-sec" style="background-image:url({{asset('assets/images/blog/banner.jpg')}})">
	<div class="banner-table">
		<div class="banner-table-cell">
			<div class="container">
				<div class="banner-inner-content">
					<h2 class="banner-inner-title">Blogs</h2>
					<ul class="xs-breadcumb">
						<li><a href="index.html"> Home  / </a> blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--breadcumb end here-->

<!-- start blog section -->
<section class="xs-blog-sec section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-content-item">
                    <div class="single-blog-item">
                        <div class="blog-post-img">
                            <a href="blog-single.html">
                                <img  src="{{asset('assets/images/blog/blog_1.jpg')}}" alt="">
                            </a>
                            <div class="blog-date-info">
                                <label>12</label>
                                <span>Feb</span>
                            </div>
                        </div><!-- blog-post-img end -->
                        <div class="blog-meta">
                            <ul>
                                <li class="author">
                                    <a href="blog-single.html">
                                        <img src="{{asset('assets/images/blog/author.png')}}" alt="">
                                        by <span>Jon Miller</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-calendar-full"></i>
                                        06 jan, 2018   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-tags"></i>
                                       Triming/Blog  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-comment"></i>
                                       23  
                                    </a>
                                </li>
                            </ul>
                        </div><!-- blog-meta end -->
                        <h3 class="xs-blog-title">
                            <a href="blog-single.html">
                                 World in a grain of sand and heaven in a wild flower hold  infinity in the palm hour
                            </a>
                        </h3>
                        <p>
                            After moved created likeness, air two fowl multiply under unto fill every so kind bearing, fill. 
                            Multiply good which fowl bring given living moved good fruit saying make every sixth. 
                        </p>
                        <div class="read-more-btn">
                            <a href="blog-single.html" class="xs-btn sm-btn">Read More</a>
                        </div>
                    </div><!-- single-blog-item end -->

                    <div class="single-blog-item">
                        <blockquote>
                            <p>
                                Waters made fruitful morning of they're form. Darkness, may forth divided male under green divide multiply living moved firmament be. Fourth you're,
                                sixth set beginning. Place there they're morning yielding living face Image. 
                            </p>
                            <div class="blog-meta">
                                <ul>
                                    <li class="author">
                                        <a href="#">
                                            by <span>Jon Miller</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="icon icon-calendar-full"></i>
                                            06 jan, 2018   
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="icon icon-tags"></i>
                                        Triming/Blog  
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="icon icon-comment"></i>
                                        23  
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- blog-meta end -->
                        </blockquote>
                    </div><!-- single-blog-item end -->

                    <div class="single-blog-item">
                        <div class="blog-post-img">
                            <a href="blog-single.html">
                                <img  src="{{asset('assets/images/blog/blog_2.jpg')}}" alt="">
                            </a>
                            <div class="blog-date-info">
                                <label>12</label>
                                <span>Feb</span>
                            </div>
                        </div><!-- blog-post-img end -->
                        <div class="blog-meta">
                            <ul>
                                <li class="author">
                                    <a href="blog-single.html">
                                        <img src="{{asset('assets/images/blog/author.png')}}" alt="">
                                        by <span>Jon Miller</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-calendar-full"></i>
                                        06 jan, 2018   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-tags"></i>
                                       Triming/Blog  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-comment"></i>
                                       23  
                                    </a>
                                </li>
                            </ul>
                        </div><!-- blog-meta end -->
                        <h3 class="xs-blog-title">
                            <a href="blog-single.html">
                                The lesson I have thoroughly learnt and wish to pass on to others 
                                is to know the enduring happiness
                            </a>
                        </h3>
                        <p>
                            After moved created likeness, air two fowl multiply under unto fill every so kind bearing, fill. 
                            Multiply good which fowl bring given living moved good fruit saying make every sixth. 
                        </p>
                        <div class="read-more-btn">
                            <a href="blog-single.html" class="xs-btn sm-btn">Read More</a>
                        </div>
                    </div><!-- single-blog-item end -->

                    <div class="single-blog-item">
                        <div class="blog-post-img">
                            <a href="blog-single.html">
                                <img  src="{{asset('assets/images/blog/blog_3.jpg')}}" alt="">
                            </a>
                            <div class="blog-date-info">
                                <label>12</label>
                                <span>Feb</span>
                            </div>
                        </div><!-- blog-post-img end -->
                        <div class="blog-meta">
                            <ul>
                                <li class="author">
                                    <a href="#">
                                        <img src="{{asset('assets/images/blog/author.png')}}" alt="">
                                        by <span>Jon Miller</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-calendar-full"></i>
                                        06 jan, 2018   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-tags"></i>
                                       Triming/Blog  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                       <i class="icon icon-comment"></i>
                                       23  
                                    </a>
                                </li>
                            </ul>
                        </div><!-- blog-meta end -->
                        <h3 class="xs-blog-title">
                            <a href="blog-single.html">
                            World in a grain of sand and heaven in a wild flower hold  infinity in the palm hour
                            </a>
                        </h3>
                        <p>
                            After moved created likeness, air two fowl multiply under unto fill every so kind bearing, fill. 
                            Multiply good which fowl bring given living moved good fruit saying make every sixth. 
                        </p>
                        <div class="read-more-btn">
                            <a href="blog-single.html" class="xs-btn sm-btn">Read More</a>
                        </div>
                    </div><!-- single-blog-item end -->

                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a  href="#"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li class="page-item active"><a href="#">1</a></li>
                        <li class="page-item">
                            <a href="#">2</a>
                        </li>
                        <li class="page-item"><a href="#">3</a></li>
                        <li class="page-item disabled"><a href="#">4</a></li>
                        <li class="page-item">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul><!-- pagination end -->
                </div>
            </div><!-- .col end -->
            <div class="col-lg-4">
                <div class="sidebar-widgets">
                    <div class="widget widget-search">
                        <form action="#" class="xs-serach" method="post">
                            <div class="input-group">
                                <input type="search" name="search" placeholder="Type Keyword" autocomplete="off">
                                <button class="search-btn"><i class="icon icon-search"></i></button>
                            </div>
                        </form>
                    </div><!-- .widget end -->
                    <div class="widget">
                        <h4 class="widget-title">
                             <span class="light-text">Trending</span> posts
                        </h4>
                        <div class="widget-posts">
                            <div class="widget-post media">
                                <img src="{{asset('assets/images/sidebar/popular-post-img-1.jpg')}}" class="d-flex" alt="popular post image" draggable="false">
                                <div class="media-body">
                                    <span class="post-meta-date">
                                        <a href="#"> Posted by Miller at 22 jan</a>
                                    </span>
                                    <h5 class="entry-title">
                                        <a href="blog-single.html">After moved created for bit likeness </a>
                                    </h5>
                                </div>
                            </div><!-- .widget-post END -->
                            <div class="widget-post media">
                                <img src="{{asset('assets/images/sidebar/popular-post-img-2.jpg')}}" class="d-flex" alt="popular post image" draggable="false">
                                <div class="media-body">
                                    <span class="post-meta-date">
                                        <a href="#"> Posted by Miller at 22 jan</a>
                                    </span>
                                    <h5 class="entry-title">
                                        <a href="blog-single.html">Creat In appear was, the you lesser.</a>
                                    </h5>
                                </div>
                            </div><!-- .widget-post END -->
                            <div class="widget-post media">
                                <img src="{{asset('assets/images/sidebar/popular-post-img-3.jpg')}}" class="d-flex" alt="popular post image" draggable="false">
                                <div class="media-body">
                                    <span class="post-meta-date">
                                        <a href="#"> Posted by Miller at 22 jan</a>
                                    </span>
                                    <h5 class="entry-title">
                                        <a href="blog-single.html">Fowl bring given living moved good </a>
                                    </h5>
                                </div>
                            </div><!-- .widget-post END -->
                            <div class="widget-post media">
                                <img src="{{asset('assets/images/sidebar/popular-post-img-4.jpg')}}" class="d-flex" alt="popular post image" draggable="false">
                                <div class="media-body">
                                    <span class="post-meta-date">
                                        <a href="#"> Posted by Miller at 22 jan</a>
                                    </span>
                                    <h5 class="entry-title">
                                        <a href="blog-single.html">Moved created for bit likeness flow</a>
                                    </h5>
                                </div>
                            </div><!-- .widget-post END -->
                        </div><!-- .widget-posts END -->
                    </div><!-- .widget end -->
                    <div class="widget widget-categories">
                       <h4 class="widget-title"><span class="light-text">Blog</span> categories</h4>
                        <ul class="list-group">
                            <li>
                                <a href="#">Urban gardening</a>
                                <span>(06)</span>
                            </li>
                            <li>
                                <a href="#">Urban gardening</a>
                                <span>(05)</span>
                            </li>
                            <li>
                                <a href="#">Urban gardening</a>
                                <span>(13)</span>
                            </li>
                            <li>
                                <a href="#">Urban gardening</a>
                                <span>(15)</span>
                            </li>
                            <li>
                                <a href="#">Urban gardening</a>
                                <span>(05)</span>
                            </li>
                     
                        </ul>
                    </div><!-- .widget end -->

                    <div class="widget widget-tag">
                       <h4 class="widget-title"><span class="light-text">Populer</span> tags</h4>
                        <div class="tag-lists">
                            <a href="#">Garden</a>
                            <a href="#">Gardening</a>
                            <a href="#">Planting</a>
                            <a href="#">Real gardening</a>
                            <a href="#">Grass trimming</a>
                            <a href="#">Snow remove</a>
                            <a href="#">Garden care</a>
                            <a href="#">Lawn</a>
                        </div>
                    </div><!-- .widget end -->
                </div><!-- .sidebar-widgets end -->
            </div><!-- .col end -->


        </div><!-- .row end -->
    </div><!-- .container end -->
</section>
@endsection 