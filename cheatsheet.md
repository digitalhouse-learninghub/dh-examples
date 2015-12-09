** Sintaxis básica **
<table>
<tr><td>Los archivos empiezan con</td>
<td><code>&lt;php</code></td></tr>

<tr><td>Comentario de una sola línea</td>
<td><code>//</code> o <code>#</code></td></tr>

<tr><td>Comentario de múltiples líneas</td>
<td><code>/\* \*/</code></td></tr>

<tr><td>Final de la instrucción o comando</td>
<td><code>;</code></td></tr>
</table>

| Variables     |
| :------------- | :------------- |
| Imprimir una variable       | `echo $variable;`       |
| Asignar texto a una variable       | `$variable = 'some static text';`       | [más info](http://www.php.net/manual/es/language.types.string.php#language.types.string.syntax.single) |
| Asignar texto a una variable       | `$variable = "some static text";`       | [más info](http://www.php.net/manual/es/language.types.string.php#language.types.string.syntax.double) |
| Asignar un número a una variable       | `$variable = 7;`       |
| Asignar el valor de una variable a otra variable       | `$variable = $anotherVariable;`       |
| Concatenar variables       | `$variable = $anotherVariable . $yetAnotherVariable;`       | [más info](http://php.net/manual/es/language.operators.string.php) |
| Concatenar un valor al final de una variable       | `$variable .= " added text";`       | [más info](http://php.net/manual/es/language.operators.string.php) |

| Operadores numéricos     |
| :------------- | :------------- |
| Suma       | `$variable = $variable + 7;`       |
| Resta       | `$variable = $variable - 7;`       |
| Multiplicación       | `$variable = $variable * 7;`       |
| División       | `$variable = $variable / 7;`       |
