<?php
	extract($_POST);
	include('../adm_header.php');
	$pass=md5($userpass);
	$miconexion->consulta("insert into usuarios values ('','$name','$lastname','$email','$rol','$username','$pass')");
	echo "<script>location.href='index.php'</script>";
?>
