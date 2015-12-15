# 01 - Variables y estructuras de control

Al finalizar cada práctica, el archivo php debe ejecutarse por línea de comando de la siguiente forma:
```shell
php base.php
```

### Ejercicios
1. Editar el archivo `base.php` para que:
 - La variable `$name` contenga tu primer nombre.
 - La variable `$age` contenga tu edad.
 - La variable `$email` contenga tu dirección de mail.
 - Se impriman los valores correspondientes a las variables en pantalla.<br><br>
1. Agregar al archivo `base.php` variables que contengan:
 - Tu país de origen.
 - El año de tu nacimiento.
 - Tu número de documento.<br>Imprimir estas nuevas variables junto con tus otros datos.<br><br>
1. Agregar al archivo `base.php` una variable con tu apellido e imprimirla concatenada con tu primer nombre de forma que se imprima `Apellido, Nombre`.<br><br>
1. Agregar al archivo `base.php` una variable con el año actual.<br>
Calcular en base al año actual y tu año de nacimiento, tu edad aproximada y asignarla a la variable correspondiente.<br><br>
1. Editar el archivo `base.php`:
 - Pasar todas las variables a un arreglo que contenga cada valor en su clave correspondiente.
 - Imprimir los valores contenidos dentro del array.<br><br>
1. Editar el archivo `base.php`:
 - Copiar el arreglo con los datos de forma que queden dos arreglos iguales.
 - Editar el nuevo arreglo de datos y agregarle información de una persona conocida.
 - Imprimir los datos de ambos arreglos.<br><br>
1. Editar el archivo `base.php` para que utilice un bucle para recorrer todos los elementos del arreglo e imprima los valores correspondientes.<br><br>
1. Editar el archivo `base.php` y agregarle una sentencia de control para que no imprima la edad.

### Actividad integradora
#### Contexto
Estamos armando una aplicación para tomar notas. Del tipo que usarías si estás en una reunión o en una clase y querés escribir lo que vas escuchando para poder repasarlo luego.<br>
Nuestra aplicación debería contar con un login para que las notas sean personales de cada usuario.

#### Ejercicios
Crear un nuevo archivo llamado `login.php` para que:

1. Le pida al usuario su nombre y su contraseña (tener en cuenta que la contraseña no se oculta).
2. Comparar el usuario y contraseña ingresados contra unos valores específicos. Devolver un mensaje específico si el usuario pudo ingresar.
3. Armar un listado de usuarios y contraseñas para que se puedan loguear distintas personas.
4. Ordenar el arreglo de datos utilizando <http://php.net/manual/es/function.sort.php>. Investigar e implementar una búsqueda binaria.
5. Crear un archivo llamado `improvements.txt` y pensar las formas en que mejorarías tu script.

Tener en cuenta para el punto 5:
- Cómo se podrían guardar datos sensibles como contraseñas.
- Cómo se podrían guardar datos fuera del script de php.
- Cómo se podrían agregar datos al listado.
- Cómo se podrían quitar o modificar datos del listado.
