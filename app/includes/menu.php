<?php
function menu()
{
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php">App Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navEjemplos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       ABM
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navEjemplos">
                        <a class="dropdown-item" href="formAltaUsuario.php">Alta Usuarios</a>
                        <a class="dropdown-item" href="bdd.php">Listado de Usuarios</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<?php
}
?>