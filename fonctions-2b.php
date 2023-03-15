<?php
include_once 'fonctions-2.php';

/* Créer une fonction puissance(n,p) et qui renvoie le résultat ! pas de pow à l'intérieur */
echo "Entrez un nombre :";
$a = readline();
echo "\n Entrez un nombre pour la puissance:";
$b = readline();
echo $a." à la puissance ".$b." = ".nbPuissance($a,$b);