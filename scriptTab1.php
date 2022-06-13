<?php

$arr = [];

$value = "";
while ($value !== "q") {
    $value = readline("Entrez une valeur ou 'q' pour quitter : ");
    array_push($arr, $value);
}
array_pop($arr);
echo("\n\nIl y a ". count($arr). " elements dans le tableau\n");
echo("Sommes des elements du tableau = ".array_sum($arr)."\n");
echo("Tableau : ");
print_r($arr);
sort($arr);
echo("\nTableau dans l'ordre : ");
print_r($arr);