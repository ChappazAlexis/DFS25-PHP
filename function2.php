<?php

$number = readline("Entrez un chiffre entre 5 et 20 : ");
if ($number >= 5 && $number <= 20) {
    for ($i = 0; $i <= $number; $i++) {
        $arr = randomArray();
        $sum = arraySum($arr);
        echo ("Somme du tableau = ". $sum . "\n");
    }
} else {
    echo("mauvaise valeur");
}

function randomArray () {
    $randArr = [];
    for ($i = 0; $i < 50; $i++) {
        $value = rand(0, 100);
        array_push($randArr, $value);
    }
    return ($randArr);
}

function arraySum($randArr) {
   return array_sum($randArr);
}