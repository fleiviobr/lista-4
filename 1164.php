<?php
// Número Perfeito

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
    $num = intval(fgets(STDIN)); 
    $soma_divisores = 0;

    for ($j = 1; $j < $num; $j++) {
        if ($num % $j == 0) {
            $soma_divisores += $j;
        }
    }
    
    if ($soma_divisores == $num) {
        echo "$num eh perfeito\n";
    } else {
        echo "$num nao eh perfeito\n";
    }
}
?>