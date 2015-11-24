<?php

$info = [];
$info['name'] = "Daniel";
$info['lastName'] = "Lerner";
$info['email'] = "daniel@digitalhouse.com";

$info['country'] = "Argentina";
$info['birth'] = 1983;
$info['dni'] = "30083210";

$currentYear = 2015;
$info['age'] = $currentYear - $info['birth'];

echo "Hola {$info['lastName']}, {$info['name']}\n";
echo "Tu edad es {$info['age']}\n";
echo "Tu e-mail es {$info['email']}\n";

echo "Vivis en {$info['country']}\n";
echo "Naciste en {$info['birth']}\n";
echo "Tu documento es {$info['dni']}\n";
