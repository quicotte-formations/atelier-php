<?php
echo "**************************************************\n";
echo "************** l'Exponentielle  ******************\n";
echo "**************************************************\n";
echo "Saissiez votre nombre:\n";
$number = readline();
echo "Saissiez votre puissance:\n";
$expo = readline();
$res = $number;
for ($i = 1; $i < $expo; $i++) {
    $res = $res * $number;
}
echo "Le resultat est :$res \n";
 