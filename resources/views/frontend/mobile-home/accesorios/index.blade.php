@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-accesorios.webp') }}" class="s-img-switch" alt="Módulos Naymo">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <div class="subtitle">MÓDULOS NAYMO</div>
                        <h1 class="title">Accesorios</h1>
                        <div class="banner-columns"></div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-padd margin-lg-135t margin-xs-50t margin-lg-135b margin-sm-100b">
        <div class="row-fluid no-padd">
            <div class="vc_column_container col-sm-6 no-padd">
                <div class="padd-right-only-lg">
                    <div class="heading left dark no-padd-top">
                        <div class="content align-left">
                            {!! $accesorios->descripcio !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_column_container col-sm-6 margin-xs-50t no-padd">
                <div class="no-padd-inner">
                    <div class="wpb_single_image wpb_content_element margin-bottom">
                        <figure>
                            <div class="vc_single_image-wrapper vc_box_border_grey">
                                <picture>
                                    @php 
                                        $senseExtencio = substr($accesorios->imatge1, 0, strrpos($accesorios->imatge1, '.'));
                                    @endphp
                                    <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                    <img src='{{ asset("/storage/$accesorios->imatge1") }}' alt="Módulos Naymo" />
                                </picture>
                            </div>
                        </figure>
                    </div>

                    @if( $accesorios->imatge2 ) 
                        <div class="wpb_single_image wpb_content_element margin-bottom">
                            <figure>
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <picture>
                                        @php 
                                            $senseExtencio = substr($accesorios->imatge1, 0, strrpos($accesorios->imatge1, '.'));
                                        @endphp
                                        <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                        <img src='{{ asset("/storage/$accesorios->imatge1") }}' alt="Módulos Naymo" />
                                    </picture>
                                </div>
                            </figure>
                        </div>
                    @endif
                    @if( $accesorios->imatge3 ) 
                        <div class="wpb_single_image wpb_content_element margin-bottom">
                            <figure>
                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                    <picture>
                                        @php 
                                            $senseExtencio = substr($accesorios->imatge1, 0, strrpos($accesorios->imatge1, '.'));
                                        @endphp
                                        <source srcset='{{ asset("/storage/$senseExtencio") }}.webp' type="image/webp">
                                        <img src='{{ asset("/storage/$accesorios->imatge1") }}' alt="Módulos Naymo" />
                                    </picture>
                                </div>
                            </figure>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->

    
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@endsection