<?php

$arr = [];
$value = "";

for ($i = 0; $i < 30; $i++) {
    $value = rand(0, 100);
    array_push($arr, $value);
}
echo("Valeur du tableau : ");
print_r($arr);

echo("\nValeur du tableau dans l'ordre croissant : ");
sort($arr);
print_r($arr);

echo("\nValeur du tableau dans l'ordre decroissant : ");
rsort($arr);
print_r($arr);