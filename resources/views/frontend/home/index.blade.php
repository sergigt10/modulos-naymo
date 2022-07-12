@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row">
            <div class="col-xs-12 padd-only-xs">
                <div class="container-fluid top-banner no-padd  big fullheight light">
                    <span class="overlay"></span>
                    <img src="{{ asset('frontend/img/slide.webp') }}" class="s-img-switch" alt="Módulos Naymo">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <h1 class="title">Fabricantes de casas modulares</h1>
                        <a href="{{ route('frontend.mobile-home.ocasion.index') }}" class="a-btn creative">
                            <span class="a-btn-line"></span>VER MÓDULOS
                        </a>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-padd">
        <div class="row-fluid  margin-lg-55t margin-sm-20t">
            <div class="  col-sm-12 no-padd margin-xs-40t">
                <div class="padd-only-xs">
                    <div class="heading left dark">
                        <div class="subtitle">Exposición de mobile home de segunda mano</div>
                        <h2 class="title">MOBILE HOME <span style="color: #FF9D36;">OCASIÓN</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid margin-lg-50t margin-sm-30t">
            <div class="col-sm-12">
                <div class="vc_column-inner ">
                    <div>
                        <div class="row prague_grid prague_count_col4 prague_gap_col15 js-load-more-block no-footer-content prague-load-wrapper" data-columns="prague_count_col4" data-gap="prague_gap_col15">
                            @foreach ($ocasiones as $ocasion)
                                <div class="portfolio-item-wrapp portfolio-item-paralax js-filter-simple-block p_f_d7a8462 p_f_ddba60a p_f_aebfe46 ">
                                    <div class="portfolio-item">
                                        <div class="project-grid-wrapper">
                                            <a class="project-grid-item-img-link" href="{{ route('frontend.mobile-home.ocasion.show', ['ocasion' => $ocasion->id]) }}" target="_self">
                                                <div class="project-grid-item-img">
                                                    <picture>
                                                        @php 
                                                            $senseExtencio = substr($ocasion->imatge1, 0, strrpos($ocasion->imatge1, '.'));
                                                        @endphp
                                                        <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                                        <img src='{{ asset("/storage/$ocasion->imatge1") }}' class="wp-post-image" alt="Módulos Naymo" />
                                                    </picture>
                                                </div>
                                            </a>
                                            <div class="project-grid-item-content">
                                                <h4 class="project-grid-item-title"><a href="{{ route('frontend.mobile-home.ocasion.show', ['ocasion' => $ocasion->id]) }}" target="_self">{{ $ocasion->titol }}</a></h4>
                                                <div class="project-grid-item-category">{{ $ocasion->precio }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->

    <div class="container">
        <div class="row-fluid">
            <div class="column col-xs-12 col-sm-12 col-md-12 col-lg-12 padd-only-xs">
                <div class="padd-only">
                    <div class="heading left dark">
                        {!! $textes->descripcio !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-padd">
        <div class="row-fluid margin-md-0t">
            <div class="col-sm-12 col-lg-offset-0 col-lg-6 col-md-offset-0 col-md-6 col-sm-offset-0 col-xs-12 padd-only-xs">
                <div class="heading left dark">
                    <div class="subtitle ">CONTACTO</div>
                    <h2 class="title"><span style="color: #FF9D36;">Contáctenos</span> ahora y pídenos un presupuesto</h2>
                    <div class="content">
                        <p>Si necesitas información sobre nuestros Módulos o tienes alguna duda, puedes llamarnos o dejarnos un mensaje. Le contestaremos a la mayor brevedad.
                        </p>
                    </div>
                </div>
                <div class="row-fluid vc_custom_1488483852815">
                    <div class="col-sm-4 no-padd">
                        <div class="column-inner">
                            <div class="adddress-block  ">
                                <div class="address-block-outer">
                                    <span class="separator"></span>
                                    <h4 class="address-title">TELÉFONOS</h4>
                                    <p>
                                        <a href="tel:+34972115941">972 115 941</a><br/>
                                        <a href="tel:+34610408325">610 408 325</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 no-padd">
                        <div class="adddress-block  ">
                            <div class="address-block-outer">
                                <span class="separator"></span>
                                <h4 class="address-title">EMAIL</h4>
                                <p><a href="mailto:prague@info.com">modulosnaymo@gmail.com</a><br /></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="adddress-block">
                            <div class="address-block-outer">
                                <span class="separator"></span>
                                <h4 class="address-title">LOCALIZACIÓN</h4>
                                <p><a href="https://goo.gl/maps/jj4hAY3kA66aczA87" target="_blank">Google Maps</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-offset-0 col-lg-6 col-md-offset-0 col-md-6 col-sm-offset-0 col-xs-12 padd-only-xs">
                <br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11816.394110071746!2d2.1674146!3d42.233708!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd0903893237a0e9!2sM%C3%B2duls%20Naymo!5e0!3m2!1ses!2ses!4v1655896198640!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        </div>
    </div>

    <div class="container no-padd">
        <div class="row-fluid  margin-lg-55t margin-sm-20t">
            <div class="  col-sm-12 no-padd margin-xs-40t">
                <div class="padd-only-xs">
                        <div class="heading  left dark">
                            <div class="subtitle ">Instagram</div>
                            <h2 class="title">SIGUENOS! <span style="color: #FF9D36;">MÓDULOS NAYMO</span></h2>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/1893f74808c85036b169f6fa3bd6b2d1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
    <br><br><br><br>
    <!--/MAIN BODY-->
@endsection