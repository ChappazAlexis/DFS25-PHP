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



/*
TP - Tableaux - 2

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_6 - Rédiger un script PHP nommé “script_php_6.php” permettant de :
- Créer un tableau
- Inserer 30 nombres dans le tableau de manière aléatoire (compris entre 20 et
100)
- Afficher les valeurs du tableau
- Trier dans l’ordre croissant les valeurs du tableau
- Afficher de nouveau les valeurs du tableau
- Trier dans l’ordre décroissant les valeurs du tableau
- Afficher de nouveau les valeurs du tableau
Lancer votre script à l’aide de la commande: php script_php_6.php
*/
