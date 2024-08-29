<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los valores del formulario
    $cantidad = isset($_POST['cantidad']) ? (float)$_POST['cantidad'] : 0;
    $unidad_origen = isset($_POST['unidad_origen']) ? $_POST['unidad_origen'] : '';
    $unidad_destino = isset($_POST['unidad_destino']) ? $_POST['unidad_destino'] : '';

    // Inicializar el resultado
    $resultado = null;

    // Función para realizar la conversión
    function convertir($cantidad, $unidad_origen, $unidad_destino) {
        $conversiones = [
            // Metros
            'metros_pies' => 3.28084,
            'metros_millas' => 0.000621371,
            
            // Libras a kilogramos
            'libras_kilogramos' => 0.453592,

            // Gramos a kilogramos
            'gramos_kilogramos' => 0.001,
        ];

        $clave = $unidad_origen . '_' . $unidad_destino;
        return isset($conversiones[$clave]) ? $cantidad * $conversiones[$clave] : 'Conversión no disponible';
    }

    // Realizar la conversión según la unidad de origen y destino
    if ($unidad_origen === 'metros' && $unidad_destino === 'pies') {
        $resultado = convertir($cantidad, 'metros', 'pies');
    } elseif ($unidad_origen === 'metros' && $unidad_destino === 'millas') {
        $resultado = convertir($cantidad, 'metros', 'millas');
    } elseif ($unidad_origen === 'libras' && $unidad_destino === 'kilogramos') {
        $resultado = convertir($cantidad, 'libras', 'kilogramos');
    } elseif ($unidad_origen === 'gramos' && $unidad_destino === 'kilogramos') {
        $resultado = convertir($cantidad, 'gramos', 'kilogramos');
    } else {
        $resultado = 'Conversión no disponible';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversión</title>
</head>
<body>
    <h1>Resultado de la Conversión</h1>
    <p><strong>Cantidad:</strong> <?php echo htmlspecialchars($cantidad); ?></p>
    <p><strong>Unidad de Origen:</strong> <?php echo htmlspecialchars($unidad_origen); ?></p>
    <p><strong>Unidad de Destino:</strong> <?php echo htmlspecialchars($unidad_destino); ?></p>
    <p><strong>Resultado:</strong> <?php echo htmlspecialchars($resultado); ?></p>
    <br>
    <a href="conversor.html">Volver al conversor</a>
</body>
</html>
