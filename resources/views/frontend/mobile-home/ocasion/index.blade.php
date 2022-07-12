@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> 
                    <img src="{{ asset('frontend/img/mobil-home-ocasion.webp') }}" class="s-img-switch" alt="Módulos Naymo">
                    <div class="content">
                        <div class="prague-svg-animation-text"></div>
                        <div class="subtitle">MÓDULOS NAYMO</div>
                        <h1 class="title">Mobil Home Ocasión</h1>
                        <div class="banner-columns"></div>
                    </div>
                    <div class="top-banner-cursor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid no-padd margin-lg-100t margin-lg-145b margin-sm-0t margin-sm-50b">
        <div class="row-fluid margin-lg-50t margin-sm-100t">
            <div class="col-sm-12">
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
    <!--/MAIN BODY-->
@endsection