<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    {!! SEO::generate() !!}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- SEO -->

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/before-after.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/unit-test.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css?v=3') }}">

    <!-- Estils personalitzats -->
    @yield('styles')

    <link rel="icon" type="image/png" href="{{ asset('frontend/img/favicon.png') }}"/>

    <meta name="theme-color" content="#000">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-35878447-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TXCJSHN');
    </script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <!--PRELOADER-->
    <div class="prague-loader">
        <div class="prague-loader-wrapper">
            <div class="prague-loader-bar">
                MÓDULOS NAYMO
            </div>
        </div>
    </div>
    <!--/PRELOADER-->
    <!--HEADER-->
    <header class="prague-header simple sticky-menu sticky-mobile-menu light ">
        <!--LOGO-->
        <div class="prague-logo">
            <a href="{{ route('frontend.home.index') }}">
                <picture>
                    <source srcset="{{ asset('frontend/img/logo.webp') }}" type="image/webp">
                    <img src="{{ asset('frontend/img/logo.png') }}" class="image_logo" alt="Módulos Naymo Mobil Home">
                </picture>
            </a>
        </div>
        <!--/LOGO-->
        <div class="prague-header-wrapper">
            <!--NAVIGATION-->
            <div class="prague-navigation">
                <div class="pargue-navigation-wrapper">
                    <div class="prague-navigation-inner">
                        <nav>
                            <ul class="main-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom {{ (request()->is('/')) ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('frontend.home.index') }}">INICIO</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom {{ (request()->is('mobil-home-*')) ? 'current-menu-ancestor' : '' }} menu-item-has-children">
                                    <a href="{{ route('frontend.mobile-home.media.index') }}">MOBIL HOME NUEVO</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('frontend.mobile-home.media.index') }}">Gama media</a>
                                        </li>
                                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                            <a href="{{ route('frontend.mobile-home.alta.index') }}">Gama alta</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom {{ (request()->is('mobile-home-*')) ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('frontend.mobile-home.ocasion.index') }}">MOBILE HOME OCASIÓN</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page {{ (request()->is('accesorios-mobile-home')) ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('frontend.mobile-home.accesorios.index') }}">ACCESORIOS</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page {{ (request()->is('transporte-mobile-home')) ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('frontend.mobile-home.transporte.index') }}">TRANSPORTE</a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom {{ (request()->is('casas-prefabricadas')) ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('frontend.about.index') }}">EMPRESA</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page {{ (request()->is('contacto-mobile-home')) ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('frontend.contact.index') }}">CONTACTO</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--/NAVIGATION-->
            <!-- mobile icon -->
            <div class="prague-nav-menu-icon">
                <a href="#">
                    <i></i>
                </a>
            </div>
            <!-- /mobile icon -->
        </div>
    </header>
    <!--/HEADER-->

    @yield('content')

    <!-- START FOOTER -->
    <footer class="prague-footer default">
        <div class="footer-content-outer">
            <div class="footer-top-content">
                <div class="prague-footer-main-block col-md-3 col-sm-12">
                    <div class="prague-logo">
                        <a href="{ route('frontend.home.index') }}">
                            <picture>
                                <source srcset="{{ asset('frontend/img/logo.webp') }}" type="image/webp">
                                <img src="{{ asset('frontend/img/logo.png') }}" class="attachment-full size-full" alt="Módulos Naymo Mobil Home">
                            </picture>
                        </a>
                    </div>
                    <div class="footer-main-content">
                        <p>
                            Con nuestra amplia experiencia en la fabricación de módulos, tenemos un extenso catálogo de modelos de mobil home. Todos ellos con diferentes dimensiones, materiales de fabricación, número de plazas y equipamientos.
                        </p>
                    </div>
                </div>
                <div class="prague-footer-info-block col-md-3 col-sm-12 margin-xs-50t">
                    <h6 class="footer-info-block-title">Últimas noticias</h6>
                     <!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" preloader-text="Cargando..." data-fw-param="155656/"></script> <!-- end feedwind code --> 
                </div>
                <div class="prague-footer-info-block col-md-3 col-sm-12 margin-xs-50t">
                    <h6 class="footer-info-block-title">Financiación Cetelem</h6>
                    <script>
                        function calcpayments()
                        {
                            //Las cinco variables utilizadas en la fórmula
                            var nprice=document.forms[0].nprice.value*1;
                            <!-- var salestax=document.forms[0].tax.value*1; -->
                            var interest=document.forms[0].rate.value*1;
                            var dpayment=document.forms[0].payment.value*1;
                            var t;
                            //Usamos un bucle para seleccionar el plazo de pagos
                            for (i=0; i<document.forms[0].term.options.length; i++)
                            {
                            if (document.forms[0].term.options[i].selected)
                                t = document.forms[0].term.options[i].value*1;
                            }
                            //Esta es la fórmula que realiza el cálculo
                            var result=(nprice*t);
                            result=Math.round(result*100)/100;
                            //Esta última línea muestra el resulado dentro del casillero
                            if(Number.isNaN(result)){
                                document.getElementById("monthlypayment").innerHTML="Importe incorrecto";
                                return
                            }
                            document.getElementById("monthlypayment").innerHTML=result+"€";
                        }
                    </script>
                    <form>
                        <table width="320" align="center">
                            <tr>
                                <td width="94" style="color:#FFF">Importe:*</td>
                                <td width="165">
                                    <input type="text" style="background-color:#25272E;border: 1pt solid #444; height: 23px; width: 110px; color: white;" type= "text" name="nprice" required/>
                                </td>
                            </tr>
                            <tr>
                                <td height="31" style="color:#FFF">Duración:</td>
                                <td>
                                    <select style="background-color:#25272E;border: 1pt solid #444; height: 23px;color: white;" name="term">
                                    <option value="0.04767837">24 meses</option>
                                    <option value="0.03279652">36 meses</option>
                                    <option value="0.02535673">48 meses</option>
                                    <option value="0.02090459">60 meses</option>
                                    <option value="0.01794627">72 meses</option>
                                    <option value="0.01583865">84 meses</option>
                                    <option value="0.01427422">96 meses</option>
                                    <option value="0.01310789">108 meses</option>
                                    <option value="0.01206631">120 meses</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td style="color:#FFF">Intereses:*</td>
                                <td> 
                                    <input type="text" style="background-color:#25272E;border: 1pt solid #444; height: 23px; width: 85px;color: white;" type="irate" name="rate" required value="4,90%" disabled/>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                            <td style="visibility:hidden">
                                <label>
                                    <input type="downpayment" name="payment" />
                                </label> 
                            </td>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input name="Input" type="button" value="Calcular" onclick="calcpayments()"/></td>
                            </tr>
                        </table>
                        <b style="color:#FFF">Cuota mensual a pagar:</b>
                        <div style="color:#FF9D36; font-size:22px; font-weight:bold" id="monthlypayment"></div>
                        <br>
                        <p style="color:#FFF; font-size:12px">Vencimiento el 5 de cada mes. <br>Seguro plus: Cubre  fallecimiento, invalidez absoluta o temporal y desempleo.</p>
                    </form>
                </div>
                <div class="prague-footer-info-block col-md-3 col-sm-12 margin-xs-50t">
                    <h6 class="footer-info-block-title">Contacto</h6>
                    <div class="footer-info-block-content">
                        <p><a href="tel:+34972115941">+34 972 115 941</a></p>
                        <p><a href="tel:+34610408325">+34 610 408 325</a></p>
                        <p><a href="mailto:modulosnaymo@gmail.com">modulosnaymo@gmail.com</a></p>
                        <br>
                        <p>N 260 Km 121,5 - 17530 Campdevànol, Girona, España</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-content">
                <!-- Footer copyright -->
                <div class="footer-copyright">
                    <p><a style="font-size: 10px;" href="https://www.webmastervic.com/" target="_blank">Disseny web Webmastervic</a></p>
                </div>
                <!-- End footer copyright -->
                <div class="prague-social-nav">
                    <ul class="social-content">
                        <li>
                            <a target="_blank" href="https://www.instagram.com/modulosnaymo/">
                                <i aria-hidden="true" class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/modulosnaymo/">
                                <i aria-hidden="true" class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/END FOOTER-->

    <!-- Plugins-->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/hammer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/foxlazy.min.js') }}"></script>
    <script src="{{ asset('frontend/js/all.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/disableCopy.js') }}"></script>

    @yield('scripts')

</body>

</html>