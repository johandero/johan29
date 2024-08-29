<?php
// Definición de la clase Automovil
class Automovil extends Vehiculo {
    // Propiedad específica
    private $numPuertas;

    // Constructor
    public function __construct($marca, $modelo, $año, $numPuertas) {
        parent::__construct($marca, $modelo, $año);
        $this->numPuertas = $numPuertas;
    }

    // Método específico
    public function abrirPuertas() {
        echo "Abriendo {$this->numPuertas} puertas del automóvil.<br>";
    }

    // Sobreescribir el método mostrarInformacion para incluir la propiedad específica
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Número de Puertas: {$this->numPuertas}<br>";
    }
}
?>
