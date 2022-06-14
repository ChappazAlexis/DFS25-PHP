<?php

$arr = [];
$value = "";

for ($i = 0; $i < 30; $i++) {
    $value = rand(0, 100);
    array_push($arr, $value);
}

for ($i = 0; $i < 30; $i+=2) {
    unset($arr[$i]);
}

print_r($arr);


for ($i = 0; $i < 3; $i++) {
    $index = readline("Votre valeur sera à l'index : ");
    $valeur = readline("Votre valeur : ");
    $arr[$index] = $valeur;
    ${"ind".$i} = $index;
    ${"val".$i} = $valeur;
}

echo ("\n\n\n");

ksort($arr);
for($i = 0; $i < 3; $i ++) {
    echo ("\nVotre valeur à l'index ". ${"ind".$i}. " est ".${"val".$i}. "\n");
}
print_r($arr);


/*
TP - Tableaux - 3

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_7 - Rédiger un script PHP nommé “script_php_7.php” permettant de :
- Créer un tableau
- Inserer 30 nombres dans le tableau de manière aléatoire (compris entre 20 et
100)
- Supprimer une valeur sur deux
- Insérer manuellement 3 valeurs de votre choix dans le tableau, au format clé
=> valeur
- Afficher les 3 valeurs insérer
Lancer votre script à l’aide de la commande: php script_php_7.php
*/