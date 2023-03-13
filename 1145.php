<?php
// Sequencia Logica 2

list($x, $y) = explode(' ', trim(fgets(STDIN)));

for ($i = 1; $i <= $y; $i++) {
    echo $i;

    if ($i % $x == 0) {
        echo "\n";
    } else {
        echo ' ';
    }
}
?>  