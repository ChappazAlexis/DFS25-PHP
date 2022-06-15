<?php

// HTML String
$htmlString = file_get_contents('https://www.google.com');
$link = fopen("link.csv","w+");

$htmlDom = new DOMDocument;

//Load the HTML string into our DOMDocument object.
@$htmlDom->loadHTML($htmlString);

//Extract all anchor elements / tags from the HTML.
$anchorTags = $htmlDom->getElementsByTagName('a');

//Create an array to add extracted images to.
$extractedAnchors = array();

//Loop through the anchors tags that DOMDocument found.
foreach($anchorTags as $anchorTag){

    //Get the href attribute of the anchor.
    $aHref = $anchorTag->getAttribute('href');

    //Add the anchor details to $extractedAnchors array.
    $extractedAnchors[] = array(
        'href' => $aHref,

    );
}

foreach($extractedAnchors as $value) {
    fputcsv($link, $value);
}


/*
- Dans un script, Créer un fichier CSV
- Stocker tous les liens de la page web https://www.it-akademy.fr/ dans le
fichier CSV
*/