<?php

$arr = [];
$value = "";

for ($i = 0; $i < 30; $i++) {
    $value = rand(0, 100);
    array_push($arr, $value);
}

for ($i = 0; $i < 30; $i+=2) {
    unset($arr[$i]);
}

print_r($arr);


for ($i = 0; $i < 3; $i++) {
    $index = readline("Votre valeur sera à l'index : ");
    $valeur = readline("Votre valeur : ");
    $arr[$index] = $valeur;
    ${"ind".$i} = $index;
    ${"val".$i} = $valeur;
}

echo ("\n\n\n");

ksort($arr);
for($i = 0; $i < 3; $i ++) {
    echo ("\nVotre valeur à l'index ". ${"ind".$i}. " est ".${"val".$i}. "\n");
}
print_r($arr);