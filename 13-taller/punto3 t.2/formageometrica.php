<?php
// Definición de la clase base FormaGeometrica
abstract class FormaGeometrica {
    // Propiedad común
    protected $color;

    // Constructor
    public function __construct($color) {
        $this->color = $color;
    }

    // Método abstracto para calcular el área (debe ser implementado en las clases derivadas)
    abstract public function calcularArea();

    // Método abstracto para calcular el perímetro (debe ser implementado en las clases derivadas)
    abstract public function calcularPerimetro();

    // Método para obtener el color
    public function getColor() {
        return $this->color;
    }
}
?>
