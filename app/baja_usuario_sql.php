<?php
include('includes/conexion.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['roles'];
$btn = $_POST['btn'];
/**Comprobamos Si quiere borrar*/
if ($btn == 0) {
    /** Redireccionamos */
    header("Location: bdd.php");
} else {
    $queryBaja = "DELETE FROM usuario WHERE usuario='$usuario'";
    $resultBaja = mysqli_query($conexion, $queryBaja);
    /** Redireccionamos */
    header("Location: bdd.php");
}
