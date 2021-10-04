@extends('layouts.app')

@section('content')
<section class="banner-inner-sec"
        style="background-image:url({{asset('assets/images/green_bean_detail_banner.jpeg')}}); background-position: 65% 35%; background-size: cover;">
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="container">
                    <div class="banner-inner-content">
                        <h2 class="banner-inner-title">Arabica Sidikalang</h2>
                        <ul class="xs-breadcumb">
                            <li><a href="index.html"> Home / </a> Arabica Gayo</li>
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
                            <h2 class="column-title column-title2"><span>Arabica</span> Sidikalang</h2>
                            <div class="row" style="position: relative;">
                                <div class="col-6">
                                    <img src="{{asset('assets/images/arabica_gayo_landscape.jpeg')}}" height="375px"
                                        style="float: left;" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="{{asset('assets/images/arabica_gayo_landscape2.jpeg')}}" alt="">
                                </div>
                                <div class="col-3">
                                    <img class="ml-auto mr-3" src="{{asset('assets/images/arabica_gayo2.JPG')}}"
                                        style="max-height: 375px; float: right;" alt="">
                                </div>
                            </div>
                            <p style="font-size: 16px; text-align: justify;">
                                The Arabica coffee of Aceh Gayo is considered one of the most premium coffee beans in
                                the world. It is harvested from plantations in Central Aceh region. It has a fine aroma
                                and a pretty low bitter taste. Aceh Gayo coffee beans grow in a distinctive type of soil
                                in the highlands, thus it almost impossible to find it in any other place outside its
                                origin. It lies on the altitude of 900 – 1700 above sea level with rainfall rate at
                                around 1,643 – 2,000 mm/year which is considered highly favorable for coffee
                                plantations.
                            </p>
                            <p style="font-size: 16px; text-align: justify;">
                                Gayo Highland is part of the Bukit Barisan (The Ring of Fire) that lies along Sumatera
                                Island, Indonesia. It is located in the central area of Nanggroe Aceh Darussalam
                                Province that covers three regencies: Central Aceh, Bener Meriah and Gayo Lues.

                                Coffee cultivation in Gayo Highland was started in 1924 by the Dutch Colony. Since 1930,
                                coffee has become the center of Gayo economy that contributes around 50-90% of family
                                income. Currently, Gayo Highland is one of the most important areas for Indonesia’s
                                Arabica Coffee. It is the largest Arabica coffee producing region in the country.

                                The total coffee plantations in the area covers around 95,000 hectares owned by about
                                66,000 families of farmers and only less than 10% of the total plantations are
                                controlled by the local government and private sector.

                                The soil, the landscape, and the climate of the area contribute to various rich
                                characters, strong body and complex flavor of the coffee. It is so vary and complex that
                                Gayo Cuppers Team (members are certified of Q Graders and licensed Cuppers) claims that
                                all Arabica Coffee characters in the world, can be tasted in Gayo Arabica Coffee. In
                                other words Gayo Arabica coffee has the rich taste of the world coffees and considered
                                as gourmet coffee. Due to its strong characters, the coffee is often added to a coffee
                                blend to enhance aroma and body to the blend.
                            </p>
                            <p style="font-size: 16px; text-align: justify;">
                                Specialty grade coffee

                                Specialty grade coffee is the ultimate Arabica Gayo Quality With a cupping Score of
                                above 80 in world cupping test competition.A specialty grade coffee is process in such a
                                special way, so as to provide us with the world class coffee quality, flawless beans
                                within < 5% tolerance from the total amount of beans. For example, if you buy Specialty
                                    grade green bean coffee , lets say for about 10kg, So the total defect (Shoddy
                                    ones)should not be more than 5% or around 500g. Almost all the beans should be
                                    without defect. Green beans with a specialty grade would produce perfect coffee
                                    quality with high excellent taste, and aromatic whiff. This is ons of the reason for
                                    Arabica Gayo Green Beans and Robusta Gayo Green Beans to be known as specialty grade
                                    organic green Bean </p>
                        </div>

                        <div class="row key-benifits-item xs-mb-60">
                            <div class="col-lg-6">
                                <div class="key-benifits-content">
                                    <h3 class="xs-post-title"><span class="light-text"></span>
                                            <br>Product
                                            Specifications:</h3>
                                    <!-- <ul>
                                    <li><i class="fa fa-caret-right"></i>Firmament you'll their you given night.</li>
                                    <li><i class="fa fa-caret-right"></i>Their days hath made grass kind fourth.</li>
                                    <li><i class="fa fa-caret-right"></i>Deep it may first bring fowl brought..</li>
                                    <li><i class="fa fa-caret-right"></i>Male which bearing In called them subdue moved. </li>
                                    <li><i class="fa fa-caret-right"></i>Life and signs don't yielding days saying. </li>
                                </ul> -->
                                    <span>
                                        Type: Aceh Gayo grade 1.<br>
                                        Arabica coffee beans.<br>
                                        One of the premium coffee beans in the world.<br>
                                        Harvested from plantations in Central Aceh region.<br>
                                        Fine aroma and pretty low bitter taste.<br>
                                        Grown in the distinctive type of soil in the highlands.<br>
                                        Almost impossible to find in any other places outside its origin.<br>
                                        Famous for its classic balance of earthiness, bold and syrupy flavor.</span>
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="key-benifits-img" style="text-align: center;">
                                    <img src="{{asset('assets/images/arabica_gayo.jpeg')}}" width="250" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- col end-->

            </div><!-- row end-->
        </div><!-- .container end -->
    </section>
@endsection