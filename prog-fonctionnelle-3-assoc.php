<?php
echo "**************************************************\n";
echo "**********      Exercice 3       ****************\n";
echo "**************************************************\n";
$limit = 200;
$countries = ['Chine' => 1300, 'France' => 200, 'Allemagne' => 200, 'Espagne' => 500];
$countries = array_filter($countries, function ($ele) use ($limit) {
    return $ele > $limit;
});
var_dump($countries);