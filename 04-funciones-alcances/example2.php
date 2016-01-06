<?php

$limit = 10;

function printSequence($limit) {
  for($i=0 ; $i <= $limit ; $i++) {
    echo "$i, ";
  }
}

$limit = 10;
printSequence(5);
echo "\n\n" . $limit;

?>
