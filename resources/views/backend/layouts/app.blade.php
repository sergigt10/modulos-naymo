<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Administración de la web</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('styles')

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('backend/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendors/css/vendor.bundle.addons.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('backend/css/mim/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}" />
</head>

<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('backend.inici.index') }}"><img src="{{ asset('backend/images/logo.png') }}" alt="logo"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-left">
                    <a href="http://www.modulosnaymo.com" target="_blank" style="color:black">Ver página web</a>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mr-0 mr-sm-2">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <span class="nav-profile-name">Administrador</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout text-primary"></i>
                            Cerrar sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <div id="right-sidebar" class="settings-panel"></div>
            
            <!-- NAVBAR INICI -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.inici.index') }}">
                            <i class="mdi mdi-apps menu-icon"></i>
                            <span class="menu-title">
                                Inicio
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-1" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"modulos") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-1">
                            <i class="mdi mdi-home-variant menu-icon"></i>
                            <span class="menu-title">Módulos</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"modulos") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/modulos/create')) ? 'active' : '' }}" href="{{ route('backend.modulos.create') }}">
                                        Insertar
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/modulos')) ||  (request()->is('backend/modulos/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.modulos.index') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#general-pages-2" <?php echo (strpos($_SERVER['REQUEST_URI'] ,"textes") !== false) ? 'aria-expanded="true"' : 'aria-expanded="false"'; ?> aria-controls="general-pages-2">
                            <i class="mdi mdi-pencil menu-icon"></i>
                            <span class="menu-title">Textos portada</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div <?php echo (strpos($_SERVER['REQUEST_URI'] ,"textes") !== false) ? 'class="collapse show"' : 'class="collapse"'; ?> id="general-pages-2">
                            {{-- <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ (request()->is('backend/textes/create')) ? 'active' : '' }}" href="{{ route('backend.textes.create') }}">
                                        Insertar
                                    </a>
                                </li>
                            </ul> --}}
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> 
                                    <a class="nav-link {{ ( (request()->is('backend/textes')) ||  (request()->is('backend/textes/*/edit'))) ? 'active' : '' }}" href="{{ route('backend.textes.index') }}">
                                        Modificar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </nav>
            <!-- NAVBAR FI -->

            @yield('content')
            
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Disseny web: <a style="color: black;" target="_blank" href="https://www.webmastervic.com" target="_blank">Webmastervic</a></span>
                </div>
            </footer>
        </div>
    </div>
</div>
    <script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('backend/vendors/js/vendor.bundle.addons.js') }}"></script>
    <!-- <script src="{{ asset('backend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/js/template.js') }}"></script>
    <script src="{{ asset('backend/js/settings.js') }}"></script>
    <script src="{{ asset('backend/js/todolist.js') }}"></script> -->
    @yield('scripts')
</body>
</html>
