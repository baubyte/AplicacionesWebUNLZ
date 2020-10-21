<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABM</title>
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- Archivos para Incluir -->
    <?php include('includes/menu.php'); ?>
    <?php include('includes/conexion.php'); ?>
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
    <div class="row text-center">
        <div class="col-3">
            <button type="button" class="btn btn-success">
                Cantidad de Usuarios <span class="badge badge-light"><?php echo $totalUsuarios; ?></span>
            </button>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-danger">
                Administradores <span class="badge badge-light"><?php echo $usuariosAdmin; ?></span>
            </button>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-warning">
                Analistas <span class="badge badge-light"><?php echo $usuariosAnalista; ?></span>
            </button>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-info">
                Nuevo Usuario
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">.
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover table-dark table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Clave</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </tr> 
                    </thead> 
                    <tbody>
                            <?php
                            $row = 1;
                            while ($columna = mysqli_fetch_array($resultUsuarios)) {
                                echo "<tr>";
                                echo "<th scope='row' class='text-center'>{$row}</th>";
                                echo "<td>{$columna['usuario']}</td>";
                                echo "<td>{$columna['clave']}</td>";
                                echo "<td>{$columna['rol']}</td>";
                                echo "<td class='text-center'>
                                        <a href='#' target='_blank' class='btn btn-success'><i class='fas fa-user-edit'></i></a> | 
                                        <a href='#' target='_blank' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a> | 
                                        <a href='#' target='_blank' class='btn btn-info'><i class='fas fa-eye'></i></a>
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