<?php
echo "**************************************************\n";
echo "**********      Exercice 2        ****************\n";
echo "**************************************************\n";
$countriesPop = ['Chine' => 1300, 'France' => 200, 'Allemagne' => 200, 'Espagne' => 500];
uasort($countriesPop, function ($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
});
var_dump($countriesPop);
