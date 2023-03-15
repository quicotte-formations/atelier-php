<?php
echo "**************************************************\n";
echo "***************      Exercice 1      *************\n";
echo "**************************************************\n";
function upperName(string...$x)
{
    foreach ($x as $element) {
        $res = strtoupper($element);
        echo "$res \n";
    }
}

upperName('bonjour','hello','123');