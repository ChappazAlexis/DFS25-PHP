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


/*
TP - Les fonctions - 1

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_8 - Rédiger un script PHP nommé “script_php_8.php” :
- Lire une entrée clavier en demandant un chiffre entre 5 et 20
- Vous devez créer une fonction “somme” qui prend en paramètres 3 nombres
- Vous devez ajouter les trois nombres dans cette fonction
- Faites un appel à cette fonction dans une boucle correspondant aux nombres
saisie par l’utilisateur
- Les valeurs entré lors de l’appel de la fonction somme doivent être aléatoire
entre 300 et 1000
- Affiché le résultats lors de chaque tours de boucle
Lancer votre script à l’aide de la commande: php script_php_7.php
*/
