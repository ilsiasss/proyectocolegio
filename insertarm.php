<?php
/*
CRUD con PostgreSQL y PHP
@author parzibyte [parzibyte.me/blog]
@date 2019-06-17

================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["nombrem"]) || !isset($_POST["edadm"])) {
    exit();
}

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombrem = $_POST["nombrem"];
$edadm = $_POST["edadm"];

/*
Al incluir el archivo "base_de_datos.php", todas sus variables están
a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
copiado y pegado el código
 */
$sentencia = $base_de_datos->prepare("INSERT INTO maestro(nombrem, edadm) VALUES (?, ?);");
$resultado = $sentencia->execute([$nombrem, $edadm]); # Pasar en el mismo orden de los ?

#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: listarm.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
