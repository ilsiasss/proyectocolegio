<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo elimina un dato por ID sin
pedir confirmación. El ID viene de la URL
================================
*/
if (!isset($_GET["idm"])) {
    exit();
}

$idm = $_GET["idm"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM maestro WHERE idm = ?;");
$resultado = $sentencia->execute([$idm]);
if ($resultado === true) {
    header("Location: listarm.php");
} else {
    echo "Algo salió mal";
}
