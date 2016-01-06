<?php
  $count = 1;

  // primero evalua, luego ejecuta
  while($count < 10) {
    $count++;
  }

  // primero ejecuta, luego evalua
/*
  do {
    $count++;
  } while($count < 10);
*/

  function printMessage($number) {
    echo "Contamos hasta ".$number."<br>";

    $count = 500;
    echo "Nuestra variable interna \$count tiene el valor $count";
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
      <p>
        <?php printMessage($count); ?>
      </p>
  </body>
</html>
