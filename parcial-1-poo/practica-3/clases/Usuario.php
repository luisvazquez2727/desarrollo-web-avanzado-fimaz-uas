<?php
class Usuario {
    // Atributos privados: nombre y correo
    private $nombre;
    private $correo;

    // Constructor: aquí inicializamos los valores
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;

        // Validación del correo: si no cumple el formato, lanzamos una excepción
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El correo '$correo' no es válido");
        }
        $this->correo = $correo;
    }

    // Método para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Método para obtener el correo
    public function getCorreo() {
        return $this->correo;
    }
}
?>

