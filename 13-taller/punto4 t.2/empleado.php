<?php
// Definición de la clase base Empleado
abstract class Empleado {
    // Propiedades comunes
    protected $nombre;
    protected $cargo;
    protected $salarioBase;

    // Constructor
    public function __construct($nombre, $cargo, $salarioBase) {
        $this->nombre = $nombre;
        $this->cargo = $cargo;
        $this->salarioBase = $salarioBase;
    }

    // Método para calcular el salario (debe ser implementado en las clases derivadas)
    abstract public function calcularSalario();

    // Método para calcular la bonificación (debe ser implementado en las clases derivadas)
    abstract public function calcularBonificacion();

    // Método para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener el cargo
    public function getCargo() {
        return $this->cargo;
    }
}
?>
