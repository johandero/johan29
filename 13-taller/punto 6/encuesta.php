<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $opcion = isset($_GET['opcion']) ? trim($_GET['opcion']) : '';

    if (empty($opcion)) {
        die("No se seleccionó ninguna opción.");
    }

    // Archivo para almacenar las respuestas
    $archivo = 'encuesta.txt';

    // Leer el contenido del archivo y actualizar el conteo
    $conteo_respuestas = [];
    if (file_exists($archivo)) {
        $conteo_respuestas = json_decode(file_get_contents($archivo), true);
    }

    if (!isset($conteo_respuestas[$opcion])) {
        $conteo_respuestas[$opcion] = 0;
    }
    $conteo_respuestas[$opcion]++;

    // Guardar el conteo actualizado en el archivo
    file_put_contents($archivo, json_encode($conteo_respuestas));

    // Mostrar resultados
    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultados de la Encuesta</title>
    </head>
    <body>
        <h1>Resultados de la Encuesta</h1>
        <ul>";
    foreach ($conteo_respuestas as $estacion => $cantidad) {
        echo "<li>$estacion: $cantidad voto(s)</li>";
    }
    echo "</ul>
        <br>
        <a href='encuesta.html'>Volver a votar</a>
    </body>
    </html>";
}
?>
