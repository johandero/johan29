<?php
// Definición de la clase Piano
class Piano extends InstrumentoMusical {
    // Propiedad específica
    private $numTeclas;

    // Constructor
    public function __construct($material, $numTeclas) {
        parent::__construct('Piano', $material);
        $this->numTeclas = $numTeclas;
    }

    // Implementación del método para tocar el piano
    public function tocar() {
        return "El piano está siendo tocado.";
    }

    // Implementación del método para afinar el piano
    public function afinar() {
        return "El piano ha sido afinado.";
    }

    // Método para obtener el número de teclas
    public function getNumTeclas() {
        return $this->numTeclas;
    }
}
?>
