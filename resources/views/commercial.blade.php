@extends('layouts.app')

@section('content')

    @include('partials.commercial-header')

    <!-- text section start-->
    <section class="section text-section no-padding-top text-section--style-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-section__heading">Sponsor</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-4 col-xl-7 offset-xl-5">
                    <h3 class="text-section__title">We delivering Optimally.</h3>
                    <p>The cornerstone of FTA media, we have established strong relationships in this area having transacted more than $100 million USD in sales revenues.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- text section end-->

    @include('partials.partners')

    <section class="section storie-details">
        <div class="container">
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-12 text-center">
                    <h2 class="text-section__heading__sm">Broadcast Partnerships</h2>
                </div>
            </div>

            <div class="row" style="margin-bottom: 20px;">
                <div class="col-lg-4">
                    CLI
                </div>
                <div class="col-lg-8 text-left">
                    <p class="no-margin-bottom">The pre-eminent distributor of sports programming to FTA in Africa for a decade.  OSMi worked closely with Cfi on its sporting products delivered to the continent – going from guaranteeing its broadcast in Nigeria, to underwriting its UEFA Champions League acquisitions across the continent.</p>                
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-lg-4">
                    BON
                </div>
                <div class="col-lg-8 text-left">
                    <p class="no-margin-bottom">OSMi’s partnership with BON saw unprecedented coverage of FIFA World Cups, AFCON, and EPL across Nigeria, with OSMi managing the acquisition, marketing and production of content across the partner networks</p>                
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-lg-4">
                    AUB
                </div>
                <div class="col-lg-8 text-left">
                    <p class="no-margin-bottom">Currently seeking to replicate its success in Nigeria across the continent with the AUB
                    </p>                
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-lg-4">
                    CBU
                </div>
                <div class="col-lg-8 text-left">
                    <p class="no-margin-bottom">Successfully exploited major sporting events and news programming through a partnership with the national broadcasters of the region.

                    </p>                
                </div>
            </div>
        </div>
    </section>

    
    <!-- text section start-->
    <section class="section text-section no-padding-top text-section--style-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-section__heading__sm">Federations and Clubs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>We have acted and act for federations and football clubs, advising on commercial partnerships, strategic planning, and development, and have a team of professionals with experience in Africa and in Diaspora communities throughout the world.  
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- text section end-->

    <!-- about-us start-->
    <section class="section about-us no-padding-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-xl-4">
                    <div class="img-box">
                        <div class="img-box__img"><img class="img--bg" src="img/about_2.png" alt="img"/></div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-xl-4">
                    <div class="img-box">
                        <div class="img-box__img"><img class="img--bg" src="img/about_2.png" alt="img"/></div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-xl-4">
                    <div class="img-box">
                        <div class="img-box__img"><img class="img--bg" src="img/about_2.png" alt="img"/></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
@endsection