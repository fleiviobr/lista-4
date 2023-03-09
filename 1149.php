<?php
// Soma de Inteiros Consecutivos

$a = intval(fgets(STDIN));
$n = intval(fgets(STDIN));

while ($n <= 0) {
  $n = intval(fgets(STDIN));
}

$sum = 0;
for ($i = $a; $i < $a + $n; $i++) {
  $sum += $i;
}

echo $sum."\n";
?> 