@extends('layout.app')
@section('body')
<section id='home' class='round-border background-pastel'>
    <div>
        <img class='round-border' src='../img/background/white-furniture-set-cropped.jpg' alt='white-furniture-set'>
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
<section id='product'>
    <h2>Our Products</h2>
    <div class='product-list'>
        <div>
            <img src='../img/portfolio/other/chair-without-hand.jpg' alt='chair-without-hand'>
        </div>
        <div>
            <img src='../img/portfolio/other/chair-without-hand.jpg' alt='chair-without-hand'>
        </div>
        <div>
            <img src='../img/portfolio/other/chair-without-hand.jpg' alt='chair-without-hand'>
        </div>
    </div>
</section>
@endsection
