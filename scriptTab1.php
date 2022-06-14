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


/*
TP - Tableaux - 1

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_5 - Rédiger un script PHP nommé “script_php_5.php” permettant de :
- Créer un tableau
- Lire une entrée clavier en demandant de tapé une valeur numérique en
boucle jusqu'à ce que le caractère “q” soit tapé
- Insérer chaque valeur saisie dans le tableau
- Afficher le nombre de valeur présente dans le tableau
- Afficher la somme des valeurs du tableau
- Afficher les valeurs du tableau
- Trier dans l’ordre croissant les valeurs du tableau
- Afficher de nouveau les valeurs du tableau
Lancer votre script à l’aide de la commande: php script_php_5.php
*/
