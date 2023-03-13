<?php
//Ultrapassando Z

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));

while ($b <= $a) {
    $b = intval(fgets(STDIN));
}

$sum = $a;
$count = 1;

while ($sum < $b) {
    $sum += $a + $count;
    $count++;
}

echo $count . "\n";
?>  