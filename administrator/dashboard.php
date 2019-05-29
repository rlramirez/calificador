<?php
include("security/security.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<meta charset="utf-8">
	<meta name="description" content="Visualización de aves del Ecuador">
	<meta name="keywords" charset="aves, ecuador, turismo, loja, bird">
	<meta name="author" content="UTPL by @rlramirez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
</head>
<body>
	<section class="fisrtsidebar">
		<header>
			<h1><i class="fas fa-seedling"></i> DASHBOARD ADMINSITRATOR</h1>
		</header>
		<nav class="mainmenu">
			<a href="dashboard.php">Dashboard</a>
			<a href="./adm_birds/index.php">Aves</a>
			<a href="">Noticias</a>
			<a href="./adm_services/index.php">Servicios</a>
			<a href="">Lugares</a>
			<a href="">Personal</a>
			<a href="./adm_visitas/index.php">Visitas</a>
			<a href="./adm_activities/adm_sensores.php">Sensores</a>
			<a href="./adm_activities/index.php">Actividades</a>
			<a href="./adm_test/index.php">Examenes</a>
		</nav>
	</section>
	<section class="secondsidebar">
		<section class="info-user">
			<nav class="top-menu">
				<div class="nameperfil"> <i class="fas fa-male"></i> <?php echo utf8_encode($_SESSION['nombre']);?></div>
				<a href=""><i class="fas fa-user-alt"></i> Perfir</a>
				<a href="security/exit.php?salir=true"><i class="fas fa-power-off"></i> Salir</a>
			</nav>
		</section>
		<section class="side-container">
			body
		</section>
	</section>
</body>
</html>