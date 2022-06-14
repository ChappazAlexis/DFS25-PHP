<?php

$salaire = readline("Salaire entre 1500 et 3000$: ");

if ($salaire >= 1500 && $salaire <= 3000 ) {
    $jour = 0;
    while ($salaire > 0 && $jour < 30) {
        $jour++;
        $random = rand(30,200);
        $salaire = $salaire - $random;
        echo ("Jour $jour, il reste = $salaire$\n");
        if ($salaire < 0 ) {
            echo ("Nous sommes le jour $jour et mon compte est vide");
        } elseif ($jour == 30) {
            echo ("Vous économisez $salaire$ !");
        }
    }
} else {
    echo ("Mauvaise valeur");
}


/*
TP - Boucle - WHILE

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_4 - Rédiger un script PHP nommé “script_php_4.php” permettant de :
- Lire une entrée clavier en demandant de tapé un salaire compris entre 1500€ et 3000€
- Réaliser un nombre de tour de boucles relatif au nombre de jours dans un mois (30 ou 31
comme vous voulez)
- Pour chaque tour de boucle et donc chaque jour, aléatoirement vous enlèverez une
somme comprise entre 30€ et 200€, à la fin de chaque jour affiché combien il vous reste
ainsi que le numéro du jour, ex: “jour n° 25, il me reste 500€”
- Si vous arrivez à la fin du mois avec de l’argent, vous affichez le texte “Vous économise X€,
Félicitations !”
- Si durant le mois vous n’avez plus d’argent, vous affichez le jour durant lequel vous êtes
arrivez à 0€ , “Mon compte est vide et on est le X ieme jour du mois” et vous arrêtez le script
Lancer votre script à l’aide de la commande: php script_php_4.php
*/