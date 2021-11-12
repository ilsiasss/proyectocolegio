<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php

#Salir si alguno de los datos no está presente
if (
    !isset($_POST["nombrem"]) ||
    !isset($_POST["edadm"]) ||
    !isset($_POST["idm"])
) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$idm = $_POST["idm"];
$nombrem = $_POST["nombrem"];
$edadm = $_POST["edadm"];

$sentencia = $base_de_datos->prepare("UPDATE maestro SET nombrem = ?, edadm = ? WHERE idm = ?;");
$resultado = $sentencia->execute([$nombrem, $edadm, $idm]); # Pasar en el mismo orden de los ?
if ($resultado === true) {
    header("Location: listarm.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}
