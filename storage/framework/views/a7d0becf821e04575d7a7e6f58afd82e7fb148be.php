<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" charset="utf-8">
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
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- normalize CSS
   -->
    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/meanmenu.min.css')); ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/educate-custon-icon.css')); ?>">
    <!--
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/editor/select2.css')); ?>">

    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/scrollbar/jquery.mCustomScrollbar.min.css')); ?>">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/metisMenu/metisMenu.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/metisMenu/metisMenu-vertical.css')); ?>">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <!-- jquery
		============================================ -->
    <script src="<?php echo e(asset('js/vendor/jquery-3.4.1.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/data-table/bootstrap-table.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/data-table/bootstrap-editable.css')); ?>">

    <script src="<?php echo e(asset('js/form_academia.js')); ?>" charset="utf-8"></script>
    <script src="<?php echo e(asset('js/notify.js')); ?>" charset="utf-8"></script>

    <!-- calendar CSS
       ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">

    <!-- formulario JS
       ============================================ -->

    <script src="<?php echo e(asset('js/formulario.js')); ?>"></script>



    <link rel="stylesheet" href="<?php echo e(asset('./css/editor/select2.css')); ?>">

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
</head>

<?php
$user = Session::get('usuario');
?>

<body>

    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="home"><br><img class="main-logo" src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="" style="width: 200px"/></a>
                <strong><a href="home"><img src="<?php echo e(asset('img/logo/logosn.png')); ?>" alt="" style="width: 100px"/></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                                <br>
                            <a class="has-arrow" aria-expanded="false" href="<?php echo e(route('inicio')); ?>">
                                <i class="<?php if($_SERVER['REQUEST_URI'] == '/'): ?> active <?php endif; ?> "></i><span class="educate-icon educate-home "></span><span class="mini-click-non"> Inicio</span>
                            </a>
                        </li>
                        <?php if($user->id_perfil == '1'): ?>
                        <li>
                            <a class="has-arrow" aria-expanded="false"><span class="mini-click-non">Usuarios</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Creación de usuarios" href="<?php echo e(route('usuarios')); ?>"><span class="mini-sub-pro">Registro</span></a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                        <?php if($user->id_perfil == '1' || $user->id_perfil == '3'): ?>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="glyphicon glyphicon-briefcase "></span> <span class="mini-click-non">Catálogos</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Catálogo capacitadores" href="<?php echo e(route('cat_capacitadores.index')); ?>"><span class="mini-sub-pro">Catálogo capacitador </span></a></li>
                                <li><a title="Catálogo Ejecutivos" href="<?php echo e(route('ejecutivos')); ?>"><span class="mini-sub-pro">Catálogo ejecutivos</span></a></li>
                                <li><a title="Catálogo perfiles" href="<?php echo e(route('perfiles')); ?>"><span class="mini-sub-pro">Catálogo perfiles</span></a></li>
                                <!--<li><a title="Catálogo puestos" href="<?php echo e(route('puestos')); ?>"><span class="mini-sub-pro">Catálogo puestos</span></a></li>-->
                                <li><a title="Catálogo de Temas" href="<?php echo e(route('temas')); ?>"><span class="mini-sub-pro">Catálogo temas</span></a></li>
                            </ul>
                        </li>
                        <?php endif; ?>

                        <li>
                            <a class="has-arrow" aria-expanded="false"><span class="educate-icon educate-library "></span> <span class="mini-click-non">Vinculación</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Registro plática informativa" href="<?php echo e(route('registroplatica')); ?>" class="<?php if($_SERVER['REQUEST_URI'] == '/registroplatica'): ?> active <?php endif; ?> "><span class="mini-sub-pro">Registro plática</span></a></li>
                            <!--<li><a title="Test ubica tu financiamiento" href="<?php echo e(route('testubica')); ?>"><span class="mini-sub-pro">Test ubica</span></a></li>-->
                                <li><a title="Evaluación de la plática informativa" href="<?php echo e(route('evaluacionejecutivos')); ?>"><span class="mini-sub-pro">Evaluación ejecutivos</span></a></li>
                                <li><a title="Evaluación de la capacitadores" href="<?php echo e(route('EvaluacionCapacitadores')); ?>"><span class="mini-sub-pro">Evaluación capacitadores</span></a></li>

                                <li><a title="Evaluación de la capacitadores" href="<?php echo e(URL::to('http://fojal.jalisco.gob.mx:82/bi/?pathRef=.public_folders%2FAcademia%2F2-Evaluacion%2Ba%2Bcapacitadores&action=run&format=HTML')); ?>"target="_blank"><span class="mini-sub-pro">Reporte capacitadores</span></a></li>
                            </ul>
                        </li>
                        <?php if($user->id_perfil == '1' || $user->id_perfil == '3'): ?>

                        <li>
                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-professor "></span> <span class="mini-click-non">Programación</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Programación cursos" href="<?php echo e(route('cursos')); ?>"><span class="mini-sub-pro">Programación cursos</span></a></li>
                            </ul>
                        </li>


                        <li>
                            <a class="has-arrow" aria-expanded="false"><span class="educate-icon educate-library "></span> <span class="mini-click-non">Cursos virtuales</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Registro cursos virtuales" href="<?php echo e(route('cursos_online')); ?>"><span class="mini-sub-pro">Registro</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Vista estudiante" href="<?php echo e(route('inicio2')); ?>"><span class="mini-sub-pro">Vista estudiante</span></a></li>
                            </ul>
                        </li>

                        <!--
                        <li>
                            <a class="has-arrow" href="<?php echo e(route('inicio')); ?>" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non"> Descargas</span></a>
                        </li>-->
<?php endif; ?>

                        <li id="removable">
                            <a class="has-arrow" aria-expanded="false" href="<?php echo e(route('signout')); ?>"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Salir</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?php echo e(asset('img/logo/logo.png')); ?>" alt="" style="width: 120px"/></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">

                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notificaciones</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                       <h2>Curso </h2>
                                                                        <p>Porfavor cambiar horario curso.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <h2>Emprendimiento Social Colaborativo</h2>
                                                                        <p>Suspención de curso</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">Ver todas las notificaciones</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="<?php echo e(asset('img/product/pro4.png')); ?>" alt=""  style="width: 30px"/>
                                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                                <span class="hidden-xs"><?php echo e($user->nombre.' '.$user->apellido_paterno); ?></span>
                                                            </a>

														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Mi cuenta</a>
                                                        </li>
                                                        <li><a href="<?php echo e(route('signout')); ?>"><span class="edu-icon edu-locked author-log-ic"></span>Salir</a>
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
                                        <li><a data-toggle="collapse" data-target="#Inicio" href="<?php echo e(route('inicio')); ?>">Inicio<span class="<?php if($_SERVER['REQUEST_URI'] == '/'): ?> active <?php endif; ?> "></span></a>

                                        </li>
                                        <li>
                                            <a class="has-arrow" aria-expanded="false"><span class="mini-click-non">Usuarios</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Creación de usuarios" href="<?php echo e(route('usuarios')); ?>"><span class="mini-sub-pro">Registro</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="has-arrow" aria-expanded="false"><span class="mini-click-non">Vinculación</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Registro plática informativa" href="<?php echo e(route('registroplatica')); ?>" class="<?php if($_SERVER['REQUEST_URI'] == '/registroplatica'): ?> active <?php endif; ?> "><span class="mini-sub-pro">Registro plática</span></a></li>
                                                <li><a title="Test ubica tu financiamiento" href="<?php echo e(route('testubica')); ?>"><span class="mini-sub-pro">Test ubica</span></a></li>
                                                <li><a title="Evaluación de la plática informativa" href="<?php echo e(route('evaluacionplaticainfo')); ?>"><span class="mini-sub-pro">Evaluación plática</span></a></li>

                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="cat_capacitadores.index">Capacitadores<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="cursos">Emprendedores<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li>
                                            <a class="has-arrow" href="" aria-expanded="false"><span class="educate-icon educate-professor "></span> <span class="mini-click-non">Programación</span></a>
                                            <ul class="submenu-angle" aria-expanded="false">
                                                <li><a title="Capacitadores" href="<?php echo e(route('cat_capacitadores.index')); ?>"><span class="mini-sub-pro">Capacitadores</span></a></li>
                                                <li><a title="Programación cursos" href="<?php echo e(route('inicio')); ?>"><span class="mini-sub-pro">Programación cursos</span></a></li>
                                                <li><a title="Catálago de Temas" href="<?php echo e(route('temas')); ?>"><span class="mini-sub-pro">Catalago temas</span></a></li>
                                                <li><a title="Pagos" href="<?php echo e(route('inicio')); ?>"><span class="mini-sub-pro">Pagos</span></a></li>

                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Calendario <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Descargas <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>

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
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class="alert">
            <strong><?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></strong>
        </div>
        <div class="content-wrapper">
            <?php echo $__env->yieldContent('scripts'); ?>
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
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- jquery
		============================================ -->
    <script src="<?php echo e(asset('js/vendor/jquery-1.12.4.min.js')); ?>"></script>

    <!-- wow JS
		============================================ -->
    <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery-price-slider.js')); ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.meanmenu.js')); ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.sticky.js')); ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>

    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo e(asset('js/metisMenu/metisMenu.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/metisMenu/metisMenu-active.js')); ?>"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="<?php echo e(asset('js/sparkline/jquery.sparkline.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sparkline/jquery.charts-sparkline.js')); ?>"></script>

    <!-- maskedinput JS
		============================================ -->
    <script src="<?php echo e(asset('js/jquery.maskedinput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/masking-active.js')); ?>"></script>

    <!-- tab JS
		============================================ -->
    <script src="<?php echo e(asset('js/tab.js')); ?>"></script>

    <!-- main JS
		============================================ -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>

    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
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
    <script src="<?php echo e(asset('js/data-table/bootstrap-table.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/tableExport.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/data-table-active.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/bootstrap-table-editable.js')); ?>"></script>

    <script src="<?php echo e(asset('js/data-table/bootstrap-table-resizable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/colResizable-1.5.source.js')); ?>"></script>
    <script src="<?php echo e(asset('js/data-table/bootstrap-table-export.js')); ?>"></script>


<?php /**PATH /var/www/html/resources/views/main.blade.php ENDPATH**/ ?>