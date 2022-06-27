<?php

$number  =(int) readline("Enter number: ");
for($i = 0; $i<$number;$i++) {
    for($j = 0; $j<$number;$j++){

        if($j = ($number+1-$i)/2)echo '_';
    }
echo PHP_EOL;
}