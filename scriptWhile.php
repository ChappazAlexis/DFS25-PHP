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
