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

echo "La primer informacion es...
Hola {$info['lastName']}, {$info['name']}
Tu edad es {$info['age']}
Tu e-mail es {$info['email']}

Vivis en {$info['country']}
Naciste en {$info['birth']}
Tu documento es {$info['dni']}

La segunda informacion es...
Hola {$moreInfo['lastName']}, {$moreInfo['name']}
Tu edad es {$moreInfo['age']}
Tu e-mail es {$moreInfo['email']}

Vivis en {$moreInfo['country']}
Naciste en {$moreInfo['birth']}
Tu documento es {$moreInfo['dni']}
";
