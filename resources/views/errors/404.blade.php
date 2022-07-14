@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-ocasion.webp') }}" class="s-img-switch" alt="Módulos Naymo Mobil Home">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <div class="subtitle">MÓDULOS NAYMO</div>
                        <h1 class="title">Error 404</h1>
                        <div class="banner-columns"></div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid no-padd margin-lg-50t margin-lg-145b margin-sm-0t margin-sm-50b">
        <div class="row-fluid margin-lg-50t margin-sm-100t">
            <div class="col-sm-12">
                <div>
                    <h3 style="text-align: center">Página no disponible</h3>
                    <p><a href="{{ route('frontend.home.index') }}"><h3 style="text-align: center">Volver al inicio</h3></a></p>
                </div>
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection