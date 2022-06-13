<?php

$word = readline("Votre mot : ");
$max = strlen($word);

for ($i = 0; $i < $max; $i++) {
    echo ("La lettre $i est $word[$i] \n");
}


echo $word;