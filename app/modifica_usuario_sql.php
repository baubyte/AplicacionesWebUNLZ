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
    $queryModificar = "UPDATE usuario SET clave='$clave',rol='$rol' WHERE usuario='$usuario'";
    echo $queryModificar;
    $resultModificar = mysqli_query($conexion, $queryModificar);
    /** Redireccionamos */
    header("Location: bdd.php");
}
