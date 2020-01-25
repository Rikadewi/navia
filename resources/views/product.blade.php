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
    <div class='product-container'>
        <div class='product-page-mobile'>
            <div class='product-filter-mobile'>
                <a onclick='filterCategorize("type")'>
                    <span id='type-button' class='active round-button fill-button'>
                        Type
                    </span>
                </a>
                <a onclick='filterCategorize("collection")'>
                    <span id='collection-button' class='passive-right passive round-button fill-button'>
                        Collection
                    </span>
                </a>
            </div>
            <div id='type-scroll' class="product-filter-scroll dark-purple">
                <a id='active-scroll' class='first-type' onclick='filterScrollSelection("chair", event)'>Chair</a>
                <a onclick='filterScrollSelection("cabinet", event)'>Cabinet</a>
                <a onclick='filterScrollSelection("coffee-table", event)'>Coffee Table</a>
                <a onclick='filterScrollSelection("console-table", event)'>Console Table</a>
                <a onclick='filterScrollSelection("credenza", event)'>Credenza</a>
                <a onclick='filterScrollSelection("dining-table", event)'>Dining Table</a>
                <a onclick='filterScrollSelection("divan", event)'>Divan</a>
                <a onclick='filterScrollSelection("rack", event)'>Rack</a>
                <a onclick='filterScrollSelection("side-table", event)'>Side Table</a>
                <a onclick='filterScrollSelection("wardrobe", event)'>Wardrobe</a>
            </div>
            <div id='collection-scroll' class="non-active-categorize product-filter-scroll dark-purple">
                <a class='first-collection' onclick='filterScrollSelection("assen", event)'>Assen</a>
                <a onclick='filterScrollSelection("athena", event)'>Athena</a>
                <a onclick='filterScrollSelection("choris", event)'>Choris</a>
                <a onclick='filterScrollSelection("long-island", event)'>Long Island</a>
                <a onclick='filterScrollSelection("outdoor", event)'>Outdoor</a>
                <a onclick='filterScrollSelection("sheesam", event)'>Sheesam</a>
            </div>
        </div>
        <div class='product-filter dark-purple'>
            <h3 class='dark-blue'><b>Type</b></h3>
            <a id='active' onclick='filterSelection("chair", event)'>Chair</a>
            <a onclick='filterSelection("cabinet", event)'>Cabinet</a>
            <a onclick='filterSelection("coffee-table", event)'>Coffee Table</a>
            <a onclick='filterSelection("console-table", event)'>Console Table</a>
            <a onclick='filterSelection("credenza", event)'>Credenza</a>
            <a onclick='filterSelection("dining-table", event)'>Dining Table</a>
            <a onclick='filterSelection("divan", event)'>Divan</a>
            <a onclick='filterSelection("rack", event)'>Rack</a>
            <a onclick='filterSelection("side-table", event)'>Side Table</a>
            <a onclick='filterSelection("wardrobe", event)'>Wardrobe</a>
            <h3 class='dark-blue'><b>Collection</b></h3>
            <a onclick='filterSelection("assen", event)'>Assen</a>
            <a onclick='filterSelection("athena", event)'>Athena</a>
            <a onclick='filterSelection("choris", event)'>Choris</a>
            <a onclick='filterSelection("long-island", event)'>Long Island</a>
            <a onclick='filterSelection("outdoor", event)'>Outdoor</a>
            <a onclick='filterSelection("sheesam", event)'>Sheesam</a>
        </div>
        <div id='product-list' class='product-list'>
        @for ($i = 1; $i <= 47; $i++)
            <div class='round-border'><div style='background-image: url("../img/portfolio/chair/{{ $i }}.png");' class='background-product'></div></div>
        @endfor
        </div>    
    </div>
    
</section>
@endsection