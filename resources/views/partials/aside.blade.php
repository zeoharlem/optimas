<!-- aside dropdown start-->

@if(Auth::guest())

<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg></span>
    
    <div class="aside-dropdown__item">
        <!-- aside menu start-->
        <ul class="aside-menu">
        <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Homepage</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">About Us</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Commercial</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Production</a></li>
            <li class="aside-menu__item aside-menu__item--has-child"><a class="aside-menu__link" href="#">Media</a>
                <!-- sub menu start-->
                <ul class="aside-menu__sub-list">
                    <li><a href="{{ url('/') }}"><span>Rightshoulders</span></a></li>
                    <li><a href="{{ url('/') }}"><span>Broadcasters</span></a></li>
                    <li><a href="{{ url('/') }}"><span>Afrosports</span></a></li>
                </ul>
                <!-- sub menu end-->
            </li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">News</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Events</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Contact Us</a></li>
        </ul>
        <!-- aside menu end-->
        <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@osmi.org">support@osmi.org</a></div>
        <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
        <ul class="aside-socials">
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="aside-dropdown__item"><a class="button button--squared" href="#"><span>Members</span></a></div>
    </div>
</div>
<!-- aside dropdown end-->

@elseif(Auth::check() && Auth::user()->roles->id == 1)

<div class="aside-dropdown">
    <div class="aside-dropdown__inner"><span class="aside-dropdown__close">
        <svg class="icon">
            <use xlink:href="#close"></use>
        </svg></span>
    
    <div class="aside-dropdown__item">
        <!-- aside menu start-->
        <ul class="aside-menu">
            
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Production</a></li>
            <li class="aside-menu__item"><a class="aside-menu__link" href="{{ url('/') }}">Contact Us</a></li>
        </ul>
        <!-- aside menu end-->
        <div class="aside-inner"><span class="aside-inner__title">Email</span><a class="aside-inner__link" href="mailto:support@osmi.org">support@osmi.org</a></div>
        <div class="aside-inner"><span class="aside-inner__title">Phone numbers</span><a class="aside-inner__link" href="tel:+180012345678">+ 1800 - 123 456 78</a><a class="aside-inner__link" href="tel:+18009756511">+ 1800 - 975 65 11</a></div>
        <ul class="aside-socials">
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link aside-socials__link--active" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li class="aside-socials__item"><a class="aside-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="aside-dropdown__item"><a class="button button--squared" href="#"><span>Members</span></a></div>
    </div>
</div>
<!-- aside dropdown end-->

@endif