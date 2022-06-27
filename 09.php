<?php

$number = (int)readline("Enter number: ");
for ($i = 0; $i <= $number; $i++) {
    for ($j = $number; $j > $i; $j--) {
        echo " ";
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    echo "|";
    for ($k = 0; $k < $i ; $k++) {
        echo "*";
    }
    echo PHP_EOL;

}