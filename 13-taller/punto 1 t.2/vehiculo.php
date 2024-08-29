<?php
// Definición de la clase base Vehiculo
class Vehiculo {
    // Propiedades
    protected $marca;
    protected $modelo;
    protected $año;

    // Constructor
    public function __construct($marca, $modelo, $año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

    // Métodos
    public function arrancar() {
        echo "El {$this->marca} {$this->modelo} está arrancando.<br>";
    }

    public function frenar() {
        echo "El {$this->marca} {$this->modelo} está frenando.<br>";
    }

    public function acelerar() {
        echo "El {$this->marca} {$this->modelo} está acelerando.<br>";
    }

    // Método para mostrar información básica del vehículo
    public function mostrarInformacion() {
        echo "Marca: {$this->marca}<br>";
        echo "Modelo: {$this->modelo}<br>";
        echo "Año: {$this->año}<br>";
    }
}
?>
