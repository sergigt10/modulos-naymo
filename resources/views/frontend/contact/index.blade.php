@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-contacto.webp') }}" class="s-img-switch" alt="banner image">
                    <div class="content">
                        <div class="prague-svg-animation-text">
                        </div>
                        <div class="subtitle">Módulos Naymo</div>
                        <h1 class="title">Contacto</h1>
                        <div class="banner-columns">
                            <div class="banner-col-item divider">
                                <span class="title">Teléfono</span>
                                <span style="color: #fff"><a href="tel:+34972115941">+34 972 115 941</a></span>
                            </div>
                            <div class="banner-col-item divider">
                                <span class="title">Correo electrónico</span>
                                <span style="color: #fff"><a href="mailto:modulosnaymo@gmail.com">modulosnaymo@gmail.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid no-padd">
        <div class="contact_map row-fluid no-padd" style="position:relative; box-sizing: border-box;">
            <div class="col-sm-12 no-padd">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11816.394110071746!2d2.1674146!3d42.233708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd0903893237a0e9!2sM%C3%B2duls%20Naymo!5e0!3m2!1ses!2ses!4v1657528671723!5m2!1ses!2ses" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection