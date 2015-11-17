# Ejercicios - PHP

Para detalle de teoría por favor referite a la **wiki de PHP**.

## Setup
### Requisitos pre-instalados
- git
- php cli

#### Instalando git
[Descargar el ejecutable de git](https://git-scm.com/download/win)
Cambiar el nombre del archivo por `git.exe`. Probar ejecutando desde la consola `git.exe`.<br>
Este archivo `git.exe` puede moverse adonde sea más conveniente para hacer las prácticas.

#### Instalando php
[Descargar el ejecutable de php](http://windows.php.net/downloads/releases/php-5.6.15-nts-Win32-VC11-x86.zip).<br>
Descomprimir y probar ejecutando desde la consola `php.exe -v`.<br>
Este archivo `php.exe` puede moverse adonde sea más conveniente para hacer las prácticas.

## Antes de hacer cada práctica
**_Solamente_ la primera vez que vas a hacer las prácticas**, cloná el repositorio de la siguiente forma:
```shell
git clone https://github.com/username/repository.git .
```
Una vez que ya tenes el repositorio cloneado, cada vez que vayas a trabajar en un módulo generá un branch para esa práctica en concreto.<br>
Recordá asignarle un nombre descriptivo que siga el siguiente formato: `usuario-practica-fecha`.
Luego cambia el remote de tu repositorio para que apunte a este nuevo branch:
```shell
git pull
git checkout -b lernerd-01-variables-estructuras-control-20151211
```

Luego podés cambiar al directorio correspondiente y comenzar a hacer las prácticas.
Recordá cada vez que tengas una versión de tu código:
1. Agregar archivos que no estén versionados.
1. Hacer `commit` con un mensaje descriptivo.
1. Hacer `push` antes de finalizar una sesión de código.

```shell
git add nuevo-archivo.php
git commit -a -m "Probando la practica de variables, agregue un array"
git push -u origin lernerd-01-variables-estructuras-control-20151211
```
Si cometiste un error y querés borrar tu branch de trabajo siempre podés hacerlo y volver a empezar.<br>
**Tené en cuenta que esto borra todo lo que hiciste en el branch y no se puede deshacer**.
```shell
git checkout master
git branch -D lernerd-01-variables-estructuras-control-20151211
git push origin --delete lernerd-01-variables-estructuras-control-20151211
```

## Ejercicios
- [01-variables-estructuras-control](01-variables-estructuras-control)
