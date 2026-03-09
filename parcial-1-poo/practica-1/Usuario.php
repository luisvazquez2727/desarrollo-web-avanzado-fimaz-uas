<?php
class Usuario {
    // Atributos privados: solo accesibles dentro de la clase
    private $nombre;
    private $correo;

    // Constructor: inicializa nombre y correo al crear el objeto
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    // Getter para obtener el nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Getter para obtener el correo
    public function getCorreo() {
        return $this->correo;
    }

    // Setter para cambiar el nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Setter para cambiar el correo
    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}
?>

