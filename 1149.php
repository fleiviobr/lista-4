<?php
// Somando Inteiros Consecutivos

$input = explode(' ', fgets(STDIN));

$n = intval($input[count($input) - 1]);
$a = intval($input[0]);
$sum = 0;

for ($i = 0; $i < $n; $i++) {
    $sum +=  $a + $i;
}

echo "$sum\n";