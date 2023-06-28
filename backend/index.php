<?php
    require_once("vendor/autoload.php");

    use Db\Conexion;

    $db = new Conexion();
    $conn = $db->getConnection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="scripts/campers.php" method="POST">
        <label for="">Nombre del camper</label>
        <input type="text" name="nombreCamper">
        <label for="">Apellido del camper</label>
        <input type="text" name="apellidoCamper">
        <label for="">Fecha de nacimiento</label>
        <input type="date" name="fechaNac">
        <label for="">Id de la región</label>
        <input type="number" name="idReg">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>