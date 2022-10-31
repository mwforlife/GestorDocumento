<?php
require 'php/controller.php';
$c = new Controller();
?>
<!DOCTYPE html>
<html lang="es">

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
								<a class="nav-sub-link" href="isapres.php">Institución de Salud</a>
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
								<h6 class="main-notification-title">
									<?php //echo $_SESSION['NOMBRE_USUARIO'];
									?></h6>
							</div>
							<a class="dropdown-item" href="close.php">
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
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user"><img alt="avatar" src="../../assets/img/users/1.jpg"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title"><?php //echo $_SESSION['NOMBRE_USUARIO']; ?></h6>
								</div>
								
								<a class="dropdown-item" href="close.php">
									<i class="fe fe-power"></i> Cerrar Sesión
								</a>
							</div>
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
							<h1 class="main-content-title tx-30">CAUSAL TERMINO CONTRATO</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
							</ol>
						</div>
					</div>
					<!-- End Page Header -->
					<div class="row">
						<div class="col-lg-12">
							<div class="card orverflow-hidden">
								<div class="card-body">
									<div>
										<h6 class="main-content-label mb-1">Registro de Causal Termino Contrato</h6>
										<p class="text-mutted card-sub-title"></p>
									</div>
									<form id="RegisForm" name="RegisForm" class="needs-validation was-validated">
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group has-success mg-b-0">
													<label>Codigo</label>
													<input class="form-control" id="Codigo" name="Codigo" placeholder="Codigo" required="" type="text" value="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group has-success mg-b-0">
													<label>Codigo (PREVIRED)</label>
													<input class="form-control" id="CodigoPrevired" name="CodigoPrevired" placeholder="Codigo (PREVIRED)" required="" type="text" value="">
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group has-success mg-b-0">
													<label>Nombre</label>
													<input class="form-control" id="Nombre" name="Nombre" placeholder="Causal Termino Contrato" required="" type="text" value="">
												</div>
											</div>
											<div class="col-md-12 mt-3 text-right">
												<button type="reset" href="#" class="btn btn-warning btn-md"> <i class="fa fa-refresh"></i> Restablecer</button>
												<button type="submit" href="#" class="btn btn-primary btn-md"> <i class="fa fa-save"></i> Registrar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- ROW-4 opened -->
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card transcation-crypto" id="transcation-crypto">
								<div class="card-header bd-b-0">
									<h4 class="card-title font-weight-semibold mb-0">Listado Causal Termino Contrato</h4>
								</div>
								<div class="card-body">
									<div class="">
										<div class="table-responsive">
											<table class="table text-nowrap" id="example1">
												<thead class="border-top text-center">
													<tr>
														<th class="bg-transparent">Codigo</th>
														<th class="bg-transparent">Codigo (PREVIRED)</th>
														<th class="bg-transparent">Institución</th>
														<th class="bg-transparent text-center">Accion</th>
													</tr>
												</thead>
												<tbody class="text-center">
													<?php
													$lista = $c->listarcausalterminacioncontrato();
													if (count($lista) > 0) {
														foreach ($lista as $object) {
															echo "<tr>
																		<td>" . $object->getCodigo() . "</td>
																		<td>" . $object->getCodigoPrevired() . "</td>
																		<td>" . $object->getNombre() . "</td>
																		<td class='text-center'>
																			<a href='javascript:void(0)' class='btn btn-sm btn-primary' data-toggle='modal' data-target='#modaledit' onclick='Editar(" . $object->getId() . ")'><i class='fa fa-edit'></i></a>
																			<a href='javascript:void(0)' class='btn btn-sm btn-danger' onclick='Eliminar(" . $object->getId() . ")'><i class='fa fa-trash'></i></a>
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
						<span>Copyright © 2022 - KaiserTech Todos los derechos reservados.</span>
					</div>
				</div>
			</div>
		</div>
		<!--End Footer-->



		<!-- Edit Modal -->
		<div class="modal fade" id="modaledit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Edición</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="content">

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


	<!-- Sticky js -->
	<script src="assets/js/sticky.js"></script>

	<!-- Custom js -->
	<!-- Custom js -->
	<script src="assets/js/custom.js"></script>
	<script src="JsFunctions/Alert/toastify.js"></script>
	<script src="JsFunctions/Alert/sweetalert2.all.min.js"></script>
	<script src="JsFunctions/Alert/alert.js"></script>
	<script src="JsFunctions/causal.js"></script>



</body>

</html>