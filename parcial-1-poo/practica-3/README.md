# Práctica de Laboratorio 3: Sistema de Usuarios con Validaciones y Excepciones

## Objetivo
Desarrollar un sistema orientado a objetos más robusto, integrando herencia, validaciones y manejo de excepciones para simular un entorno profesional.

## Descripción del sistema
- **Usuario**: clase base con atributos `nombre` y `correo`. Valida que el correo tenga formato correcto y lanza una excepción si no lo es.
- **Admin**: hereda de `Usuario` y agrega el método `getRol()` → "Administrador".
- **Alumno**: hereda de `Usuario`, añade el atributo `matricula` y redefine `getRol()` → "Alumno".

## Flujo de clases
1. Se crea un objeto `Admin` con datos válidos.
2. Se intenta crear un objeto `Alumno` con correo inválido.
3. El sistema lanza una excepción y el bloque `catch` muestra el error controlado.

## Evidencia del manejo de errores
Al ejecutar `index.php`:
- Para el `Admin`, se muestran nombre, correo y rol correctamente.
- Para el `Alumno` con correo inválido, aparece:
