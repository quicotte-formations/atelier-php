<?php

function monCallback($elemAct){
    return strtoupper($elemAct);
}

$pays=['france','belgique','chine'];
$pays = array_map( 'monCallback', $pays );
var_dump($pays);exit;


$paysPop = [
    ['pays'=>'france', 'pop'=>70],
    ['pays'=>'chine', 'pop'=>1400]
];