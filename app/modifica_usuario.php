<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <!-- PHP -->
    <?php
    $usuario = $_GET['usuario'];
    $clave = $_GET['clave'];
    $rol =$_GET['rol'];
    ?>
</head>

<body class="container-fluid">
    <!-- Titulo de Pagina -->
    <div class="row">
        <div class="col-12 text-center">
            <h1>Modificar Usuario</h1>
            <h3><small class="text-muted">ABM Usando Tabla y Formulario con MySQL</small></h3>
        </div>
    </div>
    <!-- Formulario -->
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <form action="modifica_usuario_sql.php" method="post">
                <hr style="border-top: 2px solid black;">
                <!-- Nombres del Usuario -->
                <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $usuario ?>" required readonly>
                </div>
                <!-- Clave del Usuario -->
                <div class="form-group">
                    <label for="clave">Clave del Usuario:</label>
                    <input type="password" id="clave" name="clave" class="form-control" value="<?php echo $clave ?>" required>
                </div>
                <div class="form-group">
                    <label for="roles">Rol de Usuario</label>
                    <select name="roles" id="roles" class="form-control" required>
                        <option value="administrador" <?php echo ($rol =='administrador') ? 'selected' : '' ;?> >Administrador</option>
                        <option value="analista" <?php echo ($rol =='analista') ? 'selected' : '' ;?> >Analista</option>
                    </select>
                </div>
                <hr style="border-top: 2px solid black;">
                <button type="submit" class="btn btn-success btn-block" name="btn" value="1">Modificar</button>
                <button type="submit" class="btn btn-danger btn-block" name="btn" value="0">Cancelar</button>
                <hr style="border-top: 2px solid black;">
            </form>
        </div>
        <div class="col-md-3">

        </div>
    </div>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>