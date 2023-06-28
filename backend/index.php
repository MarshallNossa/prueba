<?php
    require("vendor/autoload.php");

    require_once("db/conexion.php");

    $conexion = new Conexion();
    $conexion->getConnection();

?>