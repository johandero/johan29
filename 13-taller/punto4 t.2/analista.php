<?php
// Definición de la clase Analista
class Analista extends Empleado {
    // Propiedad específica
    private $comision;

    // Constructor
    public function __construct($nombre, $salarioBase, $comision) {
        parent::__construct($nombre, 'Analista', $salarioBase);
        $this->comision = $comision;
    }

    // Implementación del método para calcular el salario
    public function calcularSalario() {
        return $this->salarioBase + $this->comision;
    }

    // Implementación del método para calcular la bonificación
    public function calcularBonificacion() {
        return $this->comision;
    }

    // Método para obtener la comisión
    public function getComision() {
        return $this->comision;
    }
}
?>
