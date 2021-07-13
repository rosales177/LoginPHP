<?php
    require_once "conecion.php";
    require_once "controlador.php";
    $User = $_POST{'usuario'};
    $Pass = $_POST{'pass'};

    $comprobar = new BASEDATOS($conexion,$User,$Pass);
    $comprobar->Comprobar();
?>