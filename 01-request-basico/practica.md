# 01-request-basico

### Prácticas guiadas
##### Setup
1. Hacer `git pull` de los archivos [formulario.html](formulario.html) y [respuesta.php](respuesta.php).
2. Abrir [formulario.html](formulario.html) en el browser y ambos archivos en el editor.
3. Enviar el formulario.

##### Ejercicios
1. Cambiar `<?php` por `<?` y escribir algo en html previo a este código.
2. Agregar un valor al array $_GET de la forma `$_GET[‘miclave’] = ‘mivalor’;`
3. Agregar un texto al final de los valores que se imprimen (en la línea nro. 4)

### Prácticas de a pares
##### Setup
Hacer `git reset --hard` para volver a la versión original de los archivos.

##### Ejercicios
1. Imprimir, previo al loop, un mensaje de bienvenida con el nombre y el apellido.
1. Agregar un if para dos nombres de variables y hacer que se impriman en negrita.
1. Luego del loop e impresión de datos, Imprimir todas las variables recibidas con el comando var_dump($_GET)
1. **Avanzadas**
  1. Obtener el tipo de dato de la variable e imprimirlo luego del valor.
  1. Evaluar el tipo de dato para imprimir en negrita.

##### Resultado esperado
![image](resultado.png)<br>
[Ver imagen](resultado.png)

### Quizz multiple choice
[Link a quizz](http://www.google.com)

1. ¿Cómo hago para obtener un item específico de un array?
1. ¿Cómo hago para concatenar variables de texto o - numéricas?
1. ¿Cómo hago para imprimir una variable o un texto estático?

### Prácticas integradoras
##### Setup
Hacer `git reset --hard` para volver a la versión original de los archivos.

##### Ejercicios
1. Cambiar el envío del formulario para que sea por post y permita edición de los valores.
2. Agregar un campo para ingresar la edad en años.
1. Armar placeholders para las variables esperadas. Imprimir el valor de cada una.
1. Convertir la edad a un tipo numérico.
1. Validar que la edad este en un rango esperado o mostrar un mensaje de error.

##### Resultados esperados
![image](resultado_integrador_error.png)<br>
[Ver imagen](resultado_integrador_error.png)

![image](resultado_integrador_ok.png)<br>
[Ver imagen](resultado_integrador_ok.png)
