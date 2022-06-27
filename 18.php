<?php

$number  =(int) readline("Enter number: ");
for($i = 1 ; $i<=$number;$i++){
    $counter = 1;
    for($j=0;$j<$i;$j++){
        echo $counter ." ";
        $counter *=2;
    }
    echo PHP_EOL;
}