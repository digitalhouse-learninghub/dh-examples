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

echo "Primer arreglo...\n";
foreach ($info as $key => $value) {
  echo "$key: $value\n";
}

echo "Segundo arreglo...\n";
foreach ($moreInfo as $key => $value) {
  echo "$key: $value\n";
}
