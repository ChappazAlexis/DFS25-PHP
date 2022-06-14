<?php

$salaire = readline("Salaire par mois: ");
$montantEmprunt = readline("Entrez le montant à emprunter : ");

echo ("\nMensualité maximum : ". mensuality($salaire). "€\n\n");

for ($year = 5; $year <=25; $year+=5) {
    $empruntCapacity = capacity($salaire, $year);

    echo ("Capacité d'emprunt sur $year ans selon votre salaire: ". $empruntCapacity. "€\n");
    empruntMax($montantEmprunt, $empruntCapacity, $year);
}


function capacity ($salaire, $year) {
    $capacityYear = (($salaire*0.33)*12)*$year;
    return $capacityYear;
}

function mensuality($salaire) {
    $mensu = $salaire*0.33;
    return $mensu;
}

function empruntMax($montant, $capacity, $year){
    if ($montant > $capacity){
        echo ("Vous ne pouvez pas emprunter $montant € en $year ans\n\n");
    } else {
        echo("BRAVO\nVous pouvez emprunter $montant € en $year ans\n\n");
    }
}

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
