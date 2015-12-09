<?php

$name = "Daniel";
$lastName = "Lerner";
$email = "daniel@digitalhouse.com";

$country = "Argentina";
$birth = 1983;
$dni = "30083210";

$currentYear = 2015;
$age = $currentYear - $birth;

echo "Hola $lastName, $name
Tu edad es $age
Tu e-mail es $email

Vivis en $country
Naciste en $birth
Tu documento es $dni
";
