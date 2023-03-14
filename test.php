<?php
$test = '123';
$test2 = 123;
if ($test !== $test2) {
    echo "test 1 : Différents parceque les deux variables n'ont pas le même type ou pas même contenu ou les 2: \n";
}
if ($test != $test2) {
    echo 'test 2 : Différents';
}