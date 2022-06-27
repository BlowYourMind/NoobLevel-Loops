<?php

$number  =(int) readline("Enter number: ");
$timesToPrint = $number-2;
for($i=1;$i<=($number-1)+($number-2);$i++){
    if($i == $number-1){
        echo str_repeat(' ',$number-1);
        echo "@";
        echo str_repeat(' ',$number-1);
    }
    elseif($i%2 == 0){
        for($j=0;$j<$timesToPrint;$j++){
            echo "-";
        }
        echo "\\ /";
        for($j=0;$j<$timesToPrint;$j++){
            echo "-";
        }
    }
    else {
        for($j=0;$j<$timesToPrint;$j++){
            echo "*";
        }
        echo "\\ /";
        for($j=0;$j<$timesToPrint;$j++){
            echo "*";
        }
    }
echo PHP_EOL;
}
