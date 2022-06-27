<?php

$number  =(int) readline("Enter number: ");
$total = $number*2;
for($i = 1;$i<=$number;$i++){
    for($j=$number;$j>=$i;$j--){
        echo $j;
    }
    for($k=$i-1;$k>0;$k-=2){
        $times = $k*2;
       echo str_repeat(" ",$k);

    }
    for($j=$i;$j<=$number;$j++){
        echo $j;
    }
   echo PHP_EOL;
}