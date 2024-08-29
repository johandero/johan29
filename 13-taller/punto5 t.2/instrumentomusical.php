<?php
// Definición de la clase base InstrumentoMusical
abstract class InstrumentoMusical {
    // Propiedades comunes
    protected $tipo;
    protected $material;

    // Constructor
    public function __construct($tipo, $material) {
        $this->tipo = $tipo;
        $this->material = $material;
    }

    // Método para tocar el instrumento (debe ser implementado en las clases derivadas)
    abstract public function tocar();

    // Método para afinar el instrumento (debe ser implementado en las clases derivadas)
    abstract public function afinar();

    // Método para obtener el tipo
    public function getTipo() {
        return $this->tipo;
    }

    // Método para obtener el material
    public function getMaterial() {
        return $this->material;
    }
}
?>
