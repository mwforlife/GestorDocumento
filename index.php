<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="keywords" content="">

		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Gestor de Documentos</title>

		<!-- Bootstrap css-->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="assets/css/icons.css" rel="stylesheet"/>

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
									<a class="nav-sub-link" href="isapres.php">Instituci??n de Salud</a>
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
									<a class="nav-sub-link" href="nacionalidad.php">NACIONALIDADES</a>
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
									<a class="nav-sub-link" href="cajacompensacion.php">CAJAS DE COMPENSACI??N</a>
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
										<input type="search" class="form-control header-search" placeholder="Search???" aria-label="Search" tabindex="1">
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
							<a href="#" title="Seleccionar Empresa" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"/></svg></i>
							</a>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link fullscreen-button" href="">
								<i class="fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 15H3v4c0 1.1.9 2 2 2h4v-2H5v-4zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm14-2h-4v2h4v4h2V5c0-1.1-.9-2-2-2zm0 16h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zM12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg></i>
								<i class="exit-fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/></svg></i>
							</a>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user" ><img alt="avatar" src="../../assets/img/users/9.jpg"></span>
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
									<i class="fe fe-power"></i> Cerrar Ses??on
								</a>
							</div>
						</div>
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
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
									<i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg></i>
								</a>
								<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<div class="">
											<div class="mt-0">
												<form class="">
													<div class="search-element d-flex">
														<input type="search" class="form-control header-search" placeholder="Search???" aria-label="Search" tabindex="1">
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
								<a class="nav-link icon full-screen-link fullscreen-button" href=""><i class="fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 15H3v4c0 1.1.9 2 2 2h4v-2H5v-4zM5 5h4V3H5c-1.1 0-2 .9-2 2v4h2V5zm14-2h-4v2h4v4h2V5c0-1.1-.9-2-2-2zm0 16h-4v2h4c1.1 0 2-.9 2-2v-4h-2v4zM12 9c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg></i>
									<i class="exit-fullscreen"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 16h3v3h2v-5H5v2zm3-8H5v2h5V5H8v3zm6 11h2v-3h3v-2h-5v5zm2-11V5h-2v5h5V8h-3z"/></svg></i>
								</a>
							</div>
							<div class="dropdown main-header-notification">
								<a class="nav-link icon" href="">
									<i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/></svg></i>
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
									<span class="main-img-user" ><img alt="avatar" src="../../assets/img/users/1.jpg"></span>
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
									<i class="header-icons"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17v2h6v-2H3zM3 5v2h10V5H3zm10 16v-2h8v-2h-8v-2h-2v6h2zM7 9v2H3v2h4v2h2V9H7zm14 4v-2H11v2h10zm-6-4h2V7h4V5h-4V3h-2v6z"/></svg></i>
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
								<h1 class="main-content-title tx-30">Bitcoin</h1>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
								</ol>
							</div>
						</div>
						<!-- End Page Header -->


						<!-- Row -->
						<div class="row">
							<div class="col-xl-8">
								<div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-primary-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Bitcoin</p>
														<h1 class="mb-0 text-white fs-30">22.5 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-up text-white"></i> +64.4%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-primary icon-service text-white ">
															<i class="cf cf-btc"></i>
														</span>
													</div>
												</div>
											</div>
											<img src="../../assets/img/pngs/img-1.png" alt="img" class="img-card-circle">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-secondary-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Ethereum</p>
														<h1 class="mb-0 text-white fs-30">15.7 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-up text-white"></i> +12.6%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service text-white ">
															<i class="fa cf cf-eth "></i>
														</span>
													</div>
												</div>
											</div>
											<img src="../../assets/img/pngs/img-2.png" alt="img" class="img-card-circle">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-purple-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Tether</p>
														<h1 class="mb-0 text-white fs-30">3662.1 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-down text-white"></i> -16.2%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-purple icon-service text-white">
															<i class="fa cf cf-usdt"></i>
														</span>
													</div>
												</div>
											</div>
											<img src="../../assets/img/pngs/img-2.png" alt="img" class="img-card-circle">
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										<div class="card overflow-hidden bg-success-gradient">
											<div class="card-body">
												<div class="d-flex clearfix">
													<div class="text-left">
														<p class="mb-0 text-white fs-24">Ripple</p>
														<h1 class="mb-0 text-white fs-30">1.3644 K</h1>
														<p class="mb-0 text-white icon-service-1"><span class="text-white"><i class="fa fa-chevron-up text-white"></i> +56.6%</span></p>
													</div>
													<div class="ml-auto">
														<span class="bg-success icon-service text-white ">
															<i class="cf cf-xrp"></i>
														</span>
													</div>
												</div>
											</div>
											<img src="../../assets/img/pngs/img-1.png" alt="img" class="img-card-circle">
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-4">
								<div class="card">
									<div class="card-header pd-t-20 bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Total Coins</h4>
											<div class="dash2-select wd-150">
												<select name="coins" class="form-control custom-select select2">
													<option value="1" selected>Bitcoin</option>
													<option value="2">Ripple</option>
													<option value="3">Ethereum</option>
													<option value="4">Litecoin</option>
													<option value="5">DASH</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body p-0 mb-0">
										<div id="bar" class="sales-bar"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- ROW-2 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-8">
								<div class="card overflow-hidden bd-b-0">
									<div class="card-header  bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Statistics</h4>
											<div class="dash1-select  wd-200 d-flex">
												<span class="input-icon-addon input-icon-addon border border-right-0 p-1 ht-38">
													<i class="fe fe-calendar fs-20 px-2"></i>
												</span>
												<select name="coins" class="form-control custom-select select2">
													<option value="1">YEAR</option>
													<option value="2">MONTH</option>
													<option value="3">WEEK</option>
													<option value="4">DAY</option>
													<option value="5">HOURS</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body pr-4 pl-5">
										<div class="chart-wrapper">
											<canvas id="statistics" class="static-chart ht-345"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header bd-b-0">
										<h3 class="card-title font-weight-semibold ">summary</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="chart" class="chart-dropshadow2 ht-200  chartjs-render-monitor"></canvas>
										</div>
										<div class="row mt-5">
											<div class="col-xxl-9 col-xl-6 col-lg-6 col-md-6 col-sm-8 mx-auto d-block">
												<div class="row">
													<div class="col">
														<div class="d-flex"><span class="legend chart-legend1 h-2 w-2 brround mr-3"></span><span>EXCHANGE</span></div>
														<div class="d-flex mt-2"><span class="legend chart-legend2 h-2 w-2 brround mr-3"></span><span>TRADING</span></div>
													</div>
													<div class="col">
														<div class="d-flex"><span class="legend chart-legend3 h-2 w-2 brround mr-3"></span><span>REALESTATE</span></div>
														<div class="d-flex mt-2"><span class="legend chart-legend4 h-2 w-2 brround mr-3"></span><span>SHARES</span></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-2 END -->

						<!-- ROW-3 -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
								<div class="row">
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Bitcoin Price</p>
														<h6 class="mb-1 text-primary fs-18 font-weight-semibold">Today</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$11,354.35 USD</p>
													</div>
													<div class="ml-auto">
														<span class="bg-primary icon-service-2 text-white ">
															<i class="mdi mdi-calculator"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Volume</p>
														<h6 class="mb-1 text-secondary fs-18 font-weight-semibold">Today</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$25,711,897 USD</p>
													</div>
													<div class="ml-auto">
														<span class="bg-secondary icon-service-2 text-white ">
															<i class="mdi mdi-poll"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card ">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Max Supply</p>
														<h6 class="mb-1 text-purple fs-18 font-weight-semibold">Today</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$21,000,000 BTC</p>
													</div>
													<div class="ml-auto">
														<span class="bg-purple icon-service-2 text-white ">
															<i class="mdi mdi-trending-up"></i>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-6 col-lg-6">
										<div class="card">
											<div class="card-body p-4">
												<div class="d-flex no-block align-items-center">
													<div class="text-left">
														<p class="mb-1 text-dark fs-20 font-weight-medium">Market Rank</p>
														<h6 class="mb-1 text-success fs-18 font-weight-semibold">Bitcoin</h6>
														<p class="mb-1 text-muted fs-16 font-weight-semibold">$18,517,712 BTC</p>
													</div>
													<div class="ml-auto">
														<span class="bg-success icon-service-2 text-white">
															<b class="fs-30 my-auto py-auto">1</b>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 END -->

						<!-- ROW-4 opened -->
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card transcation-crypto" id="transcation-crypto">
									<div class="card-header bd-b-0">
										<h4 class="card-title font-weight-semibold mb-0">Transaction History</h4>
									</div>
									<div class="card-body p-0">
										<div class="">
											<div class="table-responsive">
												<table class="table text-nowrap" id="example1">
													<thead class="border-top">
														<tr>
															<th class="bg-transparent">coin</th>
															<th class="bg-transparent">Date</th>
															<th class="bg-transparent">Transaction ID</th>
															<th class="bg-transparent">Amount</th>
															<th class="bg-transparent">Status</th>
														</tr>
													</thead>
													<tbody>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="cf cf-btc"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Bitcoin</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 10:15am</td>
															<td class="text-muted fs-15 font-weight-semibold">#36295675</td>
															<td class="text-muted fs-15 font-weight-semibold">+0,046BTC</td>
															<td><a href="#" class="btn btn-primary btn-md wd-100">Success</a></td>
														</tr>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="fa cf cf-eth "></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Ethereum</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 10:20am</td>
															<td class="text-muted fs-15 font-weight-semibold">#8965423688</td>
															<td class="text-muted fs-15 font-weight-semibold">0.023ETH</td>
															<td><a href="#" class="btn btn-warning btn-md wd-100">Pending</a></td>
														</tr>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="cf cf-ltc"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Litecoin</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 4:20am</td>
															<td class="text-muted fs-15 font-weight-semibold">#354975368</td>
															<td class="text-muted fs-15 font-weight-semibold">-107.26LTC</td>
															<td><a href="#" class="btn btn-primary btn-md wd-100">success</a></td>
														</tr>

														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="cf cf-xrp"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Ripple</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 11:00pm</td>
															<td class="text-muted fs-15 font-weight-semibold">#362975</td>
															<td class="text-muted fs-15 font-weight-semibold">+30.47XRP</td>
															<td><a href="#" class="btn btn-danger btn-md wd-100">cancelled</a></td>
														</tr>
														<tr class="border-bottom-0">
															<td class="coin_icon d-flex">
																<div class="table-crypto"> <i class="fa cf cf-usdt"></i> </div>
																<span class=" my-auto"> <b class="font-weight-medium">Tether</b></span>
															</td>
															<td class="text-muted fs-15 font-weight-semibold">25 jan 2020 6:28am</td>
															<td class="text-muted fs-15 font-weight-semibold">#75662354</td>
															<td class="text-muted fs-15 font-weight-semibold">0.023ETH</td>
															<td><a href="#" class="btn btn-warning btn-md wd-100">pending</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="card" id="transcation-crypto-1">
									<div class="card-header bd-b-0">
										<div class="d-flex">
											<h4 class="card-title font-weight-semibold mb-0">Wallet History</h4>
											<p class="text-muted fs-15 ml-auto">More</p>
										</div>
									</div>
									<div class="card-body p-0 pt-1">
										<div class="">
											<div class="table-responsive">
												<table class="table text-nowrap" >
													<thead class="border-top">
														<tr>
															<th class="bg-transparent">S.no</th>
															<th class="bg-transparent">Name</th>
															<th class="bg-transparent">Date</th>
															<th class="bg-transparent">Amount</th>
															<th class="bg-transparent">Status</th>
															<th class="bg-transparent">Action</th>
														</tr>
													</thead>
													<tbody>
														
														<tr class="">
															<td class="text-muted fs-15 font-weight-semibold">08.</td>
															<td class="text-dark fs-15 font-weight-semibold">Emily Lewis</td>
															<td class="text-muted fs-15 font-weight-semibold">19-11-2020 </td>
															<td class="text-muted fs-15 font-weight-semibold">$9.321.2</td>
															<td class="text-danger fs-15 font-weight-semibold">Cancel</td>
															<td class="">
																<a class="btn btn-outline-info btn-sm rounded-11 mr-2" data-toggle="tooltip" data-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"/></svg></i></a>
																<a class="btn btn-outline-danger btn-sm rounded-11" data-toggle="tooltip" data-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"/></svg></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-xl-4">
								<div class="card">
									<div class="card-header bd-b-0">
										<h4 class="card-title font-weight-semibold mb-0">Activity</h4>
									</div>
									<div class="card-body">
										<div class="card-block">
											<ul class="task-list" id="task-list">
												<li class="task-icon1">
													<div class="task-icon-1"> <i class="fe fe-trending-up text-primary"></i> </div>
													<h6>Received<span class="float-right fs-15">+0.25USTD</span></h6>
													<p class="text-muted fs-15">Bineance Coin</p>
												</li>
												<li class="task-icon2">
													<div class="task-icon-1"> <i class="fe fe-trending-up text-purple"></i> </div>
													<h6>Sent<span class="float-right fs-15">+0.25USTD</span></h6>
													<p class="text-muted fs-15">Ethereum</p>
												</li>
												<li class="task-icon3">
													<div class="task-icon-1"> <i class="fe fe-trending-down text-pink"></i> </div>
													<h6>Received<span class="float-right fs-15">-0.25USTD</span></h6>
													<p class="text-muted fs-15">Ethereum</p>
												</li>
												<li class="task-icon4">
													<div class="task-icon-1"> <i class="fe fe-trending-up text-danger"></i> </div>
													<h6>Received<span class="float-right fs-15">+0.25USTD</span></h6>
													<p class="text-muted fs-15">Bineance Coin</p>
												</li>
												<li class="task-icon5">
													<div class="task-icon-1"> <i class="fe fe-trending-down text-info"></i> </div>
													<h6>Sent<span class="float-right fs-15">-0.25USTD</span></h6>
													<p class="text-muted fs-15">Bineance Coin</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header pd-t-20 bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Earnings</h4>
											<div class="dash2-select  wd-150">
												<select name="coins" class="form-control custom-select select2">
													<option value="0" selected>Filter</option>
													<option value="1">Bitcoin</option>
													<option value="2">Ripple</option>
													<option value="3">Ethereum</option>
													<option value="4">Litecoin</option>
													<option value="5">DASH</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body p-4 mb-0">
										<div class="mb-5">
											<canvas id="chartArea-1" class="ht-150 w-100"></canvas>
										</div>
										<div class="row pl-2 pr-2">
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-primary"> <i class="cf cf-btc text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Bitcoin</h5><p class="text-success fs-18 font-weight-semibold">+112.13</p></div></div>
											</div>
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-secondary"> <i class="fa cf cf-eth  text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Ethereum</h5><p class="text-success fs-18 font-weight-semibold">+16.23</p></div></div>
											</div>
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-purple"> <i class="fa cf cf-usdt text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Tether</h5><p class="text-danger fs-18 font-weight-semibold">-12.23</p></div></div>
											</div>
											<div class="col-xl-6 col-md-3 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><div class="table-earning bg-success"> <i class="cf cf-xrp text-white"></i> </div><div class="earnings1"><h5 class="fs-18">Ripple</h5><p class="text-success fs-18 font-weight-semibold">+8.91</p></div></div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header pd-t-20 bd-b-0">
										<div class="d-md-flex justify-content-between">
											<h4 class="card-title font-weight-semibold mb-sm-3">Vistors</h4>
											<div class="dash2-select  wd-150">
												<select name="coins" class="form-control custom-select select2">
													<option value="0" selected>Week</option>
													<option value="1">Sunday</option>
													<option value="2">Monday</option>
													<option value="3">Tuesday</option>
													<option value="4">Wednesday</option>
													<option value="5">Friday</option>
													<option value="5">Saturday</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body p-4 mb-0">
										<div class="row">
											<div class="col-xl-5 col-4 col-md-3 col-lg-4 mt-2 mt-xl-0">
												<h6 class="mb-2 fs-18">Weekly</h6>
												<span class="text-muted fs-15 font-weight-semibold">92.8k ,4.63%</span>
												<p class="m-0 fs-18 text-purple"><i class="fa fa-arrow-up mr-2"></i>6.13%</p>
											</div>
											<div class="col-xl-7 col-8 col-md-9 col-lg-8 mt-2 mt-xl-0">
												<canvas id="statistics-1" class="w-100 ht-100"></canvas>
											</div>
										</div>
										<div class="row">
											<div class="col-xl-6 col-6 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><span class="legend bg-purple h-2 w-2 brround mr-3"></span><span>This Week</span></div>
											</div>
											<div class="col-xl-6 col-6 col-lg-3 mt-2 mt-xl-0">
												<div class=" d-flex"><span class="legend bg-dark h-2 w-2 brround mr-3"></span><span>Last week</span></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-4 END -->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<span>Copyright ?? 2022 - KaiserTech  Todos los derechos reservados.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->

			<!-- Sidebar -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="sidebar-icon">
					<a href="#"  class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>Seleccionar Empresa</h5>
					
				</div>
			</div>
			<!-- End Sidebar -->

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


	</body>
</html>