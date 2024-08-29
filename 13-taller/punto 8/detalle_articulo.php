<?php
session_start();

// Verificar si se ha enviado un ID
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    
    // Verificar si el ID es válido y el artículo existe en la sesión
    if (isset($_SESSION['articulos'])) {
        $articulos = $_SESSION['articulos'];
        $articulo_encontrado = null;

        foreach ($articulos as $articulo) {
            if ($articulo['id'] === $id) {
                $articulo_encontrado = $articulo;
                break;
            }
        }

        if ($articulo_encontrado) {
            // Mostrar los detalles del artículo
            echo "<!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Detalle del Artículo</title>
            </head>
            <body>
                <h1>Detalle del Artículo</h1>
                <h2>{$articulo_encontrado['titulo']}</h2>
                <p>{$articulo_encontrado['descripcion']}</p>
                <p>Precio: \${$articulo_encontrado['precio']}</p>
                <br>
                <a href='lista_articulos.html'>Volver a la lista de artículos</a>
            </body>
            </html>";
        } else {
            echo "<p>Artículo no encontrado.</p>";
        }
    } else {
        echo "<p>No se han encontrado artículos.</p>";
    }
} else {
    echo "<p>ID de artículo no válido.</p>";
}
?>
