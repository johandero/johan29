<?php
// Definición de la clase Asistente
class Asistente extends Empleado {
    // Propiedad específica
    private $horasExtras;

    // Constructor
    public function __construct($nombre, $salarioBase, $horasExtras) {
        parent::__construct($nombre, 'Asistente', $salarioBase);
        $this->horasExtras = $horasExtras;
    }

    // Implementación del método para calcular el salario
    public function calcularSalario() {
        // Suponemos que cada hora extra tiene un costo adicional
        $costoHoraExtra = 20; // Ejemplo: $20 por hora extra
        return $this->salarioBase + ($this->horasExtras * $costoHoraExtra);
    }

    // Implementación del método para calcular la bonificación
    public function calcularBonificacion() {
        // Los asistentes no tienen bonificación adicional en este ejemplo
        return 0;
    }

    // Método para obtener las horas extras
    public function getHorasExtras() {
        return $this->horasExtras;
    }
}
?>
