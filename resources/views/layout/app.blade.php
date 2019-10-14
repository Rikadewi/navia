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
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,700,800&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

</head>
<body>
    <div class='navbar section bold-font'>
        <img class='navbar-logo' src='../img/logo/logo-horizontal.png' alt='navia-logo'>
        <div class='navbar-link'>
            <a>About</a>
            <a>Products</a>
            <a>Our Partners</a>
            <a>How To</a>
        </div>
        <div class="navbar-right">
            <span class="round-button fill-button-thin background-blue search-input">
                <input 
                    type='text' 
                    placeholder='Find Inspiration'
                >
                <a><i class='fa fa-search'></i></a>
            </span>
        </div>
    </div>
    @yield('body')
    <footer class='section background-pastel'>
        <div>
            <div class='footer-title'>
                <a><img class='footer-logo' src='../img/logo/logo-horizontal.png' alt='navia-logo'></a>
            </div>
            <h4>
                Get Indonesian’s wooden furniture with the best craftsmen at affordable prices
            </h4>
            <br>
            <a href="mailto:hello@naviafurniture.com" target="_blank">
                <h4><i class="fa fa-envelope"></i> hello@naviafurniture.com</h4>
            </a>
            <a href="tel:+6282211511517" target="_blank">
                <h4><i class="fa fa-phone"></i>+6289506217771</h4>
            </a>
        </div>
        <div class='footer-link'>
            <div class='footer-title'>
                <h4 class='dark-blue'><b>Helpful Links</b></h4>
            </div>
            <a><h4>Products</h4></a>
            <a><h4>How To</h4></a>
            <a><h4>Find Inspiration</h4></a>
            <br>
            <div>
                <a href="https://wa.me/+6282211511517" target="_blank">
                    <img src='../img/icon/whatsapp.png' alt='whatsapp'>
                </a>
                <a href="https://wa.me/+6282211511517" target="_blank">
                    <img class='middle-socmed' src='../img/icon/facebook.png' alt='facebook'>
                </a>
                <a href="https://wa.me/+6282211511517" target="_blank">
                    <img src='../img/icon/linkedin.png' alt='linkedin'>
                </a>
            </div>
        </div>
        <div class='footer-contact'> 
            <div class='footer-title'>
                <h4 class='dark-blue'><b>Contact Us</b></h4>
            </div>       
            <span class='box-input'>
                <i class='fa fa-user'></i>
                <input 
                    type='text' 
                    placeholder='Enter your name'
                >
            </span>
            <span class='box-input'>
                <i class='fa fa-envelope'></i>
                <input 
                    type='text' 
                    placeholder='Enter your email'
                >
            </span>
            <span class='box-input'>
                <i class='fa fa-edit'></i>
                <input 
                    type='text' 
                    placeholder='Leave a message'
                >
            </span>
            <br><br>
            <div>
                <span class='round-button'>
                    Submit
                </span>
            </div>
        </div>
    </footer>
</body>
</html>
