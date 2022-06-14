<?php 

$nbRoom = readline("Entrez le nombre de pièce : ");
$surfaceTab = [];
$surfaceTotal = 0;

for ($i = 1; $i <= $nbRoom; $i++) {
    $longRoom = readline("Entrez la longueur de la pièce " . $i . " : ");
    $largRoom = readline("Entrez la largeur de la pièce " . $i . " : ");
    $surface = surface($largRoom, $longRoom);
    $surfaceTotal += surface($largRoom, $longRoom);
    $surfaceTab[] = 
        array("Pièce nº$i", "Longueur : $longRoom m", "Largeur : $largRoom m", "Surface de cette pièce : $surface m²");
}



print_r($surfaceTab);
echo("Surface totale : ".$surfaceTotal."m²\n");


function surface(int $long, int $larg) {
    $surf = $long*$larg;
    return $surf;
}

/*
TP - Les fonctions - 3

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_10 - Rédiger un script PHP nommé “script_php_10.php” :
Une agence immobilière vous demande de réaliser un script permettant de
calculer rapidement la superficie d’une maison ou bien d’un appartement.
A vous de jouer !!!
*/




// Sans passer par un tableau : 
/*
$nbRoom = readline("Entrez le nombre de pièce : ");
$surfaceTotal = 0;

for ($i = 1; $i <= $nbRoom; $i++) {
    $longRoom = readline("Entrez la longueur de la pièce " . $i . " : ");
    $largRoom = readline("Entrez la largeur de la pièce " . $i . " : ");

    $surfaceTotal += surface($largRoom, $longRoom);
}

echo ("Votre surface totale est de $surfaceTotal m²");

function surface(int $long, int $larg) {
    $surf = $long*$larg;
    return $surf;
}
*/