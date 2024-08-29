<?php
// Definición de la clase Violin
class Violin extends InstrumentoMusical {
    // Propiedad específica
    private $numCuerdas;

    // Constructor
    public function __construct($material, $numCuerdas) {
        parent::__construct('Violin', $material);
        $this->numCuerdas = $numCuerdas;
    }

    // Implementación del método para tocar el violín
    public function tocar() {
        return "El violín está siendo tocado.";
    }

    // Implementación del método para afinar el violín
    public function afinar() {
        return "El violín ha sido afinado.";
    }

    // Método para obtener el número de cuerdas
    public function getNumCuerdas() {
        return $this->numCuerdas;
    }
}
?>
