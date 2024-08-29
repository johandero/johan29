<?php
// Incluir los archivos de clases
include 'Vehiculo.php';
include 'Automovil.php';
include 'Motocicleta.php';
include 'Camion.php';

// Crear instancias de cada tipo de vehículo
$auto = new Automovil('Toyota', 'Corolla', 2022, 4);
$moto = new Motocicleta('Honda', 'CBR600RR', 2021, 'Deportiva');
$camion = new Camion('Volvo', 'FH16', 2020, 20000);

// Usar los métodos de cada vehículo
$auto->mostrarInformacion();
$auto->arrancar();
$auto->abrirPuertas();
$auto->acelerar();
$auto->frenar();

echo "<hr>";

$moto->mostrarInformacion();
$moto->arrancar();
$moto->hacerWheelie();
$moto->acelerar();
$moto->frenar();

echo "<hr>";

$camion->mostrarInformacion();
$camion->arrancar();
$camion->cargar(15000);
$camion->cargar(25000);
$camion->acelerar();
$camion->frenar();
?>
