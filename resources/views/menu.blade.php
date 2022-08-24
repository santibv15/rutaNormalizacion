<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Proyecto para el manejo de ambientes de formacion">
    <meta name="keywords" content="Proyecto Ambientes CTGI - GIAITEQ">
    <meta name="author" content="SENNOVA CTGI">
    <title>rutaNormalizacion</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/semi-dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                
            </ul>
        </div>
    </nav>

    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="#"><span class="brand-logo">
                        <img src="images/logo/logo.png" alt="">
                            </span>
                        <h2 style="color:rgb(248, 109, 23);" class="brand-text">Cruds</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Ruta normalizacion</span><i data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Estado producto</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{Route('ViewEstadoP')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">listado de  estados</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ Route('InsertEstadoP')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">registrar estado</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Categoria</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{ Route('ViewCategoria')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">listado de categorias</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ Route('InsertCategoria')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Registrar categoria</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Mesa sectorial</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="{{Route('ViewMesa')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile"> listado de mesas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="{{ Route('InsertMesa')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Registrar mesa</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Regional</span></a>
                  <ul class="menu-content">
                      <li><a class="d-flex align-items-center" href="{{Route('ViewRegional')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile"> listado de regionales</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href="{{ Route('InsertRegional')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Registrar regional</span></a>
                      </li>
                  </ul>
              </li>
              <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Centro Formacion</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{Route('ViewCentrof')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile"> listado de centros</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{ Route('InsertCentrof')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Registrar centro</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages"> Nscl</span></a>
              <ul class="menu-content">
                  <li><a class="d-flex align-items-center" href="{{Route('ViewNscl')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile"> listado de NSCL</span></a>
                  </li>
                  <li><a class="d-flex align-items-center" href="{{ Route('InsertNscl')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">Registrar NSCL</span></a>
                  </li>
              </ul>
          </li>
            </ul>
        </div>
    </div>

    <div class="app-content content ">
      
      @yield('contenido')
    </div>

      


    <div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2022<a class="ms-25" href="https://investigacionctgi.com/" target="_blank">GIAITEQ</a><span class="d-none d-sm-inline-block">, SENNOVA CTGI</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<script src="{{asset('vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('js/core/app-menu.js')}}"></script>
<script src="{{asset('js/core/app.js')}}"></script>
<script src="{{asset('js/scripts/forms/form-tooltip-valid.js')}}"></script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
