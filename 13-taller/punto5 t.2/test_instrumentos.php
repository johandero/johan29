<?php
// Incluir los archivos de clases
include 'InstrumentoMusical.php';
include 'Guitarra.php';
include 'Piano.php';
include 'Violin.php';

// Crear instancias de cada tipo de instrumento
$guitarra = new Guitarra('Madera', 6); // Material, número de cuerdas
$piano = new Piano('Metal', 88); // Material, número de teclas
$violin = new Violin('Madera', 4); // Material, número de cuerdas

// Usar los métodos de cada instrumento
echo "<h2>Información de la Guitarra</h2>";
echo "Tipo: " . $guitarra->getTipo() . "<br>";
echo "Material: " . $guitarra->getMaterial() . "<br>";
echo "Número de cuerdas: " . $guitarra->getNumCuerdas() . "<br>";
echo "Acción: " . $guitarra->tocar() . "<br>";
echo "Afinación: " . $guitarra->afinar() . "<br>";

echo "<hr>";

echo "<h2>Información del Piano</h2>";
echo "Tipo: " . $piano->getTipo() . "<br>";
echo "Material: " . $piano->getMaterial() . "<br>";
echo "Número de teclas: " . $piano->getNumTeclas() . "<br>";
echo "Acción: " . $piano->tocar() . "<br>";
echo "Afinación: " . $piano->afinar() . "<br>";

echo "<hr>";

echo "<h2>Información del Violín</h2>";
echo "Tipo: " . $violin->getTipo() . "<br>";
echo "Material: " . $violin->getMaterial() . "<br>";
echo "Número de cuerdas: " . $violin->getNumCuerdas() . "<br>";
echo "Acción: " . $violin->tocar() . "<br>";
echo "Afinación: " . $violin->afinar() . "<br>";
?>
