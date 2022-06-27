<?php
$number  =(int) readline("Enter number: ");
$type = readline("Select the type: (a/b/c/d)");

switch ($type){
    case "a":
        for ($i = 1; $i <= $number; $i++) {
            for ($j = $number; $j > $i; $j--) {
                echo " ";
            }
            for ($k = 0; $k < $i * 2 - 1; $k++) {
                echo "*";
            }
            echo PHP_EOL;
        }

    break;

    case "b":
        for ($i = $number; $i > 0; $i--) {
            for ($j = $number - $i; $j > 0; $j--)
                echo " ";
            for ($j = 2 * $i - 1; $j > 0; $j--)
                echo "#";
            echo PHP_EOL;
        }
    break;

    case "c":
        for ($i = 1; $i <= $number; $i++) {
            for ($j = $number; $j > $i; $j--) {
                echo " ";
            }
            for ($k = 0; $k < $i * 2 - 1; $k++) {
                echo "#";
            }
            echo PHP_EOL;
        }
        for ($i = 1; $i <= $number - 1; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo " ";
            }
            for ($k = ($number - $i) * 2 - 1; $k > 0; $k--) {
                echo "#";
            }
            echo PHP_EOL;
        }
    break;

    case "d":
        for ($i = 1; $i <= $number; $i++) {
            for ($j = $number; $j > $i; $j--) {
                echo "#";
            }
            for ($k = 0; $k < $i * 2 - 1; $k++) {
                echo " ";
            }
            for ($j = $number; $j > $i; $j--) {
                echo "#";
            }
            echo PHP_EOL;
        }
        for ($i = 1; $i <= $number - 1; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "#";
            }
            for ($k = ($number - $i) * 2 - 1; $k > 0; $k--) {
                echo " ";
            }
            for ($j = 0; $j < $i; $j++) {
                echo "#";
            }
            echo PHP_EOL;
        }

    break;

}