# 01-request-basico

### Prácticas
[Ver guía de prácticas asociadas](practica.md)

### Teoría
El código del lado del servidor se puede pasar a través de un webserver y devolver al equipo cliente para que este lo consuma en su browser. Las respuestas del lado del servidor siempre suceden en base a un pedido del lado del cliente.<br>
[Ver presentación guiada de teoría](http://slides.com/daniellerner/php/live)

#### Conceptos y definiciones
##### Partes de código
`<?php` se utiliza para indicar que vamos a empezar a escribir código php. Todo lo que no exista entre `<?php` y `?>` es por definición html plano.

`foreach` es una sentencia de tipo loop y forma parte de las [estructuras de control que nos provee php](#estructuras-control).
En este caso se utiliza de la siguiente forma
```
foreach($_GET as $key => $value) {
	echo $key . ' => ' . $value . '<br/>';
}
```
A `foreach` se le indica un [array](#tipos-datos) (`$_GET` en este caso) y dos variables que se rellenan con las claves y valores de cada item respectivamente.
El resultado es que cada bloque de código entre `{` y `}` posee en `$key` la clave del array, y en `$value` el valor.

`echo` se utiliza para imprimir una variable o texto como respuesta al browser del cliente. Todo lo que se encierra en "comillas dobles" o 'comillas simples' es una cadena de texto estática. En este caso se concatenan variables con cadenas de texto utilizando un punto `.`

##### Conceptos de variables y estructuras
Los booleanos guardan valores verdadero y falso.
Los enteros números enteros. Los de punto flotante, números reales. A estos dos últimos se los llama numéricos.<br>
Las cadenas de caracteres guardan texto.
Los arreglos guardan claves y valores de cualquiera de los tipos disponibles.

En PHP los tipos de variables se definen por su contenido.<br>
Entonces si yo ejecuto: `$a = ‘hola’;`<br>
`$a` resulta en una variable de tipo string.<br>
Si yo ejecuto: `$a = 3;`<br>
`$a` resulta en una variable de tipo integer.<br>
Según el nivel de errores con el que se ejecute PHP una variable indefinida tira una advertencia o pasa desapercibida. Siempre es mejor declarar las variables.
[Para ver si una variable está definida se puede usar isset](#existencia-variables).


Las [estructuras de control de flujo](#estructuras-control) nos permiten producir distintas acciones de acuerdo a variables. Existen if (con else) y switch.
Los comandos de loop nos permiten recorrer sets de datos (arreglos u otros) y procesar uno a uno sus items. Existen while, for, foreach y otros más.

Los arrays `$_POST` y `$_GET` se encuentran entre muchos de los que php nos provee para interactuar con el servidor y el request al que estamos respondiendo. **Siempre estamos respondiendo a un request**.<br>
Entonces `$_POST` y `$_GET` nos dan un array donde la clave de cada item es el nombre del campo enviado, y el valor es el correspondiente a cada clave. [Respectivamente cada uno de estos arrays se utilizan para los tipos de request post y get](#variables-externas).

### Links de referencia
- <a name="estructuras-control"></a>Estructuras de control: http://php.net/manual/en/language.control-structures.php
- <a name="tipos-datos"></a>Tipos de datos
  - Arrays: http://php.net/manual/en/ref.array.php
  - Strings: http://php.net/manual/en/ref.strings.php
  - Int, float: http://php.net/manual/en/ref.math.php
- <a name="existencia-variables"></a>Existencia de variables: http://php.net/manual/en/function.isset.php
- <a name="variables-externas"></a>Variables de fuentes externas (requests): http://php.net/manual/en/language.variables.external.php
