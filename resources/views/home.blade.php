@extends('layout.app')
@section('body')
<section id='home' class='round-border background-pastel'>
    <div>
        <img class='round-border-big' src='../img/background/white-furniture-set-cropped.jpg' alt='white-furniture-set'>
    </div>    
    <div class="home-content">
        <div>
            <h1 class='dark-blue'>Furniture Manufacturer</h1>
            <h3 class='dark-purple'>
                Get Indonesian’s wooden furniture with the best craftsmen at affordable prices
            </h3>
            <a>
                <span class='round-button fill-button background-red'>
                    Find Out How &nbsp;<i class="fa fa-long-arrow-alt-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>
<section id='product' class='section'>
    <div class="title">
        <h2>Our Products</h2>
        <a>
            <span class='round-button'>
                See All Products
            </span>
        </a>
    </div>
    <div class='product-list'>
        <div class='round-border'>
            <img class='shadow round-border' src='../img/portfolio/other/knitted-brown.jpg' alt='chair-without-hand'>
        </div>
        <div class='round-border'>
            <img class='shadow round-border' src='../img/portfolio/other/knitted-brown.jpg' alt='chair-without-hand'>
        </div>
        <div class='round-border'>
            <img class='shadow round-border' src='../img/portfolio/other/knitted-brown.jpg' alt='chair-without-hand'>
        </div>
    </div>
</section>
<!-- <section>
    <div class="title">
        <h2>How To</h2>
        <a>
            <span class='round-button'>
                See All Products
            </span>
        </a>
    </div>
</section> -->
@endsection
