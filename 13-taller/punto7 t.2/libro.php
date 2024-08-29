<?php
// Definición de la clase Libro
class Libro extends Documento {
    // Propiedad específica
    private $numeroPaginas;

    // Constructor
    public function __construct($titulo, $autor, $numeroPaginas) {
        parent::__construct($titulo, $autor);
        $this->numeroPaginas = $numeroPaginas;
    }

    // Implementación del método para imprimir el libro
    public function imprimir() {
        return "Imprimiendo el libro: " . $this->titulo;
    }

    // Implementación del método para guardar el libro
    public function guardar() {
        return "Guardando el libro: " . $this->titulo;
    }

    // Método para obtener el número de páginas
    public function getNumeroPaginas() {
        return $this->numeroPaginas;
    }
}
?>
