@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-gama-media.webp') }}" class="s-img-switch" alt="Módulos Naymo Mobil Home">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <div class="subtitle">MÓDULOS NAYMO</div>
                        <h1 class="title">Mobile Home Gama Media</h1>
                        <div class="banner-columns"></div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-padd margin-lg-70b margin-xs-50b">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 col-lg-10 margin-lg-65t margin-sm-65t">
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
                                            $senseExtencio = substr($gamaMedia->imatge1, 0, strrpos($gamaMedia->imatge1, '.'));
                                        @endphp
                                        <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                        <img src='{{ asset("/storage/$gamaMedia->imatge1") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                    </picture>
                                </div>
                                @if( $gamaMedia->imatge2 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge2, 0, strrpos($gamaMedia->imatge2, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge2") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge3 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge3, 0, strrpos($gamaMedia->imatge3, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge3") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge4 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge4, 0, strrpos($gamaMedia->imatge4, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge4") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge5 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge5, 0, strrpos($gamaMedia->imatge5, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge5") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge6 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge6, 0, strrpos($gamaMedia->imatge6, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge6") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge7 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge7, 0, strrpos($gamaMedia->imatge7, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge7") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge8 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge8, 0, strrpos($gamaMedia->imatge8, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge8") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge9 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge9, 0, strrpos($gamaMedia->imatge9, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge9") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge10 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge10, 0, strrpos($gamaMedia->imatge10, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge10") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge11 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge11, 0, strrpos($gamaMedia->imatge11, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge11") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge12 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge12, 0, strrpos($gamaMedia->imatge12, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge12") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge13 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge13, 0, strrpos($gamaMedia->imatge13, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge13") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge14 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge14, 0, strrpos($gamaMedia->imatge14, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge14") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge15 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge15, 0, strrpos($gamaMedia->imatge15, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge15") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge16 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge16, 0, strrpos($gamaMedia->imatge16, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge16") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge17 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge17, 0, strrpos($gamaMedia->imatge17, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge17") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge18 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge18, 0, strrpos($gamaMedia->imatge18, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge18") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge19 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge19, 0, strrpos($gamaMedia->imatge19, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge19") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
                                        </picture>
                                    </div>
                                @endif
                                @if( $gamaMedia->imatge20 ) 
                                    <div class="item">
                                        <picture>
                                            @php 
                                                $senseExtencio = substr($gamaMedia->imatge20, 0, strrpos($gamaMedia->imatge20, '.'));
                                            @endphp
                                            <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                            <img src='{{ asset("/storage/$gamaMedia->imatge20") }}' class="wp-post-image" alt="Módulos Naymo Mobil Home" />
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
            <div class="padd-only-xs col-sm-12 col-lg-2 margin-lg-50t margin-xs-0t">
                <div class="heading left dark">
                    <div class="content">
                        <ul>
                            <li>
                                <h5>Marca:</h5>
                                {{ $gamaMedia->marca }}
                            </li>
                            <li>
                                <h5>Modelo:</h5>
                                {{ $gamaMedia->modelo }}
                            </li>
                            <li>
                                <h5>Medidas:</h5>
                                {{ $gamaMedia->medida }}
                            </li>
                            <li>
                                <h5>Núm. habitaciones:</h5>
                                {{ $gamaMedia->num_hab }}
                            </li>
                            <li>
                                <h5>Núm. plazas:</h5>
                                {{ $gamaMedia->num_plazas }}
                            </li>
                            <li>
                                <h5>Año:</h5>
                                {{ $gamaMedia->ano }}
                            </li>
                            <li>
                                <h5>Precio:</h5>
                                {{ $gamaMedia->precio }}
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