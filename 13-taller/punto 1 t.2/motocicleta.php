<?php
// Definición de la clase Motocicleta
class Motocicleta extends Vehiculo {
    // Propiedad específica
    private $tipo;

    // Constructor
    public function __construct($marca, $modelo, $año, $tipo) {
        parent::__construct($marca, $modelo, $año);
        $this->tipo = $tipo;
    }

    // Método específico
    public function hacerWheelie() {
        echo "La motocicleta está haciendo un wheelie.<br>";
    }

    // Sobreescribir el método mostrarInformacion para incluir la propiedad específica
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Tipo: {$this->tipo}<br>";
    }
}
?>
