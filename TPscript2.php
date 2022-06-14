<?php

$sujet = fopen("ExerciceCSVScript.csv", "r");
$exercice =fopen("moreThan5000.CSV","w+");
$nbrline= count(file("ExerciceCSVScript.csv"));
$tab=[];


for ($i=0; $i <$nbrline ; $i++) { 
    $tab[]=fgetcsv($sujet,$nbrline,',');
}
    foreach ($tab as $value ) {
         if ($value[4] >= 5000 ){
         fputcsv($exercice,$value);
    }
}
fclose($exercice);
fclose($sujet);

/*
- Dans un script, ouvrir le fichier ExerciceCSVScript.CSV
- Créer un autre fichier nommé moreThan5000.CSV
- Ecrire uniquement les employés gagnant plus de 5000€ par mois dans ce fichier
*/