@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-gama-alta.jpg') }}" class="s-img-switch" alt="Módulos Naymo">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <div class="subtitle">MÓDULOS NAYMO</div>
                        <h1 class="title">Mobil Home Gama Alta</h1>
                        <div class="banner-columns"></div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-padd margin-lg-70b margin-xs-50b">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 col-lg-10 margin-lg-65t margin-sm-0t">
                <div class="team-wrapper circle no-figure">
                    <div class="trans_figures enable_anima">
                    </div>
                    <div class="team-outer modulos">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src='{{ asset("/storage/$gamaAlta->imatge1") }}' alt="Módulos Naymo">
                                    <!-- <img src='{{ asset("frontend/img/empresa.jpg") }}' alt="Módulos Naymo"> -->
                                </div>
                                @if( $gamaAlta->imatge2 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge2") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge3 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge3") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge4 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge4") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge5 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge5") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge6 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge6") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge7 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge7") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge8 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge8") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge9 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge9") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge10 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge10") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge11 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge11") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge12 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge12") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge13 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge13") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge14 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge14") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge15 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge15") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge16 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge16") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge17 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge17") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge18 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge18") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge19 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge19") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $gamaAlta->imatge20 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$gamaAlta->imatge20") }}' alt="Módulos Naymo">
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
            <div class="padd-only-xs col-sm-12 col-lg-2 margin-lg-0t margin-xs-100t">
                <div class="heading left dark">
                    <div class="content" style="margin-top: 55px;">
                        <br>
                        <ul>
                            <li>
                                <h5>Marca:</h5>
                                {{ $gamaAlta->marca }}
                            </li>
                            <li>
                                <h5>Modelo:</h5>
                                {{ $gamaAlta->modelo }}
                            </li>
                            <li>
                                <h5>Medidas:</h5>
                                {{ $gamaAlta->medida }}
                            </li>
                            <li>
                                <h5>Núm. habitaciones:</h5>
                                {{ $gamaAlta->num_hab }}
                            </li>
                            <li>
                                <h5>Núm. plazas:</h5>
                                {{ $gamaAlta->num_plazas }}
                            </li>
                            <li>
                                <h5>Año:</h5>
                                {{ $gamaAlta->ano }}
                            </li>
                            <li>
                                <h5>Precio:</h5>
                                {{ $gamaAlta->precio }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                {!! $gamaAlta->descripcio !!}
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@endsection