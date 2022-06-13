<?php

/*
TP - Les fonctions - 2

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_9 - Rédiger un script PHP nommé “script_php_9.php” :
- Demander à l’utilisateur de saisir un nombre entre 5 et 20
- Créer une fonction qui créer un tableau et le rempli aléatoirement de 50
valeurs
- Créer une autre fonction qui fait la somme de toutes les valeurs du tableau
envoyé en paramètre
- Faites appel à ces deux fonction à chaque tour de boucles relatif au nombre
saisi par l’utilisateur
- Pour chaque tour afficher la somme du tableau courant
Lancer votre script à l’aide de la commande: php script_php_7.php
*/

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