<?php

$number  =(int) readline("Enter number: ");
echo " * |  ";
for($i=1;$i<=$number;$i++){
    echo $i. "   ";
    if($i== $number){
        echo PHP_EOL;
        for($j=0;$j<$number*5-$number/2;$j++){
            echo "-";
        }
        echo PHP_EOL;
    }
}
    for($i = 1;$i<=$number;$i++){
        if($i<10){
            echo ' ';
        }
        echo $i ." |  ";
        for($j= 1; $j<=$number;$j++){
            $result = $j*$i;
            if($result >=10 && $result<90){
                echo $result. "  ";
            }
            elseif($result>=90){
                echo $result. " ";
            }
            else{
            echo $result. "   ";
                }
                if($result/$number == $i){
                    echo PHP_EOL;
     }
    }
    }
