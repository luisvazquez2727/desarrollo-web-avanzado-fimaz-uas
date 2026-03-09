# Práctica de Laboratorio 2: Herencia y Reutilización de Código en PHP

## Objetivo
Implementar herencia mediante la extensión de clases, reutilizando atributos y métodos de una clase base.

## Descripción
Se reutilizó la clase `Usuario` de la práctica anterior y se creó la clase `Admin` que extiende de `Usuario`.  
La clase `Admin` añade el método `getRol()` que retorna "Administrador".

## Diferencias entre Usuario y Admin
- **Usuario**: contiene atributos privados (`nombre`, `correo`) y métodos de acceso (getters y setters).
- **Admin**: hereda de `Usuario` y agrega el método `getRol()`.

## Instrucciones de ejecución
Ubicar los archivos en la ruta que se allan guardado

Abrir index.php en un servidor local (ejemplo: XAMPP, o el server local de php).

Visualizar en el navegador los valores del usuario mostrados con los métodos getters.

Al ejecutar `index.php` en un servidor local, se muestran:
- Nombre del administrador
- Correo electrónico
- Rol: "Administrador"
