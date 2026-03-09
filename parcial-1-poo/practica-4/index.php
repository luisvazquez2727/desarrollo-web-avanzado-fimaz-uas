<?php
require_once 'clases/Admin.php';
require_once 'clases/Alumno.php';
require_once 'clases/Invitado.php';

$usuarios = [];

try {
    // Objetos válidos
    $usuarios[] = new Admin("Luis", "luis@gmail.com");
    $usuarios[] = new Alumno("nicole", "nicole@gmail.com", "A12345");
    $usuarios[] = new Invitado("bere", "bere@egmail.com", "TechCorp");

    // Objeto inválido (correo mal escrito)
    $usuarios[] = new Alumno("Carlos", "carlitos-gmail", "B67890");

} catch (Exception $e) {
    echo "<p>Error controlado: " . $e->getMessage() . "</p>";
}

// Mostrar tabla HTML
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nombre</th><th>Correo</th><th>Rol</th><th>Matrícula</th><th>Empresa</th></tr>";

foreach ($usuarios as $usuario) {
    echo "<tr>";
    echo "<td>" . $usuario->getNombre() . "</td>";
    echo "<td>" . $usuario->getCorreo() . "</td>";
    echo "<td>" . $usuario->getRol() . "</td>";

    // Mostrar matrícula si es Alumno
    if ($usuario instanceof Alumno) {
        echo "<td>" . $usuario->getMatricula() . "</td>";
    } else {
        echo "<td>—</td>";
    }

    // Mostrar empresa si es Invitado
    if ($usuario instanceof Invitado) {
        echo "<td>" . $usuario->getEmpresa() . "</td>";
    } else {
        echo "<td>—</td>";
    }

    echo "</tr>";
}
echo "</table>";
?>
