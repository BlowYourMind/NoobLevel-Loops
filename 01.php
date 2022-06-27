<?php
$number  =(int) readline("Enter number");

for($i=0; $i<$number;$i++){
    for($j=0;$j<$number;$j++){
        echo "*";
    }
    echo PHP_EOL;
}