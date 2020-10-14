<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM</title>
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Archivos para Incluir -->
    <?php include('includes/menu.php'); ?>
</head>

<body class="container-fluid">
    <?php echo menu(); ?>
    <div class="row">
        <div class="col-12 text-center">
            <h1>Ejemplo de ABM</h1>
            <h3><small class="text-muted">ABM Usando Tabla y Formulario con MySQL</small></h3>
        </div>
    </div>
    <?php
    /**Filtro por Roles */
    $rolAdmin = 'administrador';
    $rolAnalista = 'analista';
    /**Datos de Conexión a la BDD */
    $usuario = 'root';
    $clave = '';
    $servidor = 'localhost';
    $baseDeDatos = 'tp1';
    /**Creamos la Conexión a la BDD */
    $conexion = mysqli_connect($servidor, $usuario, $clave) or die('No se ha Podido Conectar al Servidor');
    /**Nos Conectamos a la BDD */
    $db = mysqli_select_db($conexion, $baseDeDatos) or die('No se ha Podido Conectar con la Base de Datos');
    mysqli_set_charset($conexion,'utf8');
    /**Creamos las Consulta SQL */
    $queryCantUsuario = "SELECT COUNT(DISTINCT usuario) AS cant_usuarios FROM usuario";
    $queryCantAdmin = "SELECT COUNT(DISTINCT usuario) AS cant_admin FROM usuario WHERE rol ='$rolAdmin'";
    $queryCantAnalista = "SELECT COUNT(DISTINCT usuario) AS cant_analista FROM usuario WHERE rol ='$rolAnalista' AND LENGTH(clave)=5";
    $queryUsuarios = "SELECT DISTINCT * FROM usuario";
    /**Ejecutamos la Consultas */
    $resultCantUsuarios = mysqli_query($conexion, $queryCantUsuario) or die('No se ha Podido Ejecutar la Consulta Total de Usuarios');
    $resultCantAdmin = mysqli_query($conexion, $queryCantAdmin) or die('No se ha Podido Ejecutar la Consulta Total de Usuarios Administradores');
    $resultCantAnalista = mysqli_query($conexion, $queryCantAnalista) or die('No se ha Podido Ejecutar la Consulta Total de Usuarios Analistas con Clave Mayor a 5 Caracteres');
    $resultUsuarios = mysqli_query($conexion, $queryUsuarios) or die('No se ha Podido Ejecutar la Consulta de Usuarios');
    /**Obtenemos el Resultado y los Guardamos */
    while ($fila = mysqli_fetch_assoc($resultCantUsuarios)) {
        $totalUsuarios = $fila['cant_usuarios'];
    }
    while ($fila = mysqli_fetch_assoc($resultCantAdmin)) {
        $usuariosAdmin = $fila['cant_admin'];
    }
    while ($fila = mysqli_fetch_assoc($resultCantAnalista)) {
        $usuariosAnalista = $fila['cant_analista'];
    }
    /**Cerramos la Conexión */
    mysqli_close($conexion);
    ?>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">.
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table-dark">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Usuario</td>
                            <td>Clave</td>
                            <td>Rol</td>
                            <td>Acciones</td </tr> </thead> <tbody>
                            <?php
                            $row = 1;
                            while ($columna = mysqli_fetch_array($resultUsuarios)) {
                                echo "<tr>";
                                echo "<td>{$row}</td>";
                                echo "<td>{$columna['usuario']}</td>";
                                echo "<td>{$columna['clave']}</td>";
                                echo "<td>{$columna['rol']}</td>";
                                echo "<td>
                                        <a href='#' target='_blank'>Editar</a>
                                        <a href='#' target='_blank'>Eliminar</a>
                                        <a href='#' target='_blank'>Detalles</a>
                                    </td>";
                                echo "</tr>";
                                $row++;
                            }
                            ?>
                            </tbody>
                </table>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>