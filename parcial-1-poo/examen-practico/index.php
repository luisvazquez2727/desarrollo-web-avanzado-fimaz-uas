<?php

require_once 'Admin.php';
require_once 'Alumno.php';

try {
    
    $admin = new Admin("Luis", "lvgluisjesus@gmail.com");

    
    $alumno = new Alumno("Pedro", "pedrosola@gmail.com", "A12345");

    
    $usuarioInvalido = new Usuario("Ana", "analaguap-gmail.com");

} catch (Exception $e) {
    echo "<p>Error controlado: " . $e->getMessage() . "</p>";
}


echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matrícula</th></tr>";


echo "<tr>";
echo "<td>" . $admin->getNombre() . "</td>";
echo "<td>" . $admin->getCorreo() . "</td>";
echo "<td>" . $admin->getRol() . "</td>";
echo "<td>-</td>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $alumno->getNombre() . "</td>";
echo "<td>" . $alumno->getCorreo() . "</td>";
echo "<td>" . $alumno->getRol() . "</td>";
echo "<td>" . $alumno->getMatricula() . "</td>";
echo "</tr>";

echo "</table>";

?>