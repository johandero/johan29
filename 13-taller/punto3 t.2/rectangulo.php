<?php
// Definición de la clase Rectangulo
class Rectangulo extends FormaGeometrica {
    // Propiedades específicas
    private $base;
    private $altura;

    // Constructor
    public function __construct($color, $base, $altura) {
        parent::__construct($color);
        $this->base = $base;
        $this->altura = $altura;
    }

    // Implementación del método para calcular el área
    public function calcularArea() {
        return $this->base * $this->altura;
    }

    // Implementación del método para calcular el perímetro
    public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
    }

    // Métodos para obtener las dimensiones
    public function getBase() {
        return $this->base;
    }

    public function getAltura() {
        return $this->altura;
    }
}
?>
