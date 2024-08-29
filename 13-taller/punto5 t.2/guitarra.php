<?php
// Definición de la clase Guitarra
class Guitarra extends InstrumentoMusical {
    // Propiedad específica
    private $numCuerdas;

    // Constructor
    public function __construct($material, $numCuerdas) {
        parent::__construct('Guitarra', $material);
        $this->numCuerdas = $numCuerdas;
    }

    // Implementación del método para tocar la guitarra
    public function tocar() {
        return "La guitarra está siendo tocada.";
    }

    // Implementación del método para afinar la guitarra
    public function afinar() {
        return "La guitarra ha sido afinada.";
    }

    // Método para obtener el número de cuerdas
    public function getNumCuerdas() {
        return $this->numCuerdas;
    }
}
?>
