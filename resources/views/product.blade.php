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
            <a onclick='filterSelection("side-cabinet", event)'>Side Cabinet</a>
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
        <div id='product-list' class='product-list'></div>    
    </div>
    
</section>
@endsection