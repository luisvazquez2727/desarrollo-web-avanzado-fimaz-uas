<?php
require_once 'Admin.php';

// Creamos un objeto de tipo Admin
$admin = new Admin("Luis", "lvgluisjesus@gmail.com");

// Mostramos sus datos usando los métodos heredados y el nuevo
echo "Nombre: " . $admin->getNombre() . "<br>";
echo "Correo: " . $admin->getCorreo() . "<br>";
echo "Rol: " . $admin->getRol() . "<br>";
?>
