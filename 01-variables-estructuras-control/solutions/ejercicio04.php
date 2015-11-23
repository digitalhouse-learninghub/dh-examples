<?php

$name = "Daniel";
$lastName = "Lerner";
$email = "daniel@digitalhouse.com";

$country = "Argentina";
$birth = 1983;
$dni = "30083210";

$currentYear = 2015;
$age = $currentYear - $birth;

echo "Hola $lastName, $name\n";
echo "Tu edad es $age\n";
echo "Tu e-mail es $email\n";

echo "Vivis en $country\n";
echo "Naciste en $birth\n";
echo "Tu documento es $dni\n";
