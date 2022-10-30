<?php
require 'php/controller.php';
$c = new Controller();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon" />

    <!-- Title -->
    <title>Gestor de Documentos</title>

    <!-- Bootstrap css-->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="assets/css/icons.css" rel="stylesheet" />
	<link href="assets/css/toastify.min.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/dark-boxed.css" rel="stylesheet">
    <link href="assets/css/boxed.css" rel="stylesheet">
    <link href="assets/css/skins.css" rel="stylesheet">
    <link href="assets/css/dark-style.css" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/css/colors/color.css">

    <!-- Select2 css -->
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- Internal DataTables css-->
    <link href="assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />

    <!-- Sidemenu css-->
    <link href="assets/css/sidemenu/sidemenu.css" rel="stylesheet">

</head>

<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->


    <!-- Page -->
    <div class="page">

        <!-- Sidemenu -->
        <div class="main-sidebar main-sidebar-sticky side-menu">
            <div class="sidemenu-logo">
                <a class="main-logo" href="index.php">
                    <img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                    <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo">
                    <img src="assets/img/brand/dark-logo.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
                    <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body">
                <ul class="nav">
                    <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><i class="fe fe-home sidemenu-icon"></i><span class="sidemenu-label">Definicion de Datos</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="isapres.php">ISAPRES</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="afp.php">AFP</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="regiones.php">REGIONES</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="comunas.php">COMUNAS</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="ciudades.php">CIUDADES</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="jornadas.php">JORNADAS</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tiposueldo.php">TIPO SUELDO BASE</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cargos.php">CARGOS</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="cajacompensacion.php">CAJAS DE COMPENSACIÓN</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="mutuales.php">MUTUALES DE SEGURIDAD</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="asignacionfamiliar.php">TRAMOS ASIGNACION FAMILIAR</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="tipocontrato.php">TIPO CONTRATO LABORAL</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="causaltermino.php">CAUSAL TERMINO CONTRATO</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-header"><span class="nav-label">FUNCIONES</span></li>
                    <li class="nav-item">
                        <a class="nav-link" href="tipodocumento.php"><i class="fe fe-grid sidemenu-icon"></i><span class="sidemenu-label">TIPO DE DOCUMENTOS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="redactardocumento.php"><i class="fe fe-grid sidemenu-icon"></i><span class="sidemenu-label">REDACTAR DOCUMENTOS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="asociardocumentos.php"><i class="fe fe-grid sidemenu-icon"></i><span class="sidemenu-label">ASOCIAR DOCUMENTOS A EMPRESAS</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><i class="fe fe-message-square sidemenu-icon"></i><span class="sidemenu-label">Empresas</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="empresas.php">Registro de Empresas</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="centrocosto.php">Registro de Centro de Costo</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><i class="fe fe-droplet sidemenu-icon"></i><span class="sidemenu-label">Auditoria</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="auditoriatrabajadores.php">Auditoria de trabajadores</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="auditoriaeventos.php">Auditoria de eventos</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><i class="fe fe-map-pin sidemenu-icon"></i><span class="sidemenu-label">Trabajadores</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="trabajadores.php">Registro de trabajadores</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="documentoficha.php">Registro de documento a Ficha trabajador</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="anotaciones.php">Registro de Anotaciones</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="historialtrabajador.php">Historial de trabajadores</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><i class="fe fe-layout sidemenu-icon"></i><span class="sidemenu-label">Documentos</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="documentosmasivos.php">Generacion de Documentos Masivos</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="documentospersonalizados.php">Generacion de Documentos Personalizados</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="contratoindividual.php">Generacion de Contrato Individual</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="finiquitoindividual.php">Generacion de Finiquitos Individual</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="#"><i class="fe fe-box sidemenu-icon"></i><span class="sidemenu-label">Gestion de Usuarios</span><i class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="usuarios.php">Registrar Usuarios</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="index.php"><img src="assets/img/brand/dark-logo.png" class="mobile-logo" alt="logo"></a>
                        <a href="index.php"><img src="assets/img/brand/logo.png" class="mobile-logo-dark" alt="logo"></a>
                    </div>
                    <div class="input-group">
                        <div class="mt-0">
                            <form class="form-inline">
                                <div class="search-element">
                                    <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                    <button class="btn" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="main-header-right">
                    <div class="dropdown d-md-flex header-settings">
                        <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                            <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z" />
                                </svg></i>
                        </a>
                    </div>
                    <div class="dropdown main-header-notification">
                        <a class="nav-link icon" href="">
                            <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                                </svg></i>
                            <span class="badge badge-danger nav-link-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated p-0">
                            <div class="notifications-menu">
                                <a class="dropdown-item d-flex p-3 border-bottom rounded-top " href="#">
                                    <span class="avatar avatar-md mr-3 fs-20 align-self-center cover-image bg-primary brround">
                                        <i class="fe fe-upload"></i>
                                    </span>
                                    <div>
                                        <span class="font-weight-bold text-dark"> New file Uploaded </span>
                                        <div class="small text-muted d-flex">
                                            5 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex p-3 border-bottom" href="#">
                                    <span class="avatar avatar-md  fs-20 mr-3 align-self-center cover-image bg-teal brround">
                                        <i class="fe fe-arrow-up-circle"></i>
                                    </span>
                                    <div>
                                        <span class="font-weight-bold text-dark"> Account Updated</span>
                                        <div class="small text-muted d-flex">
                                            20 mins ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex p-3 border-bottom" href="#">
                                    <span class="avatar avatar-md fs-20 mr-3 align-self-center cover-image bg-info brround">
                                        <i class="fe fe-shopping-bag"></i>
                                    </span>
                                    <div>
                                        <span class="font-weight-bold text-dark"> Order's Recevied</span>
                                        <div class="small text-muted d-flex">
                                            1 hour ago
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex p-3 border-bottom" href="#">
                                    <span class="avatar avatar-md mr-3 fs-20 align-self-center cover-image bg-pink brround">
                                        <i class="fe fe-database"></i>
                                    </span>
                                    <div>
                                        <span class="font-weight-bold text-dark">Server Rebooted</span>
                                        <div class="small text-muted d-flex">
                                            2 hour ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="#" class="dropdown-item text-center notifications-menu1">View all Notification</a>
                        </div>
                    </div>
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link fullscreen-button" href="">
                            <i class="fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M5 15H3v4c0 1.1.9 2 2 2h4v-2H5v-4zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm14-2h-4v2h4v4h2V5c0-1.1-.9-2-2-2zm0 16h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zM12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                </svg></i>
                            <i class="exit-fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                                </svg></i>
                        </a>
                    </div>
                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="">
                            <span class="main-img-user"><img alt="avatar" src="../../assets/img/users/9.jpg"></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">Alexandra Churchill</h6>
                                <p class="main-notification-text">Web Designer</p>
                            </div>
                            <a class="dropdown-item border-top" href="profile.php">
                                <i class="fe fe-user"></i> Mi Perfil
                            </a>
                            <a class="dropdown-item" href="lockscreen.php">
                                <i class="fe fe fe-unlock"></i> Lock screen
                            </a>
                            <a class="dropdown-item" href="signin.php">
                                <i class="fe fe-power"></i> Cerrar Sesíon
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                </div>
            </div>
        </div>
        <!-- End Main Header-->

        <!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown header-search">
                            <a class="nav-link icon header-search">
                                <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                    </svg></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="main-form-search p-2">
                                    <div class="">
                                        <div class="mt-0">
                                            <form class="">
                                                <div class="search-element d-flex">
                                                    <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                                    <button class="btn" type="submit">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="nav-link icon full-screen-link fullscreen-button" href=""><i class="fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M5 15H3v4c0 1.1.9 2 2 2h4v-2H5v-4zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm14-2h-4v2h4v4h2V5c0-1.1-.9-2-2-2zm0 16h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zM12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z" />
                                    </svg></i>
                                <i class="exit-fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z" />
                                    </svg></i>
                            </a>
                        </div>
                        <div class="dropdown main-header-notification">
                            <a class="nav-link icon" href="">
                                <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z" />
                                    </svg></i>
                                <span class="badge badge-danger nav-link-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated p-0">
                                <div class="notifications-menu">
                                    <a class="dropdown-item d-flex p-3 border-bottom rounded-top" href="#">
                                        <span class="avatar avatar-md mr-3 fs-20 align-self-center cover-image bg-primary brround">
                                            <i class="fe fe-upload"></i>
                                        </span>
                                        <div>
                                            <span class="font-weight-bold text-dark"> New file Uploaded </span>
                                            <div class="small text-muted d-flex">
                                                5 hour ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex p-3 border-bottom" href="#">
                                        <span class="avatar avatar-md  fs-20 mr-3 align-self-center cover-image bg-teal brround">
                                            <i class="fe fe-arrow-up-circle"></i>
                                        </span>
                                        <div>
                                            <span class="font-weight-bold text-dark"> Account Updated</span>
                                            <div class="small text-muted d-flex">
                                                20 mins ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex p-3 border-bottom" href="#">
                                        <span class="avatar avatar-md fs-20 mr-3 align-self-center cover-image bg-info brround">
                                            <i class="fe fe-shopping-bag"></i>
                                        </span>
                                        <div>
                                            <span class="font-weight-bold text-dark"> Order's Recevied</span>
                                            <div class="small text-muted d-flex">
                                                1 hour ago
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex p-3 border-bottom" href="#">
                                        <span class="avatar avatar-md mr-3 fs-20 align-self-center cover-image bg-pink brround">
                                            <i class="fe fe-database"></i>
                                        </span>
                                        <div>
                                            <span class="font-weight-bold text-dark">Server Rebooted</span>
                                            <div class="small text-muted d-flex">
                                                2 hour ago
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="#" class="dropdown-item text-center notifications-menu1">View all Notification</a>
                            </div>
                        </div>
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user"><img alt="avatar" src="../../assets/img/users/1.jpg"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Alexandra Churchill</h6>
                                    <p class="main-notification-text">Web Designer</p>
                                </div>
                                <a class="dropdown-item border-top" href="profile.php">
                                    <i class="fe fe-user"></i> My Profile
                                </a>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fe fe-edit"></i> Edit Profile
                                </a>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fe fe-settings"></i> Account Settings
                                </a>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fe fe fe-unlock"></i> Lock screen
                                </a>
                                <a class="dropdown-item" href="signin.php">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <div class="dropdown  header-settings">
                            <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z" />
                                    </svg></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->

        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="container-fluid">
                <div class="inner-body">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="page-header-1">
                            <h1 class="main-content-title tx-30">Usuarios</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Page Header -->
                    <div class="row mb-3">
                        <div class="col-md-12 text-right">
                        <a href="registrarusuario.php" class="btn btn-success">Registrar Usuario <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bd-b-0">
                            <h4 class="card-title font-weight-semibold mb-0">Listado de Usuarios</h4>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table text-nowrap" id="example1">
                                        <thead class="border-top">
                                            <tr>
                                                <th class="bg-transparent">RUT</th>
                                                <th class="bg-transparent">Nombre</th>
                                                <th class="bg-transparent">Correo</th>
                                                <th class="bg-transparent">Telefono</th>
                                                <th class="bg-transparent">Permisos</th>
                                                <th class="bg-transparent text-center">Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $lista = $c->listarusuarios();
                                                if(count($lista)>0){
                                                    foreach($lista as $u){
                                                        echo "<tr class='border-bottom-0'>
                                                        <td class='coin_icon d-flex fs-15 font-weight-semibold'>
                                                            ".$u->getRut()."
                                                        </td>
                                                        <td class='text-muted fs-15 font-weight-semibold'>".$u->getNombre()." ".$u->getApellido()."</td>
                                                        <td class='text-muted fs-15 font-weight-semibold'>".$u->getCorreo()."</td>
                                                        <td class='text-muted fs-15 font-weight-semibold'>".$u->getTelefono()."</td>";
                                                        $permi = $c->listarPermisosUsuario($u->getId());
                                                        if(count($permi)>0){
                                                            echo "<td class='text-muted fs-10 font-weight-semibold'>";
                                                            foreach($permi as $p){
                                                                echo $p->getNombre()."<br>";
                                                            }
                                                            echo "</td>";
                                                        }else{
                                                            echo "<td class='text-muted fs-15 font-weight-semibold'>Sin Permisos</td>";
                                                        }
                                                        echo "<td class='text-center'>
                                                            <a class='btn btn-outline-info btn-sm rounded-11' onclick='more(".$u->getId().")' data-toggle='modal' data-target='#modaluser' data-original-title='Ver Más'>
                                                                <i class='fa fa-eye'>
                                                                </i>
                                                            </a>
                                                            <a class='btn btn-outline-warning btn-sm rounded-11' href='permisos.php?code=".$u->getId()."' data-toggle='tooltip' data-original-title='Permisos'><i class='fa fa-user-plus'></i></a>
                                                            <a class='btn btn-outline-warning btn-sm rounded-11' data-toggle='tooltip' href='EditarUsuario.php?code=".$u->getId()."' data-original-title='Editar'><i class='fa fa-pen'></i></a>
                                                            <a title='Resetear Contraseña' class='btn btn-outline-info btn-sm rounded-11' onclick='cargarid(".$u->getId().")' data-toggle='modal' data-target='#modalcontra' data-original-title='Cambiar Contraseña'>
                                                                <i class='fa fa-key'>
                                                                </i>
                                                            </a>
                                                            <a class='btn btn-outline-danger btn-sm rounded-11' data-toggle='tooltip' onclick='Eliminar(".$u->getId().")' data-original-title='Eliminar'><i class='fa fa-trash'></i></a>

                                                        </td>
                                                    </tr>";
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2022 - KaiserTech Todos los derechos reservados.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->

        <!-- Sidebar -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="sidebar-icon">
                <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
            </div>
            <div class="sidebar-body">
                <h5>Todo</h5>
                
                
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Edit Modal -->
		<div class="modal fade" id="modaluser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Información Usuario</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="detalle">

						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- Edit Modal -->
		<div class="modal fade" id="modalcontra" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Restablecer Comtraseña</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
						    <div class="col-md-6">
                                <label>Contraseña Nueva</label>
                                <input class="form-control" type="password" id="NewPass">
                            </div>
						    <div class="col-md-6">
                                <label>Confirmar Contraseña</label>
                                <input class="form-control" type="password" id="NewPass1">
                            </div>
                            <input type="hidden" id="idus"/>
						    <div class="col-md-12 mt-2 text-right">
                               <button class="btn btn-success" id="changepass"><i class="fa fa-save"></i> Guardar Cambios</button>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Internal Chart.Bundle js-->
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>

    <!-- Peity js-->
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>

    <!--Internal Apexchart js-->
    <script src="assets/js/apexcharts.js"></script>

    <!-- Internal Data Table js -->
    <script src="assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/table-data.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>


    <!-- Perfect-scrollbar js -->
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- Select2 js-->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/js/select2.js"></script>

    <!-- Sidemenu js -->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- Sidebar js -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

    <!-- INTERNAL INDEX js -->
    <script src="assets/js/index.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>

    <!-- Custom js -->
    <script src="assets/js/custom.js"></script>
        <script src="JsFunctions/validation.js"></script>
		<script src="JsFunctions/Alert/toastify.js"></script>
		<script src="JsFunctions/Alert/sweetalert2.all.min.js"></script>
		<script src="JsFunctions/Alert/alert.js"></script>
		<script src="JsFunctions/Comunas.js"></script>
        <script src="JsFunctions/precargado.js"></script>
        <script src="JsFunctions/Usuarios.js"></script>


</body>

</html>
