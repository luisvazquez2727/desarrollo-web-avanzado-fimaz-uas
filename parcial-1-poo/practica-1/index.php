<?php
require_once 'Usuario.php';

// Crear instancia de la clase Usuario
$usuario = new Usuario("Luis", "lvgluisjesus@gmail.com");

// Mostrar valores utilizando getters
echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo() . "<br>";
?>
