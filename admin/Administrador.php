<!DOCTYPE html>
<html lang="es">
<head>
	<title>Instituto CDK | Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar" class="cover" style="background-image: url(./assets/img/sideBarFont.jpg);">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"  ></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Instituto CDK <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<p><center><i class="text-center zmdi zmdi-account zmdi-hc-5x"> </i> </center></p>
					<figcaption class="text-center text-titles">ADMINISTRADOR</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">					
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="Administrador.php">
						<i class="zmdi zmdi-home"></i> Inicio
					</a>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-accounts-alt"></i> Plantel Educativo <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>

					<ul class="list-unstyled full-box">
						<li>
							<a href="admV.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
							<a href="dirV.php"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Directores</a>
						</li>
						<li>
							<a href="profV.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Profesores</a>
						</li>
						<li>
							<a href="estV.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Estudiantes</a>
						</li>
						
					</ul>
				</li>		
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">

		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">Bienvenido (a) <small>Administrador (a)</small></h1>
			</div>
			<h1> <small>Sistema de registro del Instituto CDK</small></h1>

		</div>		
	</section>

	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>