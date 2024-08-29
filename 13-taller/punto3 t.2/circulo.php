<?php
// Definición de la clase Circulo
class Circulo extends FormaGeometrica {
    // Propiedad específica
    private $radio;

    // Constructor
    public function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    // Implementación del método para calcular el área
    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    // Implementación del método para calcular el perímetro
    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }

    // Método para obtener el radio
    public function getRadio() {
        return $this->radio;
    }
}
?>
