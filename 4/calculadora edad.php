<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Edad</title>
</head>
<body>
    <h1>Calculadora de Edad</h1>
    <form method="post">
        <label for="fecha_nacimiento">Ingrese su fecha de nacimiento (AAAA-MM-DD):</label>
        <input type="date" name="fecha_nacimiento" required><br><br>
        <input type="submit" name="submit" value="Calcular Edad">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $hoy = date("Y-m-d");
        $edad = date_diff(date_create($fecha_nacimiento), date_create($hoy))->y;

        echo "<h2>Resultado:</h2>";
        echo "Su edad es $edad años, por tanto: ";
        if ($edad < 18) {
            echo "No es mayor de edad";
        } else {
            echo "Es mayor de edad";
        }
    }
    ?>
</body>
</html>
