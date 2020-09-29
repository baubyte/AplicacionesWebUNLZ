<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Archivos CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Archivos para Incluir -->
    <?php include('includes/menu.php'); ?>
</head>

<body class="container-fluid">
    <?php echo menu(); ?>
    <!-- Titulo de Pagina -->
    <div class="alert alert-dark" role="alert">
        <h5 class="text-center">Envíos de Datos al Servidor</h5>
    </div>
    <!-- Formulario -->
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
            <form action="formularioRecepcion.php" method="post">
                <hr style="border-top: 2px solid black;">
                <!-- Nombres del Usuario -->
                <div class="form-group">
                    <label for="nombre">Nombre del Usuario:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese su Nombre" class="form-control">
                </div>
                <!-- Apellidos del Usuario -->
                <div class="form-group">
                    <label for="apellido">Apellido del Usuario:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" class="form-control">
                </div>
                <!-- Clave del Usuario -->
                <div class="form-group">
                    <label for="clave">Clave del Usuario:</label>
                    <input type="password" id="clave" name="clave" placeholder="Ingrese su clave" class="form-control">
                </div>
                <!-- CheckBox Materias -->
                <hr style="border-top: 2px solid black;">
                <h6 class="font-italic">Seleccione sus Materias Favoritas</h6>
                <div class="form-group">
                    <input type="checkbox" name="materia1" id="materia1" value="php">
                    <label for="materia1">Aplicaciones Web</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="materia2" id="materia2" value="java">
                    <label for="materia2">Aplicaciones Java</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="materia3" id="materia3" value="net">
                    <label for="materia3">Aplicaciones .NET</label>
                </div>
                <hr style="border-top: 2px solid black;">
                <!-- CheckBox Niveles de Ingles -->
                <fieldset>
                    <legend>Seleccione su Nivel de Inglés.</legend>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" id="nivel" value="alto"> Alto
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" id="nivel" value="medio"> Medio
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" name="nivel" id="nivel" value="bajo"> Bajo
                        </label>
                    </div>
                </fieldset>
                <hr style="border-top: 2px solid black;">
                <div class="form-group">
                    <label for="motivos">Seleccione el Motivo de Su Consulta</label>
                    <select name="motivos" id="motivos">
                        <option value="consulta">Consulta</option>
                        <option value="sugerencia">Sugerencia</option>
                        <option value="queja">Queja</option>
                    </select>
                </div>
                <hr style="border-top: 2px solid black;">
                <button type="submit" class="btn btn-primary" name="btn" value="Enviar">Enviar</button>
            </form>
        </div>
        <div class="col-md-2">

        </div>
    </div>
    <!-- JavaScript -->
    <script src="jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</html>