<?php

$number  =(int) readline("Enter number: ");
if($number%2 !== 0 ) {


    for ($i = 1; $i <= ($number + 1) / 2; $i++) {
        for ($j = ($number - 1) / 2; $j >= $i; $j--) {
            echo "_";
        }
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "*";
        }
        for ($j = ($number - 1) / 2; $j >= $i; $j--) {
            echo "_";
        }
        echo PHP_EOL;
    }
    for ($i = 1; $i <= ($number - 1) / 2; $i++) {
        for ($j = 0; $j < $number; $j++) {
            if ($j == 0 || $j == $number - 1) {
                echo "|";
            } else {
                echo '*';
            }
        }
        echo PHP_EOL;
    }
}
else{
    for ($i = 1; $i <= $number / 2; $i++) {
        for ($j = ($number-1) / 2; $j >= $i; $j--) {
            echo "_";
        }
        for ($k = 0; $k < $i * 2 ; $k++) {
            echo "*";
        }
        for ($j = ($number - 1) / 2; $j >= $i; $j--) {
            echo "_";
        }
        echo PHP_EOL;
    }
    for ($i = 1; $i <= $number / 2; $i++) {
        for ($j = 0; $j < $number; $j++) {
            if ($j == 0 || $j == $number - 1) {
                echo "|";
            } else {
                echo '*';
            }
        }
        echo PHP_EOL;
    }
}
// if($j !=($number +1)/2 && $i< ($number+1) / 2) {
//            echo '-';
// 0 01234
// 1 01234
// 2 01234                             01234
// 3 01234
// 4 01234

