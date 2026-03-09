<?php
require_once 'Usuario.php';

// La clase Alumno también hereda de Usuario
class Alumno extends Usuario {
    private $matricula;

    // Constructor que reutiliza el de Usuario y añade la matrícula
    public function __construct($nombre, $correo, $matricula) {
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }

    // Método para devolver el rol
    public function getRol() {
        return "Alumno";
    }

    // Método para obtener la matrícula
    public function getMatricula() {
        return $this->matricula;
    }
}
?>
