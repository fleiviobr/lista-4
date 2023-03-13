<?php
// Número Primo

function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    } elseif ($numero == 2) {
        return true;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    
    $x = intval(fgets(STDIN));

    if (ehPrimo($x)) {
        echo $x . " eh primo\n";
    } else {
        echo $x . " nao eh primo\n";
    }
}
