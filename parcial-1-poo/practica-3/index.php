<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';

try {
    // Creamos un Admin válido
    $admin = new Admin("Luis", "lvgluisjesus@gmail.com");
    echo "Nombre: " . $admin->getNombre() . "<br>";
    echo "Correo: " . $admin->getCorreo() . "<br>";
    echo "Rol: " . $admin->getRol() . "<br><br>";

    // Intentamos crear un Alumno con correo inválido
    $alumno = new Alumno("Pedro", "juan-vaquez.com", "A12345");
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Correo: " . $alumno->getCorreo() . "<br>";
    echo "Rol: " . $alumno->getRol() . "<br>";
    echo "Matrícula: " . $alumno->getMatricula() . "<br>";

} catch (Exception $e) {
    // Capturamos la excepción y mostramos un mensaje claro
    echo "Error: " . $e->getMessage();
}
?>
