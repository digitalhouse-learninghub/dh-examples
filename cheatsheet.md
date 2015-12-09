**Sintáxis básica**
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

**Variables**
<table>
  <tr>
    <td>
      Imprimir una variable
    </td>
    <td>
      <code>echo $variable;</code>
    </td>
  </tr>

  <tr>
    <td>
      Asignar texto a una variable
    </td>
    <td>
      <code>$variable = 'some static text';</code>
    </td>
    <td>
      <a href="http://www.php.net/manual/es/language.types.string.php#language.types.string.syntax.single">más info</a>
    </td>
  </tr>

  <tr>
    <td>
      Asignar texto a una variable
    </td>
    <td>
      <code>$variable = "some static text";</code>
    </td>
    <td>
      <a href="http://www.php.net/manual/es/language.types.string.php#language.types.string.syntax.double">más info</a>
    </td>
  </tr>

  <tr>
    <td>
      Asignar un número a una variable
    </td>
    <td>
      <code>$variable = 7;</code>
    </td>
  </tr>

  <tr>
    <td>
      Asignar el valor de una variable a otra variable
    </td>
    <td>
      <code>$variable = $anotherVariable;</code>
    </td>
  </tr>

  <tr>
    <td>
      Concatenar variables
    </td>
    <td>
      <code>$variable = $anotherVariable . $yetAnotherVariable;</code>
    </td>
    <td>
      <a href="http://php.net/manual/es/language.operators.string.php">más info</a>
    </td>
  </tr>

  <tr>
    <td>
      Concatenar un valor al final de una variable
    </td>
    <td>
      <code>$variable .= " added text";</code>
    </td>
    <td>
      <a href="http://php.net/manual/es/language.operators.string.php">más info</a>
    </td>
  </tr>
</table>

**Operadores numéricos**
<table>
  <tr>
    <td>
      Suma
    </td>
    <td>
      <code>$variable = $variable + 7;</code>
    </td>
  </tr>

  <tr>
    <td>
      Resta
    </td>
    <td>
      <code>$variable = $variable - 7;</code>
    </td>
  </tr>

  <tr>
    <td>
      Multiplicación
    </td>
    <td>
      <code>$variable = $variable * 7;</code>
    </td>
  </tr>

  <tr>
    <td>
      División
    </td>
    <td>
      <code>$variable = $variable / 7;</code>
    </td>
  </tr>
</table>

**Arreglos**
<table>
  <tr>
    <td>
      Crear
    </td>
    <td>
      <code>$variable = [];</code>
    </td>
    <td>
      <a href="http://php.net/manual/es/language.types.array.php">más info</a>
    </td>
  </tr>
  <tr>
    <td>
      Agregar un valor
    </td>
    <td>
      <code>$variable[] = "some value";</code>
    </td>
  </tr>
  <tr>
    <td>
      Crear con valores, usando claves numéricas
    </td>
    <td>
      <code>$variable = ["apple", "banana", "grapefruit"];</code>
    </td>
  </tr>
  <tr>
    <td>
      Crear con valores, usando claves asociativas
    </td>
    <td>
      <code>$variable = ['name' => "John", 'lastName' => "Doe"];</code>
    </td>
  </tr>
  <tr>
    <td>
      Imprimir una clave numérica
    </td>
    <td>
      <code>echo $variable[1];</code>
    </td>
  </tr>
  <tr>
    <td>
      Imprimir una clave asociativa
    </td>
    <td>
      <code>echo $variable['lastName'];</code>
    </td>
  </tr>
  <tr>
    <td>
      Arreglos numéricos
    </td>
    <td>
      Las claves son números del 0 al N: 0, 1, 2, 3, 4 ... N
    </td>
  </tr>
  <tr>
    <td>
      Arreglos asociativos
    </td>
    <td>
      Las claves son cadenas de caracteres
    </td>
  </tr>
</table>
