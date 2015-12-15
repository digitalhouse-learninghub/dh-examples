<?php
  date_default_timezone_set('America/Argentina/Buenos_Aires');
  setlocale(LC_ALL, "es_AR.UTF-8");

  $dayNumbers = [
    1 => 'Lunes',
    2 => 'Martes',
    3 => 'Miércoles',
    4 => 'Jueves',
    5 => 'Viernes',
    6 => 'Sábado',
    7 => 'Domingo',
  ];

  define('HAPPY_DAY', 'Viernes');
  $todayName = $dayNumbers[ date('N') ];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>El día de hoy...</title>
  </head>
  <body>
    <p>
      Hoy es <?=$todayName?>.
      <? if($todayName == HAPPY_DAY) { ?>
      <br/>Hoy es un día feliz 😃
      <? } ?>
    </p>
  </body>
</html>
