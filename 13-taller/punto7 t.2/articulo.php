<?php
// Definición de la clase Articulo
class Articulo extends Documento {
    // Propiedad específica
    private $revista;

    // Constructor
    public function __construct($titulo, $autor, $revista) {
        parent::__construct($titulo, $autor);
        $this->revista = $revista;
    }

    // Implementación del método para imprimir el artículo
    public function imprimir() {
        return "Imprimiendo el artículo: " . $this->titulo;
    }

    // Implementación del método para guardar el artículo
    public function guardar() {
        return "Guardando el artículo en la revista: " . $this->revista;
    }

    // Método para obtener la revista
    public function getRevista() {
        return $this->revista;
    }
}
?>
