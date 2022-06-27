<?php
$number  =(int) readline("Enter number: ");
$direction = readline("Select direction: (R/L)");
if($direction == "R") {
    for ($i = $number - 1; $i > 0; $i--) {
        for ($j = ($number - $i) * 2; $j >= 0; $j--) {
            echo ' ';
        }
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
    for ($i = $number; $i > 0; $i--) {
        for ($j = 0; $j < $i * 2; $j++) {
            echo ' ';
        }
        for ($j = $number - $i; $j >= 0; $j--) {
            echo "*";
        }
        echo PHP_EOL;
    }
}
else{
    for ($i = $number - 1; $i > 0; $i--) {
        for ($j = 0; $j < $i * 2; $j++) {
            echo ' ';
        }
        for ($j = 0; $j <= $i; $j++) {
            echo "*";
        }
        echo PHP_EOL;
    }
    for ($i = $number; $i > 0; $i--) {
        for ($j = ($number - $i) * 2; $j >= 0; $j--) {
            echo ' ';
        }
        for ($j = $number - $i; $j >= 0; $j--) {
            echo "*";
        }
        echo PHP_EOL;
    }
}

