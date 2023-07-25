<?php
// Datos de acceso a la base de datos
$servername = "localhost"; 
$username = "root"; 
$password = ""; 

$nombre = $_POST['nombre'];

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}


$sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<h2>Resultados de la búsqueda:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Email</th></tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellido'] . "</td>";
        echo "<td>" . $fila['edad'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
