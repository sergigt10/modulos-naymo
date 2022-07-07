@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-gama-media.jpg') }}" class="s-img-switch" alt="Módulos Naymo">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <div class="subtitle">MÓDULOS NAYMO</div>
                        <h1 class="title">Mobil Home gama media</h1>
                        <div class="banner-columns"></div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-padd margin-lg-70b margin-xs-50b">
        <div class="row-fluid margin-lg-60t margin-sm-70t no-padd">
            <div class="col-sm-12 col-lg-9 margin-lg-65t margin-sm-0t">
                <div class="team-wrapper circle no-figure">
                    <div class="trans_figures enable_anima">
                    </div>
                    <div class="team-outer">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src='{{ asset("/storage/$gamaMedia->imatge1") }}' alt="Módulos Naymo">
                                </div>
                                @if( $gamaMedia->imatge2 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge2") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge3 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge3") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge4 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge4") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge5 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge5") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge6 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge6") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge7 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge7") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge8 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge8") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge9 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge9") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge10 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge10") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge11 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge11") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge12 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge12") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge13 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge13") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge14 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge14") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge15 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge15") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge16 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge16") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge17 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge17") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge18 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge18") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge19 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge19") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge20 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge20") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padd-only-xs col-sm-12 col-lg-3 margin-lg-0t margin-xs-100t">
                <div class="heading left dark">
                    <div class="content">
                        <br>
                        <ul>
                            <li>
                                <h5>Marca:</h5>
                                Módulos Naymo
                            </li>
                            <li>
                                <h5>Modelo:</h5>
                                Gama media
                            </li>
                            <li>
                                <h5>Medidas:</h5>
                                A medida
                            </li>
                            <li>
                                <h5>Núm. habitaciones:</h5>
                                2/3
                            </li>
                            <li>
                                <h5>Núm. plazas:</h5>
                                2 / 4 / 6 / 8
                            </li>
                            <li>
                                <h5>Año:</h5>
                                Nuevo
                            </li>
                            <li>
                                <h5>Precio:</h5>
                                Consultar a pie de página
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                {!! $gamaMedia->descripcio !!}
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@endsection