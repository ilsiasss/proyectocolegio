<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario que
se envía a insertar.php, el cual guardará
los datos
================================
*/
?>
<?php include_once "encabezado.php" ?>
<div class="row">
	<div class="col-12">
		<h1>AgregarMaestro</h1>
		<form action="insertarm.php" method="POST">

			<div class="form-group">
				<label for="nombrem">Nombre</label>
				<input required name="nombrem" type="text" idm="nombrem" placeholder="Nombre de maestro" class="form-control">
			</div>

           




			<div class="form-group">
				<label for="edadm">Edad</label>
				<input required name="edadm" type="number" idm="edadm" placeholder="Edad de maestro" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listarm.php" class="btn btn-warning">Ver todas</a>
		</form>
	</div>
</div>
<?php include_once "pie.php" ?>