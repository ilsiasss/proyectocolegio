<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */

if (!isset($_GET["idm"])) {
    exit();
}

$idm = $_GET["idm"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT idm, nombrem,  edadm FROM maestro WHERE idm = ?;");
$sentencia->execute([$idm]);
$mascot = $sentencia->fetchObject();
if (!$mascot) {
    #No existe
    echo "¡No existe alguna mascot con ese IDM!";
    exit();
}

#Si la mascot existe, se ejecuta esta parte del código
?>
<?php include_once "encabezado.php"?>
<div class="row">
	<div class="col-12">
		<h1>EditarMaestro</h1>
		<form action="guardarDatosEditadosm.php" method="POST">
			<input type="hidden" name="idm" value="<?php echo $mascot->idm; ?>">

			<div class="form-group">
				<label for="nombrem">Nombre</label>
				<input value="<?php echo $mascot->nombrem; ?>" required name="nombrem" type="text" idm="nombrem" placeholder="Nombre de maestro" class="form-control">
			</div>
            
            



			<div class="form-group">
				<label for="edadm">Edad</label>
				<input value="<?php echo $mascot->edadm; ?>" required name="edadm" type="number" idm="edadm" placeholder="Edad de maestro" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Guardar</button>
			<a href="./listarm.php" class="btn btn-warning">Volver</a>
		</form>
	</div>
</div>
<?php include_once "pie.php"?>