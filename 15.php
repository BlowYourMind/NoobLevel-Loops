<?php
$number  =(int) readline("Enter number: ");
$direction = readline("Select direction: (right/left)");
$filling = readline("Is it empty? (Y/n)");
if($direction == "right") {
    if ($filling == "n") {
        for ($i = 1; $i <= $number; $i++) {
            for ($j = 1; $j <= $number - $i; $j++) {
                echo " ";
            }
            for ($j = 1; $j <= $number; $j++) {
                echo "*";
            }
            echo PHP_EOL;
        }
    }
    else {
        for ($i = 1; $i <= $number; $i++)
        {

            for ($j = 1; $j <= $number - $i; $j++) {
                echo " ";
            }
            if ($i == 1 || $i == $number) {
                for ($j = 1; $j <= $number; $j++) {
                    echo "*";
                }
            }
            else{
                for ($j = 1; $j <= $number; $j++) {
                    if ($j == 1 || $j == $number) {
                        echo "*";
                    }
                    else{
                        echo " ";
                        }
                }
            }
            echo PHP_EOL;
        }
    }
}
else{
    if($filling == "n") {
        for ($i = 1; $i <= $number; $i++) {
            for ($j = 1; $j <= $i; $j++)
                echo " ";

            for ($j = 1; $j <= $number; $j++)
                echo "*";

            echo PHP_EOL;
        }
    }
    else{
        for ($i = 1; $i <= $number; $i++)
        {
            for ($j = 1; $j <= $i; $j++) {
                echo " ";
            }
            if ($i == 1 || $i == $number) {
                for ($j = 1; $j <= $number; $j++) {
                    echo "*";
                }
            }
            else{
                for ($j = 1; $j <= $number; $j++) {
                    if ($j == 1 || $j == $number) {
                        echo "*";
                    }
                    else{
                        echo " ";
                    }
                }
            }
            echo PHP_EOL;
        }
    }
}