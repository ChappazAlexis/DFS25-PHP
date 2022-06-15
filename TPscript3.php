<?php

$sujet = fopen("ExerciceCSVScript.csv", "r");
$exercice =fopen("between30and50.CSV","w+");
$nbrline= count(file("ExerciceCSVScript.csv"));
$tab=[];


for ($i=0; $i <$nbrline ; $i++) { 
    $tab[]=fgetcsv($sujet,$nbrline);
}
    foreach ($tab as $value ) {
        $surname = $value[0];
        $name = $value[1];
         if ($value[2] >= 30 && $value[2] <= 50){
            $value = ["$name $surname"];
         fputcsv($exercice,$value);
    }
}
fclose($exercice);
fclose($sujet);


/*
- Dans un script, ouvrir le fichier ExerciceCSVScript.CSV
- Créer un autre fichier nommé between30and50.CSV
- Ecrire uniquement les employés ayant entre 30 et 40 ans, et uniquement le
nom et le prénom sera écrit dans le fichier
*/