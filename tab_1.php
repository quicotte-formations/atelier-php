<?php
/**
 * Demander à l'utilisateur d'entrer sur la même ligne 3 couleurs séparées par des virgules

Les transformer en tableau

Inverser ce tableau

Transformer ce tableau en 1 string, avec comme séparateur un espace

Afficher ce string
 */
echo "veuillez rentrer 3 couleurs séparées par des virgules \n";
$colorArray = explode(',', readline());
$colorArrayReversed = array_reverse($colorArray);
var_dump(implode(' ', $colorArrayReversed));
