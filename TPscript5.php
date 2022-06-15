<?php

$html = file_get_contents('https://www.ikea.com/fr/fr/');


$htmlDom = new DOMDocument;
@$htmlDom->loadHTML($htmlString);

$anchorTags = $htmlDom->getElementsByTagName('a');

$extractedAnchors = array();

foreach($anchorTags as $anchorTag){

    $aHref = $anchorTag->getAttribute('href');

    $extractedAnchors[] = array(
        'href' => $aHref,
    );

    file_put_contents("link.html", $html);
}

/*
- Dans un script, Créer un fichier CSV
- Stocker tous les liens de la page web https://www.it-akademy.fr/ dans le
fichier CSV
*/