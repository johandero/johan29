<?php
// Definición de la clase Camion
class Camion extends Vehiculo {
    // Propiedad específica
    private $capacidadCarga;

    // Constructor
    public function __construct($marca, $modelo, $año, $capacidadCarga) {
        parent::__construct($marca, $modelo, $año);
        $this->capacidadCarga = $capacidadCarga;
    }

    // Método específico
    public function cargar($peso) {
        if ($peso <= $this->capacidadCarga) {
            echo "Cargando {$peso} kg al camión.<br>";
        } else {
            echo "El peso excede la capacidad de carga del camión.<br>";
        }
    }

    // Sobreescribir el método mostrarInformacion para incluir la propiedad específica
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Capacidad de Carga: {$this->capacidadCarga} kg<br>";
    }
}
?>
