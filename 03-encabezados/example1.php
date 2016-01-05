<?php
  if(isset($_GET['redirect'])) {
    header('Location: http://www.google.com');
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
<?php

for ($i=0; $i < 100 ; $i++) {
  switch ($i) {
    case 50:
      echo "Estamos al 50%<br>";
      break;

    case 75:
      echo "Al 75%... falta poco<br>";
      break;

    case 90:
      echo "Muy cerca...<br>";
      break;
  }
}

echo "Fin!<br>";

?>
<br><a href="?redirect=true">click acá para probar el redirect</a>
  </body>
</html>
