<?php
	session_start();
	if(@$_SESSION['autentificado'] && $_SESSION['nombre'] && $_SESSION['rol']){
		include($_SESSION['site_path']."/dll/config.php"); 
		include($_SESSION['site_path']."/dll/class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	}else{
		echo "<script>location.href='../'</script>";
	}
?>