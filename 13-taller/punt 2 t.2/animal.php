<?php
// Definición de la clase base Animal
class Animal {
    // Propiedades
    protected $nombre;
    protected $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Métodos
    public function comer() {
        echo "{$this->nombre} está comiendo.<br>";
    }

    public function dormir() {
        echo "{$this->nombre} está durmiendo.<br>";
    }

    public function moverse() {
        echo "{$this->nombre} está moviéndose.<br>";
    }

    // Método para mostrar la información del animal
    public function mostrarInformacion() {
        echo "Nombre: {$this->nombre}<br>";
        echo "Edad: {$this->edad} años<br>";
    }
}
?>
