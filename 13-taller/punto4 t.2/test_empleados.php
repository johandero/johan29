<?php
// Incluir los archivos de clases
include 'Empleado.php';
include 'Gerente.php';
include 'Analista.php';
include 'Asistente.php';

// Crear instancias de cada tipo de empleado
$gerente = new Gerente('Juan Pérez', 5000, 1000); // Nombre, salario base, bonus
$analista = new Analista('Ana Gómez', 3000, 500); // Nombre, salario base, comisión
$asistente = new Asistente('Luis Fernández', 2000, 10); // Nombre, salario base, horas extras

// Usar los métodos de cada empleado
echo "<h2>Información del Gerente</h2>";
echo "Nombre: " . $gerente->getNombre() . "<br>";
echo "Cargo: " . $gerente->getCargo() . "<br>";
echo "Salario: " . $gerente->calcularSalario() . "<br>";
echo "Bonificación: " . $gerente->calcularBonificacion() . "<br>";
echo "Bonus: " . $gerente->getBonus() . "<br>";

echo "<hr>";

echo "<h2>Información del Analista</h2>";
echo "Nombre: " . $analista->getNombre() . "<br>";
echo "Cargo: " . $analista->getCargo() . "<br>";
