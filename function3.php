<?php 

$nbRoom = readline("Entrez le nombre de pièce : ");
$surfaceTotal = 0;

for ($i = 1; $i <= $nbRoom; $i++) {
    $longRoom = readline("Entrez la longueur de la pièce " . $i . " : ");
    $largRoom = readline("Entrez la largeur de la pièce " . $i . " : ");

    $surfaceTotal += surface($largRoom, $longRoom);
}

echo ("Votre surface totale est de $surfaceTotal m2");

function surface(int $long, int $larg) {
    $surf = $long*$larg;
    return $surf;
}