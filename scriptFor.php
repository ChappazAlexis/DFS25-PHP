<?php

/*
TP - Boucle - FOR

Dans un dossier nommé TP_PHP sur votre machine :
TP_PHP_3 - Rédiger un script PHP nommé “script_php_3.php” permettant de :
- Lire une entrée clavier en demandant de tapé un mot
- Réaliser un nombre de tour de boucles relatif au nombre de lettre du mot
- Lire documentation PHP
- Pour chaque tour de boucle afficher le texte ‘Lettre X’
Lancer votre script à l’aide de la commande: php script_php_3.php
*/

$word = readline("Votre mot : ");
$max = strlen($word);

for ($i = 0; $i < $max; $i++) {
    echo ("La lettre $i est $word[$i] \n");
}


echo $word;