<?php

$fileCSV = fopen("file.csv","w") or die ("impossible d'ouvrir le ficher");
$randomArr = [];

for ($i = 0; $i < 100; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $rand = rand(0, 100);
        $randomArr[$i][] = $rand;
    }
}


foreach ($randomArr as $value) {
    fputcsv($fileCSV, $value);
}

/*
- Créer un script permettant de créer un fichier CSV
- Remplir ce fichier CSV avec 10 colonnes et 100 lignes
- Chaques cellules comporte une valeur trouver aléatoirement
- Ouvrir le fichier CSV avec Excel ou google sheet et vérifier que c’est Ok
*/