<?php
// Seuquência S II

$soma = 0;

for ($i = 1, $j = 1; $i <= 39; $i += 2, $j *= 2) {
    $soma += $i/$j;
}

echo number_format($soma, 2) . "\n";
?>  