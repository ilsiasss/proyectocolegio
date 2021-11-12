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
		<h1>Agregar</h1>
		<form action="insertar.php" method="POST">

			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input required name="nombre" type="text" id="nombre" placeholder="Nombre de estudiante" class="form-control">
			</div>

            <div class="form-group">
				<label for="apellido">Apellido</label>
				<input required name="apellido" type="text" id="apellido" placeholder="Apellido de estudiante" class="form-control">
			</div>

			<div class="form-group">
				<label for="direccion">Direccion</label>
				<input required name="direccion" type="text" id="direccion" placeholder="Direccion de estudiante" class="form-control">
			</div>




			<div class="form-group">
				<label for="edad">Edad</label>
				<input required name="edad" type="number" id="edad" placeholder="Edad de estudiante" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listar.php" class="btn btn-warning">Ver todas</a>
		</form>
	</div>
</div>
<?php include_once "pie.php" ?>