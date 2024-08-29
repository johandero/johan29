<?php
// Definición de la clase base Documento
abstract class Documento {
    // Propiedades comunes
    protected $titulo;
    protected $autor;

    // Constructor
    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    // Método para imprimir el documento (debe ser implementado en las clases derivadas)
    abstract public function imprimir();

    // Método para guardar el documento (debe ser implementado en las clases derivadas)
    abstract public function guardar();

    // Método para obtener el título
    public function getTitulo() {
        return $this->titulo;
    }

    // Método para obtener el autor
    public function getAutor() {
        return $this->autor;
    }
}
?>
