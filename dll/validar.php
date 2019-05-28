<?php
   if(session_id()=="")
   {
      session_start();
   }
   if($_POST)
   {
      //if($_SESSION['autentificado']!=TRUE)
      //{
         	$username=$_POST['username'];
            $userpass=md5($_POST['userpass']); 

         include ("config.php");
			include ("class_mysqli.php");
			$miconexion = new clase_mysqli;
			$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
			$miconexion->consulta("select * from usuarios where user='$username' and password='$userpass'");
			$list=$miconexion->consulta_lista();
			if ($list[0]) {
		         $_SESSION['autentificado'] = TRUE;
		         $_SESSION['nombre'] = $list[1]." ".$list[2];
		         $_SESSION['rol'] = $list[4]; 
               $_SESSION['site_path']=$site_path;
		         echo "<script>location.href='../administrator/dashboard.php'</script>";
			}else{
				echo '<script>alert("Datos Incorrectos...");</script>';
		        echo "<script>location.href='../'</script>";
			}
      //}
   }
 
   if(@$_GET['salir']=="true")
   {
      session_unset();
      session_destroy();
   }
?>