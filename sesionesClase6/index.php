<?php
    session_start();
    $_SESSION['user'] = 'BAUBYTE';
    $_SESSION['pass'] = 'BAUBYTEPASS';
    $_SESSION['dni'] = '12345678';
    /**Contador de Visitas Ejemplo */
    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador']=1;
    }else $_SESSION['contador']++;
    echo $_SESSION['contador'].'<br>';
    /**Array en Sesiones */
    $paises = array('Argentina', 'Brasil', 'Paraguay');
    $_SESSION['paises'] = $paises; 
    echo session_id();
?>