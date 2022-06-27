<?php

$number  =(int) readline("Enter number: ");
if($number % 2 ==0) {
    (int)$bridgePosition = ($number) / 2;
}
else {
    (int)$bridgePosition = ($number+1) / 2;
}
$totalLength = $number*4+$number;
for($i = 0; $i<$number;$i++) {
    for ($j = 0; $j < $totalLength; $j++) {
        if($j<$number*2 || $j>=$number*2+$number){

            if ($i == 0 || $i == $number - 1) {
            echo "*";
        }
            elseif ($j == 0 || $j == $number * 2 - 1) {
            echo "*";
        }

            elseif ($j == $number*2+$number || $j == $totalLength - 1) {
            echo "*";
        }

            else {
            echo "/";
        }
    }
        else{

            if($i+1 == $bridgePosition){
                echo "|";
    }
            else{
                echo ' ';
       }
    }
        }
    echo PHP_EOL;
}

