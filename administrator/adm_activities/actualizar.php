<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("select * from usuarios where id=$id");
	$lista_u=$miconexion->consulta_lista();
	$lista_rol[1]="Administrador";
	$lista_rol[2]="Usuario editor";
	$lista_rol[3]="Visitante";
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<h3>Actualizacion de Usuarios</h3>
	<form method="post" action="update.php">
		<div class="contenedor-inputs">
					<input type="text" name="nombre" placeholder="Nombres" value="<?php echo $lista_u[1];?>">
					<input type="hidden" name="id_u" value="<?php echo $lista_u[0];?>">
					<input type="text" name="apellido" placeholder="Apellidos" value="<?php echo $lista_u[2];?>">
					<input type="email" name="email" placeholder="Correo" value="<?php echo $lista_u[3];?>">
					 <select name="rol">
					  <option value="<?php echo $lista_u[4]; ?>"><?php echo $lista_rol[$lista_u[4]];?></option>
					  <option value="1">Administrador</option>
					  <option value="2">Usuario editor</option>
					  <option value="3">Visitante</option>
					</select> 
				</div>
		<button type="submit" class="btn-submit">Actualizar</button>
	</form>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>