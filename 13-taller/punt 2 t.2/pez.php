<?php
// Definición de la clase Pez
class Pez extends Animal {
    // Propiedad específica
    private $tipoAgua;

    // Constructor
    public function __construct($nombre, $edad, $tipoAgua) {
        parent::__construct($nombre, $edad);
        $this->tipoAgua = $tipoAgua;
    }

    // Método específico
    public function nadar() {
        echo "{$this->nombre} está nadando.<br>";
    }

    // Sobreescribir el método mostrarInformacion para incluir la propiedad específica
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Tipo de Agua: {$this->tipoAgua}<br>";
    }
}
?>
