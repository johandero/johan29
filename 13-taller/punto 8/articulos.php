<?php
// Array con información de los artículos
$articulos = [
    [
        'id' => 1,
        'titulo' => 'Artículo 1',
        'descripcion' => 'Descripción del Artículo 1',
        'precio' => '10.00'
    ],
    [
        'id' => 2,
        'titulo' => 'Artículo 2',
        'descripcion' => 'Descripción del Artículo 2',
        'precio' => '20.00'
    ],
    [
        'id' => 3,
        'titulo' => 'Artículo 3',
        'descripcion' => 'Descripción del Artículo 3',
        'precio' => '30.00'
    ],
    // Puedes agregar más artículos aquí
];

// Guardar el array en una sesión para acceder desde otras páginas
session_start();
$_SESSION['articulos'] = $articulos;
?>
