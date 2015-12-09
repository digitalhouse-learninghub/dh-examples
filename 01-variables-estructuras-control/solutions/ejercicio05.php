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

echo "Hola {$info['lastName']}, {$info['name']}
Tu edad es {$info['age']}
Tu e-mail es {$info['email']}

Vivis en {$info['country']}
Naciste en {$info['birth']}
Tu documento es {$info['dni']}
";
