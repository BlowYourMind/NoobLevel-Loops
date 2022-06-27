<?php


$number = (int)readline("Enter number");

for ($i = 0; $i < $number; $i++) {
    for ($j = 0; $j < $number; $j++) {
        echo "*". str_repeat(' ', 1) ;
        // echo "* "; same
    }
    echo PHP_EOL;
}