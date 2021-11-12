<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo lista todos los
datos de la tabla, pero en un
ciclo usando un cursor, no
a través de un arreglo
(se supone que es más eficiente)
================================
*/
?>
<?php

include_once "base_de_datos.php";
$consulta = "select idm, nombrem,  edadm from maestro";
# Preparar sentencia e indicar que vamos a usar un cursor
$sentencia = $base_de_datos->prepare($consulta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
# Ejecutar sin parámetros
$sentencia->execute();
# Abajo iteramos
?>

<!--Recordemos que podemos intercambiar HTML y PHP como queramos-->
<?php include_once "encabezado.php" ?>
<div class="row">
<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
	<div class="col-12">
		<h1>Lista de Maestro</h1>
		<a href="//parzibyte.me/blog" target="_blank">By Parzibyte</a>
		<br>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Edad</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<!--
					Y aquí usamos el ciclo while y fetchObject, el cuerpo
					del ciclo queda intacto pero ahora estamos usando
					cursores :)
				-->
				<?php while ($mascot = $sentencia->fetchObject()){ ?>
					<tr>
						<td><?php echo $mascot->idm ?></td>
						<td><?php echo $mascot->nombrem ?></td>
						<td><?php echo $mascot->edadm ?></td>
						<td><a class="btn btn-warning" href="<?php echo "editarm.php?idm=" . $mascot->idm?>">Editar 📝</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminarm.php?idm=" . $mascot->idm?>">Eliminar 🗑️</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php include_once "pie.php" ?>