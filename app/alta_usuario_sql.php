<?php
include('includes/conexion.php');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['roles'];
/**Verificamos si el Usuario existe en la BDD*/
$query = "SELECT COUNT(usuario) AS cant_usuario FROM usuario WHERE usuario ='$usuario'";
$result = mysqli_query($conexion,$query);
    while ($array = mysqli_fetch_assoc($result)) {
        $existe = $array['cant_usuario'];
    }
    /**Comprobamos Si el Usuario existe
     * sino podemos insertar en la base de datos 
     */
    if ($existe>=1) {
        /**Modificamos el Mensaje y Redireccionamos */
        header("Location: alta_usuario.php?mensaje=uno");
    }else{
        $queryAlta = "INSERT INTO usuario (usuario, clave, rol) VALUES ('$usuario', '$clave', '$rol')";
        $resultAlta= mysqli_query($conexion,$queryAlta);
         /** Redireccionamos */
        header("Location: bdd.php");
    }
