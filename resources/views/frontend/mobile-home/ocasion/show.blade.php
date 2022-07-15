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
            <div class="col-sm-12 col-lg-10 margin-lg-65t margin-sm-50t">
                <div class="team-wrapper circle no-figure">
                    <div class="trans_figures enable_anima">
                    </div>
                    <div class="team-outer modulos">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <picture>
                                        @php 
                                            $senseExtencio = substr($ocasion->imatge1, 0, strrpos($ocasion->imatge1, '.'));
                                        @endphp
                                        <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                        <img src='{{ asset("/storage/$ocasion->imatge1") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                    </picture>
                                </div>
                                @if( $ocasion->imatge2 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge2, 0, strrpos($ocasion->imatge2, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge2") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge3 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge3, 0, strrpos($ocasion->imatge3, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge3") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge4 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge4, 0, strrpos($ocasion->imatge4, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge4") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge5 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge5, 0, strrpos($ocasion->imatge5, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge5") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge6 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge6, 0, strrpos($ocasion->imatge6, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge6") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge7 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge7, 0, strrpos($ocasion->imatge7, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge7") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge8 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge8, 0, strrpos($ocasion->imatge8, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge8") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge9 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge9, 0, strrpos($ocasion->imatge9, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge9") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge10 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge10, 0, strrpos($ocasion->imatge10, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge10") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge11 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge11, 0, strrpos($ocasion->imatge11, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge11") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge12 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge12, 0, strrpos($ocasion->imatge12, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge12") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge13 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge13, 0, strrpos($ocasion->imatge13, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge13") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge14 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge14, 0, strrpos($ocasion->imatge14, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge14") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge15 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge15, 0, strrpos($ocasion->imatge15, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge15") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge16 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge16, 0, strrpos($ocasion->imatge16, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge16") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge17 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge17, 0, strrpos($ocasion->imatge17, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge17") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge18 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge18, 0, strrpos($ocasion->imatge18, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge18") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge19 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge19, 0, strrpos($ocasion->imatge19, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge19") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $ocasion->imatge20 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($ocasion->imatge20, 0, strrpos($ocasion->imatge20, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$ocasion->imatge20") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" height="100%" />
                                        </picture>
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
            <div class="padd-only-xs col-sm-12 col-lg-2 margin-lg-50t margin-xs-50t">
                <div class="heading left dark">
                    <div class="content">
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
            <div class="col-sm-12 align-justify">
                {!! $ocasion->descripcio !!}
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@endsection