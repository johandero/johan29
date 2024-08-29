<?php
// Definición de la clase Triangulo
class Triangulo extends FormaGeometrica {
    // Propiedades específicas
    private $base;
    private $altura;
    private $lado1;
    private $lado2;
    private $lado3;

    // Constructor
    public function __construct($color, $base, $altura, $lado1, $lado2, $lado3) {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    // Implementación del método para calcular el área
    public function calcularArea() {
        return 0.5 * $this->base * $this->altura;
    }

    // Implementación del método para calcular el perímetro
    public function calcularPerimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }

    // Métodos para obtener las dimensiones
    public function getBase() {
        return $this->base;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function getLado3() {
        return $this->lado3;
    }
}
?>
