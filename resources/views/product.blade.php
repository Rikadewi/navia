@extends('layout.app', ['inverted' => 'true'])
@section('body')
<section id='product-page' class='section body-wrapper'>
    <div class='title'>
        <h2>Our Products</h2>
        <a href='/how'>
            <span class='round-button fill-button background-red'>
                Customize &nbsp;<i class="fa fa-long-arrow-alt-right"></i>
            </span>
        </a>
    </div>
    
    <div class='product-list'>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/1.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/2.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/3.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/4.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/5.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/6.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/7.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/8.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/9.png");' class='background-product'></div></div>
        <div class='round-border'><div style='background-image: url("../img/portfolio/edited/10.png");' class='background-product'></div></div>
    </div>
</section>
@endsection