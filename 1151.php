<?php
// Fibonacci Fácil

$n = intval(fgets(STDIN));

$a = 0;
$b = 1;
$seq = "$a $b";

for ($i = 2; $i < $n; $i++) {
    $c = $a + $b;
    $seq .= " $c";
    $a = $b;
    $b = $c;
}

echo "$seq\n";
?>  