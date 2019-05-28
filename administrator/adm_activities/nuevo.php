<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Usuario</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Crud</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Nuevo Usuario</h3>
			<form method="post" action="nuevo_u.php">
				<div class="contenedor-inputs">
					<input type="text" name="name" placeholder="Nombres">
					<input type="text" name="lastname" placeholder="Apellidos">
					<input type="email" name="email" placeholder="Correo" required="required">
					 <select name="rol">
					  <option value="">Seleccione el rol</option>
					  <option value="1">Administrador</option>
					  <option value="2">Usuario editor</option>
					  <option value="3">Visitante</option>
					</select> 
					<input type="text" name="username" placeholder="Username" required="required">
					<input type="password" name="userpass" placeholder="Password" required="required">
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>