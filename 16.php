<?php
$number  =(int) readline("Enter number: ");

for($i = 1; $i<=$number;$i++){
    for($j = 1; $j<=$number*2;$j++ ){
        if($i == 1 ){
            if($j == 1 || $j == ($number*2)-($number-2)){
                echo "/";
            }
            elseif($j ==$number-1 || $j == $number*2){
                echo "\\";
            }
            elseif($j< ($number*2)-($number-2) && $j> $number-1){
                echo"_";
            }

            else {
                echo "^";
            }
        }
        elseif($i == $number ){
            if($j == 1 || $j == ($number*2)-($number-2)){
                echo "\\";
            }
            elseif($j == $number-1 || $j == $number*2){
                echo "/";
            }
            elseif($j > $number-1 && $j < ($number*2)-($number-2) ){
                echo " ";
            }
            else {
                echo "_";
            }
        }
        elseif ($i == $number-1 && $j > $number-1 && $j < ($number*2)-($number-2)){
                echo '_';
        }
        else {
            if($j == 1 || $j == $number*2){
                echo "|";
            }
            else{
                echo " ";
            }
        }
    }
    echo PHP_EOL;
}