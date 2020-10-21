<?php
    /**Datos de Conexión a la BDD */
    $usuario = 'root';
    $clave = '';
    $servidor = 'localhost';
    $baseDeDatos = 'tp1';
    /**Creamos la Conexión a la BDD */
    $conexion = mysqli_connect($servidor, $usuario, $clave) or die('No se ha Podido Conectar al Servidor');
    /**Nos Conectamos a la BDD */
    $db = mysqli_select_db($conexion, $baseDeDatos) or die('No se ha Podido Conectar con la Base de Datos');
    mysqli_set_charset($conexion, 'utf8');
