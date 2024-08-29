<?php
// Incluir los archivos de clases
include 'Animal.php';
include 'Perro.php';
include 'Gato.php';
include 'Pez.php';

// Crear instancias de cada tipo de animal
$perro = new Perro('Rex', 5, 'Labrador');
$gato = new Gato('Misi', 3, 'Gris');
$pez = new Pez('Nemo', 1, 'Salado');

// Usar los métodos de cada animal
echo "<h2>Información del Perro</h2>";
$perro->mostrarInformacion();
$perro->comer();
$perro->ladrar();
$perro->dormir();
$perro->moverse();

echo "<hr>";

echo "<h2>Información del Gato</h2>";
$gato->mostrarInformacion();
$gato->comer();
$gato->maullar();
$gato->dormir();
$gato->moverse();

echo "<hr>";

echo "<h2>Información del Pez</h2>";
$pez->mostrarInformacion();
$pez->comer();
$pez->nadar();
$pez->dormir();
$pez->moverse();
?>
