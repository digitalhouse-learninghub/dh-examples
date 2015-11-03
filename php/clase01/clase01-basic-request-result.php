<?php

echo 'Hola '.$_GET['nombre'].' '.$_GET['apellido'].'!<br/><br/>';

foreach($_GET as $key => $value) {
  if($key == 'pais' || $key == 'email') {
    echo '<strong>'.$key . ' => ' . $value . '</strong>';
  } else {
	   echo $key . ' => ' . $value;
   }

   echo ' ('.gettype($value).')<br/>';
}

echo '<pre>';
var_dump($_GET);
