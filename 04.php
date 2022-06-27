<?php

$number  =(int) readline("Enter number: ");
$symbol = readline("Select the character: ");
for($i=0; $i<$number;$i++){
    for($j= 0;$j<=$i;$j++){
        echo $symbol;
    }
    echo PHP_EOL;
}