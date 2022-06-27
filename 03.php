<?php
$number  =(int) readline("Enter number");

for($i=1; $i<=$number;$i++){
    if($i == 1 || $i ==$number){
        for ($j = 0; $j < $number; $j++) {
            echo "*";
        }
    }
    else {
        echo '*' .str_repeat(' ', $number-2). '*';

    }
    echo PHP_EOL;
    }
