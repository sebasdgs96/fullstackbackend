<!DOCTYPE html>
<html>
<head>
    <title>Datos Ingresados</title>
</head>
<body>
    <h1>Datos Ingresados:</h1>
    <?php
    if (isset($_GET['nombre']) && isset($_GET['apellido'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        echo "Nombre: $nombre<br>";
        echo "Apellido: $apellido<br>";
        echo "cedula: $cedula<br>";
    } else {
        echo "No se han recibido datos.";
    }
    ?>
</body>
</html>
