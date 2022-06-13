<?php

$number = readline("Entrez un chiffre entre 5 et 20 : ");

if ($number >= 5 && $number <= 20) {
    for ($i = 0; $i < $number; $i++){
        $a = rand(300, 1000);
        $b = rand(300, 1000);
        $c = rand(300, 1000);
        
        sum($a, $b, $c);
    }
} else {
    echo("mauvaise valeur");
}


function sum (int $a, int $b, int $c) {
    $somme = $a+$b+$c;
    echo("$a + $b + $c = $somme \n");
}