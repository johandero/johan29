<?php
// Definición de la clase Gato
class Gato extends Animal {
    // Propiedad específica
    private $color;

    // Constructor
    public function __construct($nombre, $edad, $color) {
        parent::__construct($nombre, $edad);
        $this->color = $color;
    }

    // Método específico
    public function maullar() {
        echo "{$this->nombre} está maullando.<br>";
    }

    // Sobreescribir el método mostrarInformacion para incluir la propiedad específica
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Color: {$this->color}<br>";
    }
}
?>
