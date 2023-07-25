<!DOCTYPE html>
<html>
<head>
    <title>Verificación de Edad</title>
</head>
<body>
    <h1>Verificación de Edad</h1>
    <form method="post">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" name="edad" required><br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $edad = $_POST['edad'];

        if ($edad < 18) {
            echo "No es mayor de edad";
        } else {
            echo "Es mayor de edad";
        }
    }
    ?>
</body>
</html>
