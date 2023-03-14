<?php
// Soma de Ímpares Consecutivos III

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++)
{
    $line = trim(fgets(STDIN));
    $values = explode(" ", $line);
    $x = intval($values[0]);
    $y = intval($values[1]);

    $sum = 0;

    for ($j = $x; $j < $x + ($y * 2); $j++)
    {
        if ($j % 2 != 0)
        {
            $sum += $j;
        }
    }

    echo $sum . "\n";
}

?>
