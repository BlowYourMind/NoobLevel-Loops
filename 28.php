<?php

$number  =(int) readline("Enter number: ");
$type = readline("Select the type: (a/b/c/d)");

switch ($type){
    case "a":
        for($i = 0; $i < $number; $i++) {

        for($j = 0; $j <= $i; $j++) {
            echo "#";
        }
        echo PHP_EOL;
    }
        break;

    case "b":
        for($i = 0; $i < $number; $i++) {

            for($j = 0; $j < $number - $i; $j++) {
                echo "#";
            }
            echo PHP_EOL;
        }
        break;

    case "c":
        for($i = 0; $i < $number; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo " ";
            }
            for($j = 0; $j < $number - $i; $j++) {
                echo "#";
            }
            echo PHP_EOL;
        }
        break;

    case "d":
    for($i = 0; $i < $number; $i++) {
        for($j = 1; $j < $number - $i; $j++) {
            echo " ";
        }
        for($k = 0; $k <= $i; $k++) {
            echo "#";
        }
        echo PHP_EOL;
    }
    break;

}