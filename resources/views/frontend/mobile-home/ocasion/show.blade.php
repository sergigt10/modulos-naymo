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
                        <h1 class="title">Mobil Home {{ mb_strtolower($ocasion->titol, 'UTF-8') }}</h1>
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
                                    <img src='{{ asset("/storage/$ocasion->imatge1") }}' alt="Módulos Naymo">
                                    <!-- <img src='{{ asset("frontend/img/empresa.jpg") }}' alt="Módulos Naymo"> -->
                                </div>
                                @if( $ocasion->imatge2 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge2") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge3 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge3") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge4 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge4") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge5 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge5") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge6 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge6") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge7 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge7") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge8 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge8") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge9 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge9") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge10 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge10") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge11 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge11") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge12 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge12") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge13 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge13") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge14 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge14") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge15 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge15") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge16 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge16") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge17 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge17") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge18 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge18") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge19 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge19") }}' alt="Módulos Naymo">
                                    </div>
                                @endif
                                @if( $ocasion->imatge20 ) 
                                    <div class="item">
                                        <img src='{{ asset("/storage/$ocasion->imatge20") }}' alt="Módulos Naymo">
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
                                {{ $ocasion->marca }}
                            </li>
                            <li>
                                <h5>Modelo:</h5>
                                {{ $ocasion->modelo }}
                            </li>
                            <li>
                                <h5>Medidas:</h5>
                                {{ $ocasion->medida }}
                            </li>
                            <li>
                                <h5>Núm. habitaciones:</h5>
                                {{ $ocasion->num_hab }}
                            </li>
                            <li>
                                <h5>Núm. plazas:</h5>
                                {{ $ocasion->num_plazas }}
                            </li>
                            <li>
                                <h5>Año:</h5>
                                {{ $ocasion->ano }}
                            </li>
                            <li>
                                <h5>Precio:</h5>
                                {{ $ocasion->precio }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                {!! $ocasion->descripcio !!}
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@endsection