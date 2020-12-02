@extends('layouts.app')

@section('content')

@include('partials.contact-header')

<!-- section start-->
<section class="section contacts">
    <div class="container">
        <div class="row offset-margin">
            <div class="col-sm-6 col-lg-3">
                <div class="icon-item">
                    <div class="icon-item__img"><img class="img--layout" src="img/icon_1-1.png" alt="img"/>
                        <svg class="icon icon-item__icon icon--red">
                            <use xlink:href="#location-pin"></use>
                        </svg>
                    </div>
                    <div class="icon-item__text">
                        <p>Adress: Elliott Ave, Parkville VIC 3052, Melbourne Canada</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="icon-item">
                    <div class="icon-item__img"><img class="img--layout" src="img/icon_2-2.png" alt="img"/>
                        <svg class="icon icon-item__icon icon--orange">
                            <use xlink:href="#phone-call"></use>
                        </svg>
                    </div>
                    <div class="icon-item__text">
                        <p>Phone: <a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a> <a class="icon-item__link" href="tel:+31859644725">+ 31 85 964 47 25</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="icon-item">
                    <div class="icon-item__img"><img class="img--layout" src="img/icon_3-3.png" alt="img"/>
                        <svg class="icon icon-item__icon icon--green">
                            <use xlink:href="#envelope"></use>
                        </svg>
                    </div>
                    <div class="icon-item__text">
                        <p>Email: <a class="icon-item__link" href="mailto:support@osmi.org">support@osmi.org</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="icon-item">
                    <div class="icon-item__img"><img class="img--layout" src="img/icon_4-4.png" alt="img"/>
                        <svg class="icon icon-item__icon icon--blue">
                            <use xlink:href="#share"></use>
                        </svg>
                    </div>
                    <div class="icon-item__text">
                        <!-- socials start-->
                        <ul class="socials">
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li class="socials__item"><a class="socials__link socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="socials__item"><a class="socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                        <!-- socials end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end-->

    @include('partials.partners')
    
@endsection