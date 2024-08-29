<?php
// Definición de la clase Reporte
class Reporte extends Documento {
    // Propiedad específica
    private $fecha;

    // Constructor
    public function __construct($titulo, $autor, $fecha) {
        parent::__construct($titulo, $autor);
        $this->fecha = $fecha;
    }

    // Implementación del método para imprimir el reporte
    public function imprimir() {
        return "Imprimiendo el reporte: " . $this->titulo;
    }

    // Implementación del método para guardar el reporte
    public function guardar() {
        return "Guardando el reporte del " . $this->fecha;
    }

    // Método para obtener la fecha del reporte
    public function getFecha() {
        return $this->fecha;
    }
}
?>
