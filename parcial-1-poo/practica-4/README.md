# Práctica de Laboratorio 4: Integración POO + Herencia + Validaciones + Excepciones

## Objetivo
En esta práctica construimos un mini-sistema en PHP que simula el examen parcial. La idea es juntar todo lo que hemos visto: encapsulamiento, herencia, polimorfismo básico (cada clase hija tiene su propio `getRol()`), validación de datos, manejo de excepciones con `try/catch` y mostrar la salida en una tabla HTML.

## Requisitos
- PHP 8+ (usando XAMPP)

## Ejecución
Para ver el resultado se abre en el navegador:

en micaso: http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-4/index.php


## Evidencia esperada
La salida debe mostrar dos cosas: primero un mensaje controlado de error cuando se intenta crear un usuario con correo inválido, y después una tabla HTML con los usuarios válidos. El mensaje se ve así:

Error controlado: Correo inválido: carlitos-gmail

Y la tabla debe tener las columnas Nombre, Correo, Rol, Matrícula y Empresa. Ejemplo:

Nombre | Correo             | Rol           | Matrícula | Empresa
Luis   | luis@example.com   | Administrador | —         | —
nicole | nicole@example.com | Alumno        | A12345    | —
bere   | bere@example.com   | Invitado      | —         | TechCorp