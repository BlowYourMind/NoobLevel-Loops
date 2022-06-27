<?php
$number  =(int) readline("Enter number");

for($i=0; $i<=$number;$i++){
    for($j = 0;$j<=$number;$j++) {
        if ($j < $i) {
            echo ".";
        } else {
            echo "*";
        }
    }
    echo PHP_EOL;
}
//01234 - 0
//01234 - 1
//01234 - 2
//01234 - 3
//01234 - 4

