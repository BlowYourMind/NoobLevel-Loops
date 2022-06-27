<?php

$number  =(int) readline("Enter number: ");
$alpha = range('A','Z');
var_dump($alpha);
for($i = 0; $i<$number;$i++){
    for($j = 0; $j<=$i;$j++){
        echo $alpha[$i]. ' ';
    }
    echo PHP_EOL;
}