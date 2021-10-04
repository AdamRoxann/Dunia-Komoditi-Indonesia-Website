@extends('layouts.app')

@section('content')
<section class="banner-inner-sec" style="background-image:url({{asset('assets/images/green_bean_detail_banner.jpeg')}}); background-position: 65% 35%; background-size: cover;">
    <div class="banner-table">
        <div class="banner-table-cell">
            <div class="container">
                <div class="banner-inner-content">
                    <h2 class="banner-inner-title">Arabica Lintong</h2>
                    <ul class="xs-breadcumb">
                        <li><a href="index.html"> Home / </a> Arabica Lintong</li>
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
                        <h2 class="column-title column-title2"><span>Arabica</span> Lintong</h2>
                        <div class="row" style="position: relative;">
                            <div class="col-6">
                                <img src="{{asset('assets/images/arabica_gayo_landscape.jpeg')}}" height="375px" style="float: left;" alt="">
                            </div>
                            <div class="col-3">
                                <img src="{{asset('assets/images/arabica_gayo_landscape2.jpeg')}}" alt="">
                            </div>
                            <div class="col-3">
                                <img class="ml-auto mr-3" src="{{asset('assets/images/arabica_gayo2.JPG')}}" style="max-height: 375px; float: right;" alt="">
                            </div>
                        </div>
                        <p style="font-size: 16px; text-align: justify;">
                            Arabica coffee was first grown on the island of Sumatra in 1888 in the Bukit Barisan mountains near Lake Toba. The location of the largest coffee cultivation in North Sumatra at that time was in Lintong Nihuta District, Humbang Hasundutan Regency.
                        </p>
                        <p style="font-size: 16px; text-align: justify;">
                            Lintong Arabica coffee cultivation areas in Humbang Hasundutan Regency are in Lintong Nihuta District (1400 – 1450 masl), Dolok Sanggul District (1450 – 1600 masl), Paranginan (1400 masl), Pollung (1000 – 1400 masl) and Onan Ganjang ( 1000 – 1400 masl).


                        </p>
                        <p style="font-size: 16px; text-align: justify;">
                            The name Kopi Lintong is taken from the name of the Lintong Nihuta sub-district. Lintong coffee is not the name of a coffee variety but is a trademark in international trade for coffee originating from Humbang Hasundutan, North Sumatra.


                        </p>
                        <p style="font-size: 16px; text-align: justify;">
                            <b>Lintong Coffee Varieties</b><br>

                            Around 1988 a superior local variety was found from Paranginan District, namely the Arabica coffee variety which is often called Sigarar Utang. It was first discovered in Batu Gajah Hamlet, North Paranginan Village, Lintong Nihuta District, which is an endemic Arabica coffee variety from North Sumatra.<br><br>

                            The Sigarar Utang variety is thought to be the result of natural crossbreeding between the Typica (Lasuna) and Catimor varieties.

                            For the Onan Ganjang area, it is a natural cross between the S-795 and Bourbon lines in Lintong (1980). Produce varieties with better consistency (on taste, productivity and resistance to disease).<br><br>

                            “Note: S-795 line. Cross (back cross) Line S-288 and Kent (1940 in India, 1955 to ICCRI Jember)”
                            The Sigarar Utang variety has also become a nationally recognized variety through the Minister of Agriculture Decree No: 205/Kpts/SR.120/4/2005. Sumatran Arabica Lintong Coffee has now been patented through the issuance of Geographical Indication (IG) certificate No. ID G 000000063 from the Indonesian Ministry of Law and Human Rights on February 12, 2018.
                        </p>
                    </div>

                    <div class="row key-benifits-item xs-mb-60">
                        <div class="col-lg-6" style="display: flex;
                        align-items: center;
                        justify-content: center;">
                            <div class="key-benifits-content">
                                <h3 class="xs-post-title"><span class="light-text">Characteristics of </span>Sigarar Utang Varieties:</h3>
                                <ul>
                                    <li><i class="fa fa-caret-right"></i>The growth type is semi-dwarf, short branch segments, lush canopy covering the entire surface of the tree so that the main trunk is not visible from the outside.</li>
                                    <li><i class="fa fa-caret-right"></i>The secondary branches are very active, even the primary branches above the ground form a dangling fan touching.</li>
                                    <li><i class="fa fa-caret-right"></i>Old leaves are dark green, young leaves (flush) are reddish brown. When planted without shade, the leaf edges are wavy and the leaf blades close up. When viewed at a glance, the shape of the long, tapered leaves and wavy leaf edges.</li>
                                    <li><i class="fa fa-caret-right"></i>The young fruit is green while the ripe fruit is bright red, the shape of the fruit is round and elongated.</li>
                                </ul>
                                <!-- <span>
                                    Type: Aceh Gayo grade 1.<br>
                                    Arabica coffee beans.<br>
                                    One of the premium coffee beans in the world.<br>
                                    Harvested from plantations in Central Aceh region.<br>
                                    Fine aroma and pretty low bitter taste.<br>
                                    Grown in the distinctive type of soil in the highlands.<br>
                                    Almost impossible to find in any other places outside its origin.<br>
                                    Famous for its classic balance of earthiness, bold and syrupy flavor.</span> -->
                            </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                            <div class="key-benifits-img" style="text-align: center;">
                                <img src="{{asset('assets/images/arabica_gayo.jpeg')}}" width="250" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row populer-question-item">
                        <div class="col-lg-6">
                            <!-- <h3 class="xs-service-title"><span class="light-text">Maintance</span> tips</h3>
                            <div class="single-services-item">
                                <img src="{{asset('assets/images/services/5.jpg')}}" alt="">
                                <span class="date-info">15 jan 2018</span>
                                <h4 class="xs-post-title"><a href="single-service-v1.html">Urban gardening tips</a>
                                </h4>
                                <p>
                                    Dominion gathering said face evening us had heaven unto he air grass made
                                    first...
                                </p>
                                <a href="" class="readMore">Read more</a>
                            </div> -->
                            <h3 class="xs-post-title"><span class="light-text"></span> <br>Arabica Lintong : </h3>
                            <!-- <ul>
                                    <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Wet processing
                                    </li>
                                    <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Phosphorus
                                    </li>
                                    <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Zinc
                                    </li>
                                    <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Iron</li>
                                    <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp;Copper</li>
                                </ul> -->
                            <span>
                                <b>Wet processing</b><br>

                                The wet milling process (Wet Hulling) is a hybrid coffee method used in many regions of Indonesia, especially Sumatra.<br><br>

                                Lintong coffee processing uses the wet milling method (Wet Hulling) which involves two drying processes.<br><br>

                                After the coffee cherries are picked, the outer skin of the coffee is peeled using a pulping machine and dried in the sun so that the humidity of the coffee reaches 35% – 40%.<br><br>

                                Drying is carried out in the sun with the aim of separating the horn and epidermis from the coffee.<br><br>

                                In the last drying process after the grain is hulled, the coffee is dried by drying in the sun again. So that the final moisture of the coffee reaches 12%-13%<br><br>

                                These coffee beans are called green beans which are ready to be sorted, graded and ready to be exported. The coffee produced is dark opal green with a silvery skin attached to the coffee.
                            </span>
                        </div><!-- col end-->

                        <!-- <div class="col-lg-6">
                            <h3 class="xs-service-title"><span class="light-text">Populer</span> questions</h3>
                            <div class="faq-list-item" id="accordion">
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingOne">
                                        <h4>

                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <span>01</span>
                                                Why you choose our service?
                                            </button>
                                        </h4>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Image darkness also make. Second divide third was fish abundantly.
                                                So, let all
                                                had
                                                set lesser a. Behold, hath void land so a given.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingTwo">
                                        <h4>

                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <span>02</span>
                                                How many tree we will get?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Image darkness also make. Second divide third was fish abundantly.
                                                So, let all
                                                had
                                                set lesser a. Behold, hath void land so a given.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingThree">
                                        <h4>

                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <span>03</span>
                                                Can we get maintanence service?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Image darkness also make. Second divide third was fish abundantly.
                                                So, let all
                                                had
                                                set lesser a. Behold, hath void land so a given.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-single-item">
                                    <div class="card-header" id="headingFour">
                                        <h4>

                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                <span>04</span>
                                                How many cost for this service?
                                            </button>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>
                                                Image darkness also make. Second divide third was fish abundantly.
                                                So, let all
                                                had
                                                set lesser a. Behold, hath void land so a given.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div><!-- col end-->

        </div><!-- row end-->
    </div><!-- .container end -->
</section>
@endsection