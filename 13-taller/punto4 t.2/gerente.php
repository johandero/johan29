<?php
// Definición de la clase Gerente
class Gerente extends Empleado {
    // Propiedad específica
    private $bonus;

    // Constructor
    public function __construct($nombre, $salarioBase, $bonus) {
        parent::__construct($nombre, 'Gerente', $salarioBase);
        $this->bonus = $bonus;
    }

    // Implementación del método para calcular el salario
    public function calcularSalario() {
        return $this->salarioBase + $this->bonus;
    }

    // Implementación del método para calcular la bonificación
    public function calcularBonificacion() {
        return $this->bonus;
    }

    // Método para obtener el bonus
    public function getBonus() {
        return $this->bonus;
    }
}
?>
