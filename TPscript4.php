<?php 

$html = file_get_contents('https://www.ikea.com/fr/fr/');

file_put_contents("ikea.html", $html);

/*
- Dans un script, Créer un fichier .html
- Stocker le code source de la page web https://www.ikea.com/fr/fr/
*/