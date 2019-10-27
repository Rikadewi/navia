@extends('layout.app', ['inverted' => 'true'])
@section('body')
<section id='product-page' class='section body-wrapper'>
    <div class='title'>
        <h2>Our Products</h2>
        <a href='/how'>
            <span class='round-button fill-button background-red'>
                Find Out How &nbsp;<i class="fa fa-long-arrow-alt-right"></i>
            </span>
        </a>
    </div>
    
    <div class='product-list'>
        @for ($i = 1; $i <= 41; $i++)
            <div class='round-border'><div style='background-image: url("../img/portfolio/edited/{{ $i }}.png");' class='background-product'></div></div>
        @endfor
    </div>
</section>
@endsection