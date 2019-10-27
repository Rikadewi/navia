@extends('layout.app', ['iscontact' => 'true'])
@section('body')
<section id='contact-page' class='section contact body-wrapper inverted'>
    <div class='contact-wrapper'>
        <div class='contact-touch'>
            <div class='contact-title'>
                <h2 class='dark-blue'><b>Get in touch</b></h2>
            </div>    
            <a href="mailto:hello@naviafurniture.com" target="_blank" class='box-input'>
                <h4><i class="fa fa-envelope"></i> hello@naviafurniture.com</h4>
            </a>
            <a href="https://wa.me/+6282211511517" target="_blank" class='box-input'>
                <h4><i class="fab fa-whatsapp"></i> +6289506217771</h4>
            </a>
            <a href="https://goo.gl/maps/vjHd71tXSRCx6GD76" target="_blank" class='box-input'>
                <h4><i class="fa fa-map-marker-alt"></i> Jalan Perjuangan No 18, Kebon Jeruk, West Jakarta, Greater Jakarta Area, Indonesia 11530 </h4>
            </a>
        </div>
        <div class='contact-form'> 
            <div class='contact-title'>
                <h2 class='dark-blue'><b>Contact Us</b></h2>
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
                <div class='contact-form-submit'>
                    <button class='round-button round-button-blue  round-button-red' type='submit'>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection