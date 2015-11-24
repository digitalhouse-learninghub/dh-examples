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

$moreInfo = $info;
$moreInfo['name'] = "Sebastian";
$moreInfo['lastName'] = "Gagin";
$moreInfo['email'] = "sebas@digitalhouse.com";
$moreInfo['country'] = "Uruguay";
$moreInfo['birth'] = 1985;
$moreInfo['dni'] = "31233510";
$moreInfo['age'] = 30;

echo "La primer informacion es...\n";
echo "Hola {$info['lastName']}, {$info['name']}\n";
echo "Tu edad es {$info['age']}\n";
echo "Tu e-mail es {$info['email']}\n";

echo "Vivis en {$info['country']}\n";
echo "Naciste en {$info['birth']}\n";
echo "Tu documento es {$info['dni']}\n";

echo "La segunda informacion es...\n";
echo "Hola {$moreInfo['lastName']}, {$moreInfo['name']}\n";
echo "Tu edad es {$moreInfo['age']}\n";
echo "Tu e-mail es {$moreInfo['email']}\n";

echo "Vivis en {$moreInfo['country']}\n";
echo "Naciste en {$moreInfo['birth']}\n";
echo "Tu documento es {$moreInfo['dni']}\n";
