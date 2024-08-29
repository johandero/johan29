
<?php
// Incluir los archivos de clases
include 'FormaGeometrica.php';
include 'Circulo.php';
include 'Rectangulo.php';
include 'Triangulo.php';

// Crear instancias de cada tipo de forma
$circulo = new Circulo('Rojo', 5); // Color y radio
$rectangulo = new Rectangulo('Verde', 10, 4); // Color, base y altura
$triangulo = new Triangulo('Azul', 6, 8, 5, 6, 7); // Color, base, altura y lados

// Usar los métodos de cada forma
echo "<h2>Información del Círculo</h2>";
echo "Color: " . $circulo->getColor() . "<br>";
echo "Radio: " . $circulo->getRadio() . "<br>";
echo "Área: " . $circulo->calcularArea() . "<br>";
echo "Perímetro: " . $circulo->calcularPerimetro() . "<br>";

echo "<hr>";

echo "<h2>Información del Rectángulo</h2>";
echo "Color: " . $rectangulo->getColor() . "<br>";
echo "Base: " . $rectangulo->getBase() . "<br>";
echo "Altura: " . $rectangulo->getAltura() . "<br>";
echo "Área: " . $rectangulo->calcularArea() . "<br>";
echo "Perímetro: " . $rectangulo->calcularPerimetro() . "<br>";

echo "<hr>";

echo "<h2>Información del Triángulo</h2>";
echo "Color: " . $triangulo->getColor() . "<br>";
echo "Base: " . $triangulo->getBase() . "<br>";
echo "Altura: " . $triangulo->getAltura() . "<br>";
echo "Lado 1: " . $triangulo->getLado1() . "<br>";
echo "Lado 2: " . $triangulo->getLado2() . "<br>";
echo "Lado 3: " . $triangulo->getLado3() . "<br>";
echo "Área: " . $triangulo->calcularArea() . "<br>";
echo "Perímetro: " . $triangulo->calcularPerimetro() . "<br>";
?>
