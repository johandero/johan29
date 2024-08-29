<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $opcion = isset($_GET['opcion']) ? trim($_GET['opcion']) : '';

    if (empty($opcion)) {
        die("No se seleccionó ninguna opción.");
    }

    // Archivo para almacenar los votos
    $archivo = 'votos.txt';

    // Leer el contenido del archivo y actualizar el conteo
    $conteo_votos = [];
    if (file_exists($archivo)) {
        $conteo_votos = json_decode(file_get_contents($archivo), true);
    }

    if (!isset($conteo_votos[$opcion])) {
        $conteo_votos[$opcion] = 0;
    }
    $conteo_votos[$opcion]++;

    // Guardar el conteo actualizado en el archivo
    file_put_contents($archivo, json_encode($conteo_votos));

    // Mostrar resultados
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultados de Votación</title>
    </head>
    <body>
        <h1>Resultados de la Votación</h1>
        <ul>";
    foreach ($conteo_votos as $color => $cantidad) {
        echo "<li>$color: $cantidad voto(s)</li>";
    }
    echo "</ul>
        <br>
        <a href='votacion.html'>Volver a votar</a>
    </body>
    </html>";
}
?>
