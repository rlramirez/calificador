<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("delete from usuarios where id=$idr");
	echo "<script>location.href='index.php'</script>";
?>
