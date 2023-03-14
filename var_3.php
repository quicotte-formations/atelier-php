<?php
/**
3. Demander à l'utilisateur d'entrer un nombre décimal ( double )
et un exposant entier ( respectivement variables n et e

Afficher n à la puissance e
 */

echo "Entrez un nombre décimal:";
$n = (double) readline();
echo "Exposant:";
$e = (int) readline();
$res = pow($n, $e);
echo $res;