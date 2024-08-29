<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los valores del formulario
    $numero1 = isset($_POST['numero1']) ? (float)$_POST['numero1'] : 0;
    $numero2 = isset($_POST['numero2']) ? (float)$_POST['numero2'] : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

    // Inicializar el resultado
    $resultado = null;

    // Realizar la operación según el tipo seleccionado
    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;
        case 'division':
            // Verificar división por cero
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
            } else {
                $resultado = 'Error: División por cero';
            }
            break;
        default:
            $resultado = 'Operación no válida';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Calculadora</title>
</head>
<body>
    <h1>Resultado</h1>
    <p><strong>Número 1:</strong> <?php echo htmlspecialchars($numero1); ?></p>
    <p><strong>Número 2:</strong> <?php echo htmlspecialchars($numero2); ?></p>
    <p><strong>Operación:</strong> <?php echo htmlspecialchars($operacion); ?></p>
    <p><strong>Resultado:</strong> <?php echo htmlspecialchars($resultado); ?></p>
    <br>
    <a href="index.html">Volver a la calculadora</a>
</body>
</html>
