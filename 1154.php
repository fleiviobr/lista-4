<?php
// Idades

$somaIdades = 0;
$quantidadePessoas = 0;

while (true) {
    $idade = intval(fgets(STDIN));

    if ($idade < 0) {
        break;
    }

    $somaIdades += $idade;
    $quantidadePessoas++;
}

$mediaIdades = $somaIdades / $quantidadePessoas;
echo number_format($mediaIdades, 2) . "\n";
?>  