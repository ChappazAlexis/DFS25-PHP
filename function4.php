<?php

/*
TP - Les fonctions - 4

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_11 - Rédiger un script PHP nommé “script_php_11.php” :
Une banque vous demande de réaliser un script permettant de donner :
- La capacité d’emprunt d’un client sur 5, 10, 15, 20 et 25 ans
- Ses mensualités maximum
- En fonction de son projet être en mesure de lui dire si vous accepter de lui
prêter de l’argent ou pas, de manière automatique
A vous de jouer !!!
*/

$salaire = readline("Salaire par mois: ");

for ($i = 0; $i <=25; $i+=5) {
    echo ("Capacité d'emprunt sur $i ans : ". capacity($salaire, $i). "\n");
}

    echo ("\nMensualité maximum : ". mensuality($salaire). "\n");

    
$montantEmprunt = readline("Entrez le montant à emprunter : ");


function capacity ($salaire, $year) {
    $capacityYear = (($salaire*0.33)*12)*$year;
    return $capacityYear;
}

function mensuality($salaire) {
    $mensu = $salaire*0.33;
    return $mensu;
}

