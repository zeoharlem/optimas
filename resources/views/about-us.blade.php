@extends('layouts.app')

@section('content')

    @include('partials.abouts-header')

    <!-- about-us start-->
    <section class="section about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-5">
                    <div class="img-box"><img class="img--layout" src="img/about_layout-reverse.png" alt="img"/>
                        <div class="img-box__img"><img class="img--bg" src="img/about_2.png" alt="img"/></div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="heading heading--primary"><span class="heading__pre-title">About Us</span>
                        <h2 class="heading__title"><span>Idea</span> <span>Driven</span></h2>
                    </div>
                    <p><strong>Established in 1999, Optima Sports Management International (OSMi) is a leading sports marketing agency operating in Africa and the Diaspora.</strong></p>
                    <p>OSMi has been a pioneer within the sector, and brought to life areas of sports marketing that had previously been untouched.
                    OSMi‘s  reputation has been built through its partnerships with many of the world’s biggest rights owners, and its alliances with broadcasters across the continent of Africa and the Caribbean.  </p>
                    <p>At the core of OSMi’s success has been its strong relationships, founded on commonality and trust</p>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us end-->
    
@endsection