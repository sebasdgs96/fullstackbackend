<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <form method="post">
        <label for="num1">Ingrese el primer número:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Ingrese el segundo número:</label>
        <input type="number" name="num2" required><br><br>
        
        <label for="operacion">Seleccione el tipo de operación:</label>
        <select name="operacion" required>
            <option value="SUMA">Suma</option>
            <option value="RESTA">Resta</option>
            <option value="MULTIPLICACIÓN">Multiplicación</option>
            <option value="DIVISIÓN">División</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Operar">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'SUMA':
                $resultado = $num1 + $num2;
                break;
            case 'RESTA':
                $resultado = $num1 - $num2;
                break;
            case 'MULTIPLICACIÓN':
                $resultado = $num1 * $num2;
                break;
            case 'DIVISIÓN':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: No se puede dividir entre cero.";
                }
                break;
            default:
                $resultado = "Operación inválida.";
                break;
        }

        echo "<br>Resultado: $resultado";
    }
    ?>
</body>
</html>
