@extends('layouts.app')

@section('content')

    @include('partials.events-header')

    <section class="section events-inner"><img class="events-inner__bg" src="img/events_inner-bg.png" alt="img"/>
        <div class="container">
            <div class="row offset-30">
                <div class="col-xl-10 offset-xl-1">
                    <div class="upcoming-item">
                        <div class="upcoming-item__date"><span>30</span><span>Oct, 19</span></div>
                        <div class="upcoming-item__body">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-xl-4">
                                    <div class="upcoming-item__img"><img class="img--bg" src="img/event_4.jpg" alt="img"/></div>
                                </div>
                                <div class="col-lg-7 col-xl-8">
                                    <div class="upcoming-item__description">
                                        <h6 class="upcoming-item__title"><a href="event-details.html">The Culture of India. Rebirth</a></h6>
                                        <p>Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch.</p>
                                        <div class="upcoming-item__details">
                                            <p>
                                                <svg class="icon">
                                                    <use xlink:href="#clock"></use>
                                                </svg> <strong>September 30,</strong> 10:00 AM - <strong>October 31,</strong> 18:00 PM
                                            </p>
                                            <p>
                                                <svg class="icon">
                                                    <use xlink:href="#placeholder"></use>
                                                </svg> <strong>Dark Spurt,</strong> San Francisco, CA 94528, USA
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- pagination start-->
                    <ul class="pagination">
                        <li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
                        </li>
                        <li class="pagination__item"><span>1</span></li>
                        <li class="pagination__item pagination__item--active"><span>2</span></li>
                        <li class="pagination__item"><span>3</span></li>
                        <li class="pagination__item"><span>4</span></li>
                        <li class="pagination__item"><span>5</span></li>
                        <li class="pagination__item pagination__item--disabled">...</li>
                        <li class="pagination__item"><span>12</span></li>
                        <li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <!-- pagination end-->
                </div>
            </div>
        </div>
    </section>
    <!-- events inner end-->
    
@endsection