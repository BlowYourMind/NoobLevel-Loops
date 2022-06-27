<?php

$number  =(int) readline("Enter number: ");

for($i = 0;$i<=$number;$i++){
    for($j=1;$j<=$number-$i;$j++){
        if($number-$i == $j){
            echo $j;
        }
        else {
            echo $j . " * ";
        }
    }
   echo PHP_EOL;
}