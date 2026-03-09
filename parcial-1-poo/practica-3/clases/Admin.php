<?php
require_once 'Usuario.php';

// La clase Admin hereda de Usuario
class Admin extends Usuario {
    // Método adicional que devuelve el rol
    public function getRol() {
        return "Administrador";
    }
}
?>

