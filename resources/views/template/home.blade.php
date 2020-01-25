@extends('layout.app')
@section('body')
<section id='home' class='round-border background-pastel section body-wrapper'>
    <div class='background-home'>
        <img class='round-border-big' src='../img/background/white-furniture-set-cropped.jpg' alt='white-furniture-set'>
    </div>    
    <div class="home-content">
        <div>
            <h1 class='dark-blue'>@yield('title')</h1>
            <h3 class='dark-purple'>
                @yield('sub-title')
            </h3>
            <a href='/contact'>
                <span class='round-button fill-button background-red'>
                    Start Free Sample &nbsp;<i class="fa fa-long-arrow-alt-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>
<section id='about' class='section'>
    <div>
        <img src='../img/icon/custom-made.png' alt='custom-made'>
        <h4>Custom Made</h4>
    </div>
    <div>
        <img src='../img/icon/best-price.png' alt='best-price'>
        <h4>Best Price</h4>
    </div>
    <div>
        <img src='../img/icon/fully-natural.png' alt='fully-natural'>
        <h4>Fully Natural</h4>
    </div>
    <div>
        <img src='../img/icon/quality-control.png' alt='quality-control'>
        <h4>Quality Control</h4>
    </div>   
</section>
<section id='product' class='section section-top'>
    <div class="title">
        <h2>Our Products</h2>
        <a href='/product'>
            <span class='round-button round-button-blue'>
                See All Products
            </span>
        </a>
    </div>
    <div class='product-list'>
        <div class='round-border shadow'><div style='background-image: url("../img/portfolio/edited/10.png");' class='background-product'></div></div>
        <div class='round-border shadow'><div style='background-image: url("../img/portfolio/edited/30.png");' class='background-product'></div></div>
        <div class='round-border shadow'><div style='background-image: url("../img/portfolio/edited/41.png");' class='background-product'></div></div>
    </div>
</section>
<section id='client' class='section-top'>
    <div class='background-pastel round-border-big center'>
        <div>
            <h3 class='dark-purple'>We are experienced in exporting furniture to </h3>
            <div class='client-count'>
                <h1 class='red'>5+</h1>&nbsp;<h2 class='dark-blue'>countries</h2>
            </div>
            <div class='client-count'>
                <h1 class='red'>3000+</h1>&nbsp;<h2 class='dark-blue'>furnitures</h2>
            </div>
        </div>
    </div>
    <div>
        <h4 class='dark-purple'>
            We help our business partners to fulfill their need of quality and affordable 
            supply furnitures to manufacture.
        </h4>
        <div class='client-list'>
            <img src='../img/client/astana.png' alt='astana'>
            <img src='../img/client/ikons.png' alt='ikons'>
            <img src='../img/client/kit-m.png' alt='kit-m'>
            <img src='../img/client/le-beton.png' alt='le-beton'>
            <img src='../img/client/maisons-du-monde.png' alt='maisons-du-monde'>
            <img src='../img/client/pro-living-asia.jpg' alt='pro-living-asia'>
            <img src='../img/client/ravate.png' alt='ravate'>
            <img src='../img/client/rsi.png' alt='rsi'>
            <img src='../img/client/tower-international.png' alt='tower-international'>
        </div>
    </div>
</section>
@endsection
