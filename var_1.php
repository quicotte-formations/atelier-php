<?php
/**
 * Créer 2 variables $prenomA et $prenomB, que l'util entre au clavier

Inverser le contenu des 2 variables

Afficher les 2 var avec echo
 */

echo 'Prénom A :';
$prenomA = readline();
echo 'Prénom B :';
$prenomB = readline();
$inter = $prenomA;
$prenomA = $prenomB;
$prenomB = $inter;
echo "$prenomA $prenomB";