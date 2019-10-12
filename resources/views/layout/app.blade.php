<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navia | Wooden Furniture</title>

    <meta name="description" content="Get Indonesian’s wooden furniture with the best craftsmen at affordable price." data-rdm="true">

    <meta property="og:title" content="Wooden Furniture | Navia">
    <meta property="og:site_name" content="Navia">
    <meta property="og:desription" content="Get Indonesian’s wooden furniture with the best craftsmen at affordable price.">
    <meta property="og:type" content="business">

    <meta property="og:url" content="http://navia-furniture.com">
    <meta property="og:image" content="https://navia-furniture.com/img/logo/logo-white.png">


    <link rel="icon" type="image/ico" href="../img/logo/logo-white.png" />

    <!--Font-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
    <div class='navbar section bold-font'>
        <img class='navbar-logo' src='../img/logo/logo-white.png'>
        <div class='navbar-link'>
            <a>About</a>
            <a>Products</a>
            <a>Pricing</a>
            <a>Our Clients</a>
            <a>How To</a>
        </div>
        <div class="navbar-right">
            <span class="round-button fill-button search-input">
                <input 
                    type='text' 
                    placeholder='Find Inspiration'
                >
                <a><i class='fa fa-search'></i></a>
            </span>
            <a><i class="far fa-envelope"></i></a>
        </div>
    </div>
    @yield('body')
</body>
</html>
