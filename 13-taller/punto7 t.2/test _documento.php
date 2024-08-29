<?php
// Incluir los archivos de clases
include 'Documento.php';
include 'Libro.php';
include 'Articulo.php';
include 'Reporte.php';

// Crear instancias de cada tipo de documento
$libro = new Libro('El Gran Gatsby', 'F. Scott Fitzgerald', 180);
$articulo = new Articulo('El Futuro de la IA', 'John Doe', 'Tech Today');
$reporte = new Reporte('Informe Anual 2023', 'Jane Smith', '2023-12-31');

// Usar los métodos de cada documento
echo "<h2>Información del Libro</h2>";
echo "Título: " . $libro->getTitulo() . "<br>";
echo "Autor: " . $libro->getAutor() . "<br>";
echo "Número de páginas: " . $libro->getNumeroPaginas() . "<br>";
echo "Acción: " . $libro->imprimir() . "<br>";
echo "Guardar: " . $libro->guardar() . "<br>";

echo "<hr>";

echo "<h2>Información del Artículo</h2>";
echo "Título: " . $articulo->getTitulo() . "<br>";
echo "Autor: " . $articulo->getAutor() . "<br>";
echo "Revista: " . $articulo->getRevista() . "<br>";
echo "Acción: " . $articulo->imprimir() . "<br>";
echo "Guardar: " . $articulo->guardar() . "<br>";

echo "<hr>";

echo "<h2>Información del Reporte</h2>";
echo "Título: " . $reporte->getTitulo() . "<br>";
echo "Autor: " . $reporte->getAutor() . "<br>";
echo "Fecha: " . $reporte->getFecha() . "<br>";
echo "Acción: " . $reporte->imprimir() . "<br>";
echo "Guardar: " . $reporte->guardar() . "<br>";
?>
