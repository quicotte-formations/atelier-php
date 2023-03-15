<?php
/*En utilisant la fonction array_map (cf page 42:
 -> tranformer un tableau de mots en minuscules, vers un tableau de mots en majuscules*/
echo "avec une fonction anonyme \n";
$personnesMin = ['eric', 'paul', 'jean', 'pierre'];
print_r($personnesMin);
$personnesMaj = array_map(function ($elemActuel) {
    $nomMaj = strtoupper($elemActuel);
    return $nomMaj;
}, $personnesMin);
echo "\n";
print_r($personnesMaj);

echo "\n ou directement \n";
$personnesMin = ['eric', 'paul', 'jean', 'pierre'];
print_r($personnesMin);
$personnesMaj = array_map('strtoupper', $personnesMin);
echo "\n";
print_r($personnesMaj);