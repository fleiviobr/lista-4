<?php
// Soma de Pares Consecutivos

$x = 1;
$par;

while (true)
{
    fscanf(STDIN, "%d", $x);

    if ($x == 0)
    {
        break;
    }

    $par = $x;

    if (($x % 2) != 0)
    {
        $par++;
    }

    $x = 0;

    for ($i = 0; $i < 5 ; $i++)
    {
        $x += $par;
        $par += 2;
    }

    echo $x . PHP_EOL;
}
?>