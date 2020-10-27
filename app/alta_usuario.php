<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Usuario</title>
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- Archivos para Incluir -->
    <!-- PHP -->
    <?php
    $mensaje = 'Ingrese el Nuevo Registro';
    $typeAlert ='success';
    if (isset($_GET['mensaje'])) {
        switch ($_GET['mensaje']) 
        {
            case 'uno':
                $mensaje = 'El Usuario ya Existe en la Base de Datos';
                $typeAlert = 'danger';
                break;
            case 'dos':
                break;
        }
    }
    ?>
</head>

<body class="container-fluid">
    <!-- Titulo de Pagina -->
    <div class="row">
        <div class="col-12 text-center">
            <h1>Alta de Usuario</h1>
            <h3><small class="text-muted">ABM Usando Tabla y Formulario con MySQL</small></h3>
        </div>
    </div>
    <!-- Formulario -->
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <form action="alta_usuario_sql.php" method="post">
                <hr style="border-top: 2px solid black;">
                <!-- Nombres del Usuario -->
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingrese Usuario" class="form-control" required>
                </div>
                <!-- Clave del Usuario -->
                <div class="form-group">
                    <label for="clave">Clave del Usuario:</label>
                    <input type="password" id="clave" name="clave" placeholder="Ingrese su clave" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="roles">Rol de Usuario</label>
                    <select name="roles" id="roles" class="form-control" required>
                        <option selected disabled value="">Seleccione</option>
                        <option value="administrador">Administrador</option>
                        <option value="analista">Analista</option>
                    </select>
                </div>
                <hr style="border-top: 2px solid black;">
                <button type="submit" class="btn btn-success btn-block" name="btn" value="Guardar">Guardar</button>
                <hr style="border-top: 2px solid black;">
                <div class="alert alert-<?php echo $typeAlert ?> text-center" role="alert"><?php echo $mensaje;?></div>
            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>