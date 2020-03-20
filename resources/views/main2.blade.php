<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Academia FOJAL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- favicon
         ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- normalize CSS
   -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/educate-custon-icon.css')}}">
    <!--
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/editor/select2.css')}}">

    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/metisMenu/metisMenu-vertical.css')}}">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-3.4.1.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('css/data-table/bootstrap-editable.css')}}">

    <script src="{{asset('js/form_academia.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/notify.js')}}" charset="utf-8"></script>

    <!-- calendar CSS
       ============================================ -->
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar/fullcalendar.print.min.css')}}">



    <!-- formulario JS
       ============================================ -->

    <script src="{{asset('js/cursos_online.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/formulario.js')}}"></script>
    <!-- Card cursos efecto
		============================================ -->
    <link rel="stylesheet" href="{{asset('estiloscard.css')}}">



    <link rel="stylesheet" href="{{asset('./css/editor/select2.css')}}">

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
    <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>

</head>

<?php
$user = Session::get('usuario');
?>


<body>
<div class="left-sidebar-pro" >
    <nav id="sidebar2" class="">
        <div class="sidebar-header">
            <a href="home"><img class="main-logo" src="{{asset('img/logo/logo.png')}}" alt="" style="width: 200px"/></a>
        </div>
    </nav>
</div>
    <!-- Start Welcome area -->
    <div class="" >
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                                <div class="header-top-menu tabl-d-n">
                                                    <ul class="nav navbar-nav mai-top-nav">
                                                        <li class="nav-item"><a href="{{route('inicio2')}}" class="nav-link">Inicio</a>
                                                        </li>

                                                    </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="{{asset('..\img\contact\3.jpg')}}" alt=""  style="width: 30px"/>
                                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                                <span class="hidden-xs">{{$user->nombre.' '.$user->apellido_paterno}}</span>
                                                            </a>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Mi cuenta</a>
                                                        </li>
                                                        <li><a href="{{route('signout')}}"><span class="edu-icon edu-locked author-log-ic"></span>Salir</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Start of Tawk.to Script-->
                    <script type="text/javascript">
                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                        (function(){
                            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                            s1.async=true;
                            s1.src='https://embed.tawk.to/5e74f3c6eec7650c33217f0f/default';
                            s1.charset='UTF-8';
                            s1.setAttribute('crossorigin','*');
                            s0.parentNode.insertBefore(s1,s0);
                        })();
                    </script>
                    <!--End of Tawk.to Script-->
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Inicio" href="{{route('inicio')}}">Inicio<span class="@if($_SERVER['REQUEST_URI'] == '/') active @endif "></span></a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->

        </div>
        <div class="content-wrapper">

            @yield('content')
        </div>
        <div class="alert">
            <strong>@include('flash::message')</strong>
        </div>
        <div class="content-wrapper">
            @yield('scripts')
        </div>




       <!-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <strong>Copyright &copy; 2019 Fojal.</strong> All rights
                        reserved.
                    </div>
                </div>
            </div>
        </div>-->
    </div>



    <!-- bootstrap JS
       ============================================ -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <!-- wow JS
		============================================ -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>

    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('js/sparkline/jquery.charts-sparkline.js')}}"></script>

    <!-- maskedinput JS
		============================================ -->
    <script src="{{asset('js/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('js/masking-active.js')}}"></script>

    <!-- tab JS
		============================================ -->
    <script src="{{asset('js/tab.js')}}"></script>

    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- calendar JS
		============================================ -->
    <script src="{{asset('js/calendar/moment.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar-active.js')}}"></script>
    <!--<link href='../calendar/packages/core/main.css' rel='stylesheet' />
    <link href='../calendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='../calendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='../calendar/packages/list/main.css' rel='stylesheet' />
    <script src='../calendar/packages/core/main.js'></script>
    <script src='../calendar/packages/core/locales-all.js'></script>
    <script src='../calendar/packages/interaction/main.js'></script>
    <script src='../calendar/packages/daygrid/main.js'></script>
    <script src='../calendar/packages/timegrid/main.js'></script>
    <script src='../calendar/packages/list/main.js'></script>-->

    <!-- data table JS
            ============================================ -->
    <script src="{{asset('js/data-table/bootstrap-table.js')}}"></script>
    <script src="{{asset('js/data-table/tableExport.js')}}"></script>
    <script src="{{asset('js/data-table/data-table-active.js')}}"></script>
    <script src="{{asset('js/data-table/bootstrap-table-editable.js')}}"></script>

    <script src="{{asset('js/data-table/bootstrap-table-resizable.js')}}"></script>
    <script src="{{asset('js/data-table/colResizable-1.5.source.js')}}"></script>

    <script src="{{asset('js/data-table/bootstrap-table-export.js')}}"></script>
    <script src="{{asset('js/detallecursos.js')}}"></script>
