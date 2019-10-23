@if ($inverted == 'true')
<footer class='background-pastel inverted'>
@else 
<footer class='background-pastel'>
@endif
    <div class=footer-wrapper>
        <div class='footer-left'>
            <div class='footer-title'>
                <a href='/'><img class='footer-logo' src='../img/logo/logo-horizontal.png' alt='navia-logo'></a>
            </div>
            <div>
                <h4 class='dark-blue'><b>Reach Us On</b></h4>
                <a href="mailto:hello@naviafurniture.com" target="_blank">
                    <h4><i class="fa fa-envelope"></i> hello@naviafurniture.com</h4>
                </a>
                <a href="tel:+6282211511517" target="_blank">
                    <h4><i class="fab fa-whatsapp"></i> +6289506217771</h4>
                </a>
            </div>
            <div>
                <h4 class='dark-blue'><b>We Accept</b></h4>
                <div class='footer-accept'>
                    <img src='../img/logo/cc-mastercard-brands.png' alt='cc-mastercard-brands'>
                    <img src='../img/logo/cc-visa-brands.png' alt='cc-visa-brands'>
                    <img src='../img/logo/cc-paypal-brands.png' alt='cc-paypal-brands'>
                    <img src='../img/logo/western-union.png' alt='western-union'>
                </div>
            </div>
            <div class='footer-certified'>
                <h4 class='dark-blue'><b>Certified By</b></h4>
                <a><img src='../img/logo/legal-wood.png' alt='indonesian-legal-wood'></a>
            </div>
    
        </div>
        <div class='footer-link'>
            <div class='footer-title'>
                <h4 class='dark-blue'><b>Helpful Links</b></h4>
            </div>
            <!-- TODO change this -->
            <a><h4>Home</h4></a>
            <a><h4>About</h4></a>
            <a><h4>Products</h4></a>
            <a><h4>How To</h4></a>
            <a><h4>Find Inspiration</h4></a>
            <a><h4>Contact</h4></a>
        </div>
        <div class='footer-contact'> 
            <div class='footer-title'>
                <h4 class='dark-blue'><b>Contact Us</b></h4>
            </div> 
            <form method="post" action="{{url('contact/send')}}">     
                {{ csrf_field() }} 
                <span class='box-input'>
                    <i class='fa fa-user'></i>
                    <input 
                        type='text' 
                        placeholder='Enter your name'
                        name='name'
                    >
                </span>
                <span class='box-input'>
                    <i class='fa fa-envelope'></i>
                    <input 
                        type='text' 
                        placeholder='Enter your email'
                        name='email'
                        required
                    >
                </span>
                <span class='box-input'>
                    <i class='fa fa-edit'></i>
                    <input 
                        type='text' 
                        placeholder='Leave a message'
                        name='message'
                        required
                    >
                </span>
                <div class='footer-submit'>
                    <button class='round-button' type='submit'>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <h4 class='copy'>
        &copy; Navia, 2019.
    </h4>
</footer>
