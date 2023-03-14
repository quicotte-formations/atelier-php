<?php /* Calculer la factorielle d'un nombre demandé à l'utilisateur.*/
echo "**************************************************\n";
echo "**********la Factorielle d'un nombre  **************\n";
echo "**************************************************\n";
echo "Saissiez votre nombre:\n";
$number = readline();
$res = 1;
$str = [];
for ($i = $number; $i > 0; $i--) {
    $res = $res * $i;
    $str[] = $i;
}
$resStr = implode(' * ', $str);
echo "Le resultat est $resStr = $res \n";

