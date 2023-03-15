<?php


function parValeur(int $n){
    $n=10;
}

function parReference(int &$n){
    $n=10;
}

$a=1;
$b=1;
parValeur($a);# A vaut toujours 1
parReference($b);# B vaut 10
echo $a . ' ' . $b;
