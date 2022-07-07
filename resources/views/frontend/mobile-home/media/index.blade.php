@extends('frontend.layouts.app')

@section('content')
    <!--MAIN BODY-->
    <div class="container-fluid no-padd">
        <div class="row-fluid no-padd">
            <div class="col-sm-12 no-padd">
                <div class="container-fluid top-banner no-padd big enable_column light no-marg-bottom vindow-height">
                    <span class="overlay"></span> <img src="{{ asset('frontend/img/empresa.jpg') }}" class="s-img-switch"
                        alt="banner image">
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
        <div class="row-fluid  margin-lg-60t margin-sm-70t no-padd">
            <div class="col-sm-12 col-lg-6 margin-lg-65t margin-sm-0t">
                <div class="team-wrapper circle no-figure">
                    <div class="trans_figures enable_anima">
                    </div>
                    <div class="team-outer">
                        
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('frontend/img/empresa.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('frontend/img/empresa.jpg') }}" alt="">
        </div>
        <div class="item">
            <img src="{{ asset('frontend/img/empresa.jpg') }}" alt="">
        </div>
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
            <div class="padd-only-xs col-sm-12 col-lg-6 margin-lg-0t margin-xs-100t">
                <div class="heading  left dark">
                    <h2 class="title">Empresa de Mobile home <span style="color: #FF9D36; font-size: 40px; line-height: 44px; font-weight: 700;">nuevos y de ocasión</span></h2>
                    <div class="content" style="text-align: justify">
                        <p>Nuestra empresa se encuentra en N-260 Km121'5, Campdevànol (Girona).</p>
                        <p><b>Empresa dedicada a la compra y venta de mobile home nuevos y de ocasión y casas prefabricadas</b> para toda España. Hacemos presupuestos del coste de los mobile home tanto para particulares como a profesionales.</p>
                        <p>Solo tiene que enviar un email especificando el modelo de mobile home que le interesa, la cantidad y el nombre de la localidad donde iría entregado.</p>
                        <p>En breve le contestaremos con un detallado presupuesto de su demanda. Asimismo en nuestra web encontrara los precios de los distintos modelos de mobile home de los que disponemos en cada momento, tanto de modelos nuevos como de ocasión. A estos precios habría que sumarles el coste del transporte para obtener una orientación del precio final.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/MAIN BODY-->
@endsection

@section('scripts')
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
@endsection