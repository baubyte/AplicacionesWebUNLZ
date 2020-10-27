<?php
/**Recibimos los Datos */
$pNombre = $_POST['nombre'];
$pApellido = $_POST['apellido'];
$pClave = $_POST['clave'];
$pBtn = $_POST['btn'];
/**Recibimos los Checks */
if (isset($_POST['materia1'])) {
    $pMateria1 = $_POST['materia1'];
}else $pMateria1="";
if (isset($_POST['materia2'])) {
    $pMateria2 = $_POST['materia2'];
}else $pMateria2="";
if (isset($_POST['materia3'])) {
    $pMateria3 = $_POST['materia3'];
}else $pMateria3="";
$materias = $pMateria1 .' '.$pMateria2.' '.$pMateria3 ;
/**Recibimos los Radios */
if (isset($_POST['nivel'])) {
    $pNivel = $_POST['nivel'];
}else $pNivel="Nivel no Seleccionado";
$pMotivos = $_POST['motivos'];
/**Mostramos los Valores */
echo "Nombre: ".$pNombre."<br>";
echo "Apellido: ".$pApellido."<br>";
echo "Clave: ".$pClave."<br>";
echo "Materias: ".$materias."<br>";
echo "Nivel de Ingles: ".$pNivel."<br>";
echo "Motivo: ".$pMotivos."<br>";