<?php
// Incluir los archivos de clases
include 'DispositivoElectronico.php';
include 'Smartphone.php';
include 'Laptop.php';
include 'Televisor.php';

// Crear instancias de cada tipo de dispositivo
$smartphone = new Smartphone('Samsung', 'Galaxy S21', '123456789');
$laptop = new Laptop('Dell', 'XPS 13', '52Wh');
$televisor = new Televisor('Sony', 'Bravia 55X', '55 pulgadas');

// Usar los métodos de cada dispositivo
echo "<h2>Información del Smartphone</h2>";
echo "Marca: " . $smartphone->getMarca() . "<br>";
echo "Modelo: " . $smartphone->getModelo() . "<br>";
echo "Número de línea: " . $smartphone->getNumeroLinea() . "<br>";
echo "Acción: " . $smartphone->encender() . "<br>";
echo "Apagar: " . $smartphone->apagar() . "<br>";
echo "Cargar: " . $smartphone->cargar() . "<br>";

echo "<hr>";

echo "<h2>Información de la Laptop</h2>";
echo "Marca: " . $laptop->getMarca() . "<br>";
echo "Modelo: " . $laptop->getModelo() . "<br>";
echo "Capacidad de batería: " . $laptop->getCapacidadBateria() . "<br>";
echo "Acción: " . $laptop->encender() . "<br>";
echo "Apagar: " . $laptop->apagar() . "<br>";
echo "Cargar: " . $laptop->cargar() . "<br>";

echo "<hr>";

echo "<h2>Información del Televisor</h2>";
echo "Marca: " . $televisor->getMarca() . "<br>";
echo "Modelo: " . $televisor->getModelo() . "<br>";
echo "Tamaño de pantalla: " . $televisor->getTamanoPantalla() . "<br>";
echo "Acción: " . $televisor->encender() . "<br>";
echo "Apagar: " . $televisor->apagar() . "<br>";
echo "Cargar: " . $televisor->cargar() . "<br>";
?>
